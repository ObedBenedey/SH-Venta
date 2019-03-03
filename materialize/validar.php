<!-- {%FOOTER_LINK} -->
<?php 
session_start();
if (isset($_POST['usuario']) and isset($_POST['password'])) {
	include ('conexion.php');
	$nombredeusuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
	$password=mysqli_real_escape_string($conexion,$_POST['password']);
	$comprobacion_del_nombre='select * from login_usuarios where nombre="'.$nombredeusuario.'"';
	$comprobacion=$conexion->query($comprobacion_del_nombre);
	if ($comprobacion->num_rows>0) {
		$consulta_a_la_base=mysqli_query($conexion,'select passwor from login_usuarios where nombre="'.$nombredeusuario.'"');
		$recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
		$comprobacion_password=password_verify($password,$recoger_dato['passwor']);
		if ($comprobacion_password) {
			$_SESSION['nombre']=$nombredeusuario;
			header('location: ./main.php');
		}else{
			header('Location: login.php');
		}

	}else{
		header('Location: login.php');

	}
}else{
	header('location: login.php');

}
?>