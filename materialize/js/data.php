 
<?php 
		include("conexion.php");

		$query = "SELECT * FROM tabla_imagen";
		$resultado = mysqli_query($conexion, $query);
		if (!$resultado) {
			die("error");
			# code...
		}else{
			while ($data = mysqli_fetch_assoc($resultado)) {
				$arreglo["data"][]= $data;
				# code...
			}
			echo json_encode($arreglo);
		}

		mysqli_free_result($resultado);
		mysqli_close($conexion);

?>