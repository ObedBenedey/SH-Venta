<?php 
include("conexion.php");
$nombre = $_POST['nombre'];
//esto es de la imagen{
$foto=$_FILES["Imagen"]["name"];
$ruta=$_FILES["Imagen"]["tmp_name"];
$destino="./imagenes/".$foto;
copy($ruta,$destino);
//}

$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$precioAdministrador = $_POST['precioAdministrador'];
$stock = $_POST['stock'];
$query = "INSERT INTO tabla_imagen(nombre,tipo,Imagen,descripcion,precio,precioAdmin,stock) VALUES('$nombre','$tipo','$destino','$descripcion','$precio','$precioAdministrador','$stock')";
$resultado = $conexion->query($query);

if ($resultado) {
	header('location: ./mostrar.php');
	# code...
}else{
	echo "pero no se inserto la imagen";
}

 ?>