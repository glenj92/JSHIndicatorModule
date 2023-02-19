<?php
session_start();
?>

<?php require 'login.php'; ?>

<?php
if (isset($_SESSION["session_username"])) {
    header("Location: ../page/main/");
}


if (isset($_POST["btn-login"])) {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $lgin = new Login;
    	$cuenta_user = $lgin->getUser($username, $password);

    	if ($cuenta_user) {
    		echo "<script type='text/javascript'>alert('Bienvenido'); </script>";
            $_SESSION['session_username'] = $username;
            header("Location: ../page/main/");
	    } else {
	    	echo "<script type='text/javascript'>alert('Nombre de Usuario y/o Clave Invalida'); </script>";
	    }

    } else {
        echo "<script type='text/javascript'>alert('Debe introducir todos los campos'); </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Register Page  - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap Core CSS -->
    	<link href="../theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    	<!-- Custom Fonts -->
    	<link href="../theme/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    	<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    	<!-- Login Css -->
    	<link href="../theme/css/login.css" rel="stylesheet" type="text/css">




    <!--link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet"-->    
    <!--script src="http://code.jquery.com/jquery-1.11.1.min.js"></script-->
    <!--script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script-->
		<!-- Website Font style -->
	    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"-->
		
		

		<title>Admin</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<img src="../theme/img/ticomlogo.png">
	               	</div>
	            </div> 
	            <div id="output"></div>
				<div class="main-login main-center">
				
					<form class="form-horizontal" method="post" action="">

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Usuario</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Ingrese su Usuario"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Contraseña</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Ingrese su Contraseña"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" name="btn-login" class="btn btn-primary btn-lg btn-block login-button">Login</button>
						</div> 
					</form>
				</div>
			</div>
		</div>

		<!-- Bootstrap Core JavaScript -->
    	<script src="../theme/vendor/bootstrap/js/bootstrap.min.js"></script>
    	<!-- jQuery -->
    	<script src="../theme/vendor/jquery/jquery.min.js"></script>
	</body>

</html>
