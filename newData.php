<?php
	require_once 'Controller.php';
	$controller = new controller();
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Add Data</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-12" style="margin: 10px 0 0 0">
				<nav class="navbar navbar-expand-lg">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" >
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNav">
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link" href="dashboard.php">Dashboard</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="newData.php">Add Data</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="profile.php">Lihat Profil</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="controller.php?logout=true" style="color:black">Logout</a>
				      </li>
				    </ul>
				  </div>
				</nav>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12" style="margin: 10px 0 0 0">
					<div class="card-body">
						<h2>Input Data Mahasiswa</h2>
						<table>
							<form action="" method="post">
								<tr>
									<td>Nama Depan</td>
									<td> : </td>
									<td><input type="text" name="NamaDepan" class="form-control"></td>
								</tr>
								<tr>
									<td>Nama Belakang</td>
									<td> : </td>
									<td><input type="text" name="NamaBelakang" class="form-control"></td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td> : </td>
									<td><input type="text" name="email" class="form-control" value="@gmail.com"></td>
								</tr>
								<tr>
									<td>NIM</td>
									<td> : </td>
									<td><input type="text" name="nim" class="form-control"></td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td> : </td>
									<td><input type="text" name="kelas" class="form-control"></td>
								</tr>
								<tr>
									<td>Hobby</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
										<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
										<input type="checkbox" name="hobi[]" value="Menggambar">Menggambar<br>
										<input type="checkbox" name="hobi[]" value="Gambar">Gambar<br>
										<input type="checkbox" name="hobi[]" value="Melukis">Melukis<br>
									</td>
								</tr>
								<tr>
									<td>Genre Film</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="film[]" value="Action">Action<br>
										<input type="checkbox" name="film[]" value="Romance">Romance<br>
										<input type="checkbox" name="film[]" value="Thriller">Thriller<br>
										<input type="checkbox" name="film[]" value="Sci-Fi">Sci-Fi<br>
										<input type="checkbox" name="film[]" value="Fantasy">Fantasy<br>
									</td>
								</tr>
								<tr>
									<td>Tempat Wisata</td>
									<td> : </td>
									<td>
										<input type="checkbox" name="wisata[]" value="Bali">Bali<br>
										<input type="checkbox" name="wisata[]" value="Lombok">Lombok<br>
										<input type="checkbox" name="wisata[]" value="Bromo">Bromo<br>
										<input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat<br>
										<input type="checkbox" name="wisata[]" value="Semeru">Semeru<br>
									</td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td> : </td>
									<td><input type="date" name="tgl" class="form-control"></td>
								</tr>
								<tr>
									<td><input type="submit" name="inputdata" value="Input Data" class="btn btn-success"></td>
								</tr>
							</form>
						</table>
						<?php $controller->newData(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</html>	