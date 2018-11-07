<?php
	require_once 'Controller.php';
	$controller = new controller();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Profile</title>
</head>
<body>

				        <a href="dashboard.php">Dashboard</a>
				        <a href="newData.php">Add Data</a>
				        <a href="profile.php">Lihat Profil</a>
				        <a href="controller.php?logout=true" style="color:red">Logout</a>

						
						<table class="table table-bordered">
						  <thead>
						    <tr>
						      <th scope="col">Username</th>
						      <th scope="col">Password</th>
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  	  <?php $controller->profile(); ?>
						  </tbody>
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