<!DOCTYPE html>
<html>
<head>
	<title>Alta de Productos</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--Import css-->
  <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body class="fondo-login"  background="imagenes/fondoAlta.jpg">
	<center>
		<form action="guardar_proceso.php" method="POST" enctype="multipart/form-data"><br><br>

			<div class="row">
				<div class="conteriner">
					<div class="card-panel card-login margin-login">
						<div class="center" col s3 m6 l6>

							<input type="text" REQUIRED name="nombre" placeholder="Ingresa el nombre" value=""/>
							<input type="text" REQUIRED name="descripcion" placeholder="Ingresa la descripcion" value=""/>

							 <form action="#">
							    <div class="file-field input-field">
							      <div class="btn">
							        <span>File</span>
							        <input REQUIRED name="Imagen" type="file">
							      </div>
							      <div class="file-path-wrapper">
							        <input class="file-path validate" type="text">
							      </div>
							    </div>
							  </form>

							<select REQUIRED  name="tipo">
								<option disabled>Selecciona tu producto</option>	
								<option value="1">Proteínas</option>
								<option value="2">Aminoacidos</option>
								<option value="3">Creatinas</option>
								<option value="4">Oxido Nitrico</option>
								<option value="5">Quemadores</option>
								<option value="6">Accesorios</option>
							</select>
							<input type="number" REQUIRED name="precio" placeholder="Ingresa el precio:" value=""/>
							<input type="number" REQUIRED name="stock" placeholder="Stock Disponible:" value=""/>
							<input type="number" REQUIRED name="precioAdministrador" placeholder="Ingresa el precio para Proveedor:" value=""/>			
							<input  class="waves-effect waves-light btn" type="submit" value="Subir" name="Aceptar"/>


						</div>	
					</div>
				</div>
			</div>		
		</form>
	</center>

	
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/jsMaterialize.js"></script>
</body>
</html>