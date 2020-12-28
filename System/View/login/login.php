<!DOCTYPE HTML>

<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>Login</h1>
				<p>faça seu login para poder <br/>
				acessar o  sistema ou <a href="../../../home"> Voltar tela inicial</a>.</p>
			</header>

		<!-- Signup Form -->
		<form action="" method="POST">
                <div style="    width: 350px;">
                <input type="text" name="user" id="user" placeholder="User" />
                <br />
                <input type="password" name="password" id="password" placeholder="password" />
                <br />
				<input  style="width: 30%;" name="vai" type="submit" value="Entrar" />
                </div>
                
			</form>

		

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php

@session_start();
if(@$_POST['vai'] == 'Entrar'){
	include('../../../System/Checker/conection.php');

	if(empty($_POST['user']) || empty($_POST['password'])) {
		echo'login invalido';
				exit();
	}
	 
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	 
	$query = "SELECT * FROM usuarios where USUARIO = '{$user}' AND SENHA = md5('{$password}')";
	$result_user = mysqli_query($con, $query);
	$result = mysqli_fetch_assoc($result_user);


	$result_row = mysqli_query($con, $query);
	$row = mysqli_num_rows($result_row);
	
	
	if($row == 1 ) {
		$_SESSION['login'] = $result;
        $_SESSION['adm'] = 1;
        header("Location: ../../../Sistema/home");
        exit();
	}
	else{
		echo'Usuario ou senha invalida';
		exit();
	}
}





?>