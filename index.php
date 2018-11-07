<?php

	require_once 'Controller.php';
	$controller = new controller();
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<title>Login</title>
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8" style="margin: 30px 0 0 0">
					<div class="card-body">

						<?php $controller->login(); ?>

						<form action="" method="post">
							<h2>Login</h2>
								Username :
								<input type="text" name="username" class="form-control">
								
								Password :
								<input type="password" name="password" class="form-control">

								<input type="submit" name="login" value="Login" class="btn btn-block btn-primary" style="margin: 5px 0 0 0">
								<small> Belum punya akun? <a href="register.php">Create User</a> </small>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
