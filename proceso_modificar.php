<?php 
include("conexion.php");

$id = $_REQUEST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$precioAdministrador = $_POST['precioAdmin'];
$stock = $_POST['stock'];


$foto=$_FILES["Imagen"]["name"];
$ruta=$_FILES["Imagen"]["tmp_name"];
$destino="./imagenes/".$foto;
copy($ruta,$destino);


$query = "UPDATE tabla_imagen SET descripcion='$descripcion',tipo='$tipo',precio='$precio',precioAdmin='$precioAdministrador', nombre='$nombre',stock='$stock', Imagen='$destino' WHERE id = '$id'";
$resultado = $conexion->query($query);

if ($resultado) {
	header('location: ./mostrar.php');
	# code...
}else{
	echo "pero no se inserto la imagen";
}

?>