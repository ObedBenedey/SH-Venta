<!DOCTYPE html>
<html>
<head>
	<title>Modificar Productos</title>
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
<body class="fondo-login" background="imagenes/imgModificar.jpg">
	<?php 
	include("conexion.php");

	$id = $_REQUEST['id'];

	$query = "SELECT * FROM tabla_imagen WHERE id ='$id'";
	$resultado = $conexion ->query($query);
	$row = $resultado->fetch_assoc();
	?>

<?php 
$resultado = str_replace("<br />", " ", $row['descripcion']);
 ?>

	<center> 
		<form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="conteriner">
					<div class="card-panel card-login margin-login">
						<div class="center" col s3 m6 l6>

							<input type="text" REQUIRED name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>"/> 
							<textarea type="text" REQUIRED name="descripcion" placeholder="Ingresa la descripcion" value=""><?php echo $resultado ?></textarea> 
							<select REQUIRED  name="tipo">
								 <label>Selecciona tu producto</label>

								<option selected value="1">Proteínas</option>
								<option value="2">Aminoacidos</option>
								<option value="3">Creatinas</option>
								<option value="4">Oxido Nitrico</option>
								<option value="5">Quemadores</option>
								<option value="6">Accesorios</option>
								<option value="7">Ganadores</option>
								<option value="8">Carbohidratos</option>
								<option value="9">Varios</option>
								<option value="10">Proximos productos</option>





							</select> 
							<input type="number" REQUIRED name="precio" placeholder="Precio al Publico:" value="<?php echo $row['precio']; ?>"/> 
							<input type="number" REQUIRED name="precioAdmin" placeholder="Precio de Proveedor:" value="<?php echo $row['precioAdmin']; ?>"/>
							<input type="number" REQUIRED name="stock" placeholder="Stock disponible" value="<?php echo $row['stock']; ?>"/> 

 							<form action="#">
							    <div class="file-field input-field">
							      <div class="btn">
							        <span>File</span>
							        <input REQUIRED name="Imagen" type="file">
							      </div>
							      <div class="file-path-wrapper">
							        <input class="file-path validate" type="text">
							      </div>
							      <h4 class="txt-main">Imagen Actual:</h4>
							      <td><img height="150px" src="<?php echo $row['Imagen'] ?>"/></td>
							    </div>
							</form>

							
							<input class="waves-effect waves-light btn" type="submit" value="Modificar" name="Aceptar"/> 
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