<?php
	class controller{

		function login(){
			require_once 'koneksi.php';
			if (isset($_POST['login'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];

				$sql = "SELECT * FROM login WHERE username='$username' && password='$password'";
				$query = mysqli_query($db, $sql);
				if (mysqli_num_rows($query) == 1) {
					session_start();
					$_SESSION['username'] = $username;
					header("Location: dashboard.php");
				}else{
					echo "<div class='alert alert-danger' role='alert'>";
					echo "Login Gagal !!";
					echo "</div>";
				}
			}
		}

		function registrasi(){
			require_once 'koneksi.php';
			if (isset($_POST['registrasi'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				

				$sql = "INSERT INTO login(username,password) VALUES ('$username','$password')";

				if(mysqli_query($db, $sql)){
					header("Location: index.php");
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($db);
				}
			}
		}

		function dashboard(){
			require_once 'koneksi.php';
			$sql = "SELECT * from register";

			$result = mysqli_query($db, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$nim = $row['nim'];
					echo "<tr>";
					echo "<td>" . $nim . "</td>";
					echo "<td>" . $row['NamaDepan'] . "</td>";
					echo "<td>" . $row['NamaBelakang']  . "</td>";
					echo "<td>" . $row['email']  . "</td>";
					echo "<td>" . $row['kelas']  . "</td>";
					echo "<td>" . $row['hobi']  . "</td>";
					echo "<td>" . $row['film']  . "</td>";
					echo "<td>" . $row['wisata']  . "</td>";
					echo "<td>" . $row['tgl']  . "</td>";
					echo "<td> <a href='form_edit.php?nim=$nim'>Edit</a> | <a href='controller.php?delete=true&nim=$nim'>Hapus</a> </td>";
					echo "</tr>";
				}
			}else{
				echo "0 result";
			}

			mysqli_close($db);
		}

		function newData(){
			require_once 'koneksi.php';
			if (isset($_POST['inputdata'])) {

				$NamaDepan = $_POST['NamaDepan'];
				$NamaBelakang = $_POST['NamaBelakang'];
				$email = $_POST['email'];
				$nim = $_POST['nim'];
				$kelas = $_POST['kelas'];	
				$hobi = $_POST['hobi'];
				$film = $_POST['film'];
				$wisata = $_POST['wisata'];
				$tgl = $_POST['tgl'];

				$hobi = implode(", ", $hobi);
				$film = implode(", ", $film);
				$wisata = implode(", ", $wisata);	

				$sql = "INSERT INTO register(NamaDepan,NamaBelakang,email,nim,kelas,hobi,film,wisata,tgl)
						VALUES ('$NamaDepan','$NamaBelakang','$email','$nim','$kelas','$hobi','$film','$wisata','$tgl')";

				if (mysqli_query($db, $sql)) {
					echo "<br>";
					echo "Data Berhasil di Input";
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($db);

				}

			mysqli_close($db);
			}
		}

		function profile(){
			require_once 'koneksi.php';
			session_start();
			$username = $_SESSION['username'];

			$sql = "SELECT * FROM login WHERE username='$username'";

			$result = mysqli_query($db, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$username = $row['username'];
					echo "<tr>";
					echo "<td>" . $username . "</td>";
					echo "<td>" . $row['password'] . "</td>";
					echo "<td><a href=editpass.php?username=$username>Edit Password</a></td>";
					echo "</tr>";
				}
			}else{
				echo "0 result";
			}

			mysqli_close($db);
		}

		function delete($nim){
			if (!empty($_GET['nim'])) {
			require_once 'koneksi.php';
				$sql = "DELETE FROM register WHERE nim='$nim'";
				if (mysqli_query($db, $sql)) {
					header("Location: dashboard.php");
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}

		function ambil_data($nim){
				require_once 'koneksi.php';
				$sql = "SELECT * from register where nim='$nim'";
				return mysqli_query($db, $sql);

		}

		function edit(){
			if (isset($_POST['editdata'])) {
				$NamaDepan = $_POST['NamaDepan'];
				$NamaBelakang = $_POST['NamaBelakang'];
				$email = $_POST['email'];
				$nim = $_POST['nim'];
				$kelas = $_POST['kelas'];	
				$hobi = $_POST['hobi'];
				$film = $_POST['film'];
				$wisata = $_POST['wisata'];
				$tgl = $_POST['tgl'];

				$hobi = implode(", ", $hobi);
				$film = implode(", ", $film);
				$wisata = implode(", ", $wisata);	
				
				$db = new mysqli("localhost", "root", "", "jurnal10");
				$sql = "UPDATE register SET NamaDepan='$NamaDepan',NamaBelakang='$NamaBelakang',email='$email',
						kelas ='$kelas',hobi='$hobi',film='$film',wisata='$wisata',tgl='$tgl' WHERE 
						nim='$nim'";

				if (mysqli_query($db, $sql)) {
					echo "<br>";
					echo "Data Mahasiswa Berhasil Diubah";
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($db);
				}
				mysqli_close($db);
			}
		}

		function datapass($username){
			require_once 'koneksi.php';
			$sql = "SELECT * FROM login WHERE username='$username'";
			return mysqli_query($db, $sql);

		}

		function editpass(){
			if (isset($_POST['editpass'])) {
				$username = $_POST['username'];
				$newpass = $_POST['newpassword'];
				$db = new mysqli("localhost", "root", "", "jurnal10");
				$sql = "UPDATE login SET password='$newpass' WHERE username='$username'";

				if (mysqli_query($db, $sql)) {
					echo "<br>";
					echo "Password Berhasil Diubah";
				}else{
					echo "Error : " . $sql . "<br>" . mysqli_error($db);
				}
				mysqli_close($db);
			}
		}

		function cari(){
			require_once 'koneksi.php';
			$cari = $_POST['search'];
			$sql = "SELECT * FROM register WHERE nim LIKE '%$cari%'";
			$result = mysqli_query($db, $sql);

			if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['NamaDepan'] . "</td>";
				echo "<td>" . $row['NamaBelakang']  . "</td>";
				echo "<td>" . $row['email']  . "</td>";
				echo "<td>" . $row['nim'] . "</td>";
				echo "<td>" . $row['kelas']  . "</td>";
				echo "<td>" . $row['hobi']  . "</td>";
				echo "<td>" . $row['film']  . "</td>";
				echo "<td>" . $row['wisata']  . "</td>";
				echo "<td>" . $row['tgl']  . "</td>";
				echo "</tr>";
			}
			}
		}

		function logout(){
			session_start();
			session_destroy();
			header("Location: index.php");
		}
	}

	$controller = new Controller();
	if (isset($_GET['logout'])) {
		$controller->logout();
	}

	if (isset($_GET['delete'])) {
		$nim = $_GET['nim'];
		$controller->delete($nim);
	}
?>