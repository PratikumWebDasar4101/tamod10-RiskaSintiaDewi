<?php
	require 'Controller.php';
	//require_once 'koneksi.php';
	$controller = new controller();

	$nim=$_GET['nim'];
	
	$result = $controller->ambil_data($nim);

	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
		$NamaDepan = $row['NamaDepan'];
		$NamaBelakang = $row['NamaBelakang'];
		$email = $row['email'];
		$nim = $row['nim'];
		$kelas = $row['kelas'];
		$tgl = $row['tgl'];
		$hobi = explode(", ", $row['hobi']);
		$film = explode(", ", $row['film']);
		$wisata = explode(", ", $row['wisata']);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Edit Data</title>
</head>
<body>

				        <a href="dashboard.php">Dashboard</a>
				        <a href="newData.php">Add Data</a>
				        <a href="profile.php">Lihat Profil</a>
				        <a href="controller.php?logout=true" style="color:red">Logout</a>
						
						
						<?php $controller->edit(); ?>

						<h2>Edit Data Mahasiswa</h2>
						<table>
							<form action="" method="post">
								<tr>
									<td>Nama Depan</td>
									<td> : </td>
									<td><input type="text" name="NamaDepan" value="<?php echo $NamaDepan; ?>"></td>
								</tr>
								<tr>
									<td>Nama Belakang</td>
									<td> : </td>
									<td><input type="text" name="NamaBelakang" value="<?php echo $NamaBelakang; ?>"></td>
								</tr>
								<tr>
									<td>NIM</td>
									<td> : </td>
									<td><input type="text" name="nim" value="<?php echo $nim; ?>"></td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td> : </td>
									<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td> : </td>
									<td><input type="text" name="kelas" value="<?php echo $kelas; ?>"></td>
								</tr>
								<tr>
									<td>Hobby</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="hobi[]" value="Membaca" <?php in_array('Membaca', $hobi) ? print "checked" : ""; ?>>Membaca<br>
										<input type="checkbox" name="hobi[]" value="Menulis" <?php in_array('Menulis', $hobi) ? print "checked" : ""; ?>>Menulis<br>
										<input type="checkbox" name="hobi[]" value="Menggambar" <?php in_array('Menggambar', $hobi) ? print "checked" : ""; ?>>Menggambar<br>
										<input type="checkbox" name="hobi[]" value="Gambar" <?php in_array('Gambar', $hobi) ? print "checked" : ""; ?>>Melihat<br>
										<input type="checkbox" name="hobi[]" value="Melukis" <?php in_array('Melukis', $hobi) ? print "checked" : ""; ?>>Melukis<br>
									</td>
								</tr>
								<tr>
									<td>Genre Film</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="film[]" value="Action" <?php in_array('Action', $film) ? print "checked" : ""; ?>>Action<br>
										<input type="checkbox" name="film[]" value="Romance" <?php in_array('Romance', $film) ? print "checked" : ""; ?>>Romance<br>
										<input type="checkbox" name="film[]" value="Thriller" <?php in_array('Thriller', $film) ? print "checked" : ""; ?>>Thriller<br>
										<input type="checkbox" name="film[]" value="Sci-Fi" <?php in_array('Sci-Fi', $film) ? print "checked" : ""; ?>>Sci-Fi<br>
										<input type="checkbox" name="film[]" value="Fantasy" <?php in_array('Fantasy', $film) ? print "checked" : ""; ?>>Fantasy<br>
									</td>
								</tr>
								<tr>
									<td>Tempat Wisata</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="wisata[]" value="Bali" <?php in_array('Bali', $wisata) ? print "checked" : ""; ?>>Bali<br>
										<input type="checkbox" name="wisata[]" value="Lombok" <?php in_array('Lombok', $wisata) ? print "checked" : ""; ?>>Lombok<br>
										<input type="checkbox" name="wisata[]" value="Bromo" <?php in_array('Bromo', $wisata) ? print "checked" : ""; ?>>Bromo<br>
										<input type="checkbox" name="wisata[]" value="Raja Ampat" <?php in_array('Raja Ampat', $wisata) ? print "checked" : ""; ?>>Raja Ampat<br>
										<input type="checkbox" name="wisata[]" value="Semeru" <?php in_array('Semeru', $wisata) ? print "checked" : ""; ?>>Semeru<br>
									</td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td> : </td>
									<td><input type="date" name="tgl" value="<?php echo $tgl; ?>"></td>
								</tr>
								<tr>
									<td><input type="submit" name="editdata" value="Edit Data"></td>
								</tr>
							</form>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>	