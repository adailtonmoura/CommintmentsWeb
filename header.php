<!DOCTYPE html>
<html lang="pt_BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Adailton Moura da Silva">
		<meta name="generator" content="Visual Studio Code">
		<meta name="description" content="Gerenciador de compromissos do usuário">
		<meta name="keywords" content="Commitments">
		<meta name="application-name" content="CommitmentsWeb">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet"> 

		<title>Commitments</title>
	</head>
	<body>
        <header class="cabecalho">  
			<nav class="navbar navbar-light bg-light">
			<?php  if(isset ($_SESSION['usuario-logado'])) { ?>
				<p id="logado">Logado como <a class="navbar-brand" id="usuario" href="App/Controller/VerPerfil.php"><?= $_SESSION['username']; ?></a></p>
			<?php } else{ ?>

			<a class="navbar-brand" href="?pagina=login">
				<img src="image/post.png" width="30" height="30" class="d-inline-block align-top" alt="">
				Commitments
			</a>
			<?php }?>
			
			<?php  if(isset ($_SESSION['usuario-logado'])) { ?>
				<a id="sair" href="App/Controller/DestruirSessao.php">Sair</a>
			<?php }?>
			</nav>
        </header>