<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import css-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Registro</title>
</head>
<?php  
if (empty($_SESSION['nombre'])) {}else if($_SESSION['nombre']=='obed') {



	?>
  <body class="fondo-login" background="img/fondoRegistrar.jpg">
<div class="row">
  <div class="conteriner">
    <div class="card-panel card-login  margin-login" style="opacity: .90;">
      <div class="center" col s3 m6 l6>
      	<img src="img/Register-Icon.ico" class="img-login">
      	<h4 style=font-size:90%>Favor de ingresar el nombre y password para registra un nuevo usuario.</h3>
		<form action="insertar.php" method="post" enctype="application/x-www-form-urlencoded">	
			<label for="caja1"><p></p>
				<p><input type="text" id="caja1" name="usuario" placeholder="nombre" required autofocus></p>
			</label>
			<label for="caja2"><p></p>
				<P><input type="password" id="caja2" name="password" required placeholder="password"></P>
			</label>
			<input class="card-login" type="submit" name="registrarse">
	 </div>
	</div>
  </div>
</div>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript" src="js/jsMaterialize.js"></script>
  </body>
</html>
<?php }else{ 
	?>

	<h4>Eres un Pillo  no deberias de estar aqui</h4>

<?php  
 } ?>