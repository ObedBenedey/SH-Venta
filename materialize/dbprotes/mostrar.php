
<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Productos</title>
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
<body>

		<ul id="dropdown1"  class="dropdown-content ">
  <li><a onclick="renderProduct(1)">Proteinas</a></li>
  <li><a onclick="renderProduct(2)">Aminoacidos</a></li>
  <li><a onclick="renderProduct(3)">creatinas</a></li>
  <li><a onclick="renderProduct(4)">Oxido Nitrico</a></li>
  <li><a onclick="renderProduct(5)">Quemadores</a></li>
  <li><a onclick="renderProduct(6)">Accesorios</a></li>
</ul>


					<nav class="#37474f blue-grey darken-3" >
					 <div class="container">
					  <div class="row">
					   <ul class="left">
					    <!-- Dropdown -->
					    <li><a class="dropdown-trigger " href="#!" data-target="dropdown1">Productos<i class="material-icons right">arrow_drop_down</i></a></li>
					       <li><th colspan= "9" class= "center"><a class= "waves-effect waves-light " href= "index.php">Agregar nuevo producto</a></th></li>
					        <li><th colspan= "9" class= "center"><a class= "waves-effect waves-light " onclick="muestraTodos(1)">Todos Los Productos</a></th></li>

					    <li><a class="dropdown-trigger " href="http://localhost:8080/Suplementos/materialize/main.php" >Regresar</a></li>
					 
					  </div>
					</nav>

					 <div class="container">
					  <div class="row" id="productosDiv"></div>
					</div>

		

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/data.js"></script>

<script type="text/javascript" src="js/jsMaterialize.js"></script>
<script type="text/javascript" src="js/productosAdmin.js"></script>

</body>
</html>


