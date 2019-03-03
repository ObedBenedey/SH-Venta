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



  <div class="#ffffff white" >
    <input type="image" width="215"   src="img/log.jpg" onclick="location.reload();">
    <?php
    //si esta vacia imprime esto
    if (empty($_SESSION['nombre'])) {

     ?>
     <div class="right margin">
       <a class=" btn-small waves-effect waves-light btn-login" href="login.php"><i class="material-icons right">account_circle</i>Login</a>
     </div>
     <?php 
     //si esta llena pero al mismo tiempo es igual a obed (super usuario)entonces:
   }else if ($_SESSION['nombre']=='obed') {
    ?>
    <div class="right ">
     <a  class="waves-effect waves-light btn modal-trigger btn-login" href="#modal1"><i class="material-icons left">account_circle</i>
      <?php 
      print $_SESSION['nombre'];
      ?>
    </a>
  </div>

  <!-- Modal Structure 
<div class="row">
  <div class="container">
  -->
  <div id="modal1" class="modal col s4 m4 l4 ">
    <div class="modal-login ">  
    </div>
    <div class="modal-footer">
      <a href="registrar.php" class="modal-close waves-effect waves-green btn-flat">Alta de Usuario</a>
      <a href="dbprotes/mostrar.php" class="modal-close waves-effect waves-green btn-flat">Agregar Productos</a>
      <a href="cerrar.php" class="modal-close waves-effect waves-green btn-flat">Cerrrar sesion</a>
    </div>
  </div>


  <?php  
  //pero si no imprime esto que solo es que no puede hagregar productos
}else{ 
  ?>
 <div class="right margin" >
   <a  class="waves-effect waves-light btn modal-trigger btn-login" href="#modal1"><i class="material-icons left">account_circle</i>
    <?php 
    print $_SESSION['nombre'];
    ?>
  </a>
</div>

  <!-- Modal Structure 
<div class="row">
  <div class="container">
  -->
  <div id="modal1" class="modal col s4 m4 l4 ">
    <div class="modal-login ">  
    </div>
    <div class="modal-footer">

      <a href="cerrar.php" class="modal-close waves-effect waves-green btn-flat">Cerrrar sesion</a>
    </div>
  </div>




  <?php
}
?>

</div>
<ul id="dropdown1"  class="dropdown-content ">
  <li><a onclick="renderProducts(1)">Proteinas</a></li>
  <li><a onclick="renderProducts(2)">Aminoacidos</a></li>
  <li><a onclick="renderProducts(3)">creatinas</a></li>
  <li><a onclick="renderProducts(4)">Oxido Nitrico</a></li>
  <li><a onclick="renderProducts(5)">Quemadores</a></li>
  <li><a onclick="renderProducts(6)">Accesorios</a></li>
</ul>

<ul id="dropdown2"  class="dropdown-content ">
  <li><a onclick="renderProducts2(1)">Proteinas</a></li>
  <li><a onclick="renderProducts2(2)">Aminoacidos</a></li>
  <li><a onclick="renderProducts2(3)">creatinas</a></li>
  <li><a onclick="renderProducts2(4)">Oxido Nitrico</a></li>
  <li><a onclick="renderProducts2(5)">Quemadores</a></li>
  <li><a onclick="renderProducts2(6)">Accesorios</a></li>
</ul>


<nav class="#37474f blue-grey darken-3" >
 <div class="container">
  <div class="row">
   <ul class="left">
    <!-- Dropdown -->
<?php
    //si esta vacia imprime esto
    if (empty($_SESSION['nombre'])) {

     ?>
    <li><a class="dropdown-trigger " href="#!" data-target="dropdown1">Productos<i class="material-icons right">arrow_drop_down</i></a></li>
<?php 
     //si esta llena pero al mismo tiempo es igual a obed (super usuario)entonces:
   }else if ($_SESSION['nombre']== $_SESSION['nombre'] ) {
    ?>

    <li><a class="dropdown-trigger " href="#!" data-target="dropdown2">Productos<i class="material-icons right">arrow_drop_down</i></a></li>
<?php } ?>
    <li><a href="https://www.facebook.com/Suplementosh-217516315801274/">Facebook</a></li>
  </div>
</nav>

</head>

<body>


 <div class="container">
  <div class="row" id="productosDiv"></div>
</div>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/data.js"></script>

<script type="text/javascript" src="js/jsMaterialize.js"></script>
<script type="text/javascript" src="js/productos.js"></script>


</body>

<footer class="page-footer blue-grey darken-4">
  <div class="container">
    <div class="row">
      <div class="col l12 s12">
        <h5 class="white-text">Tienda de suplementos alimenticios</h5>
        <p class="grey-text text-lighten-4">Somos Suplementos Fitness Deportivos México, una familia fitness que te ofrece todos los suplementos, accesorios, consejos y asesorías que necesites para que logres transformar tu cuerpo a tu gusto y manera. ¡Queremos que seas tu mejor versión!

        Tenemos todo para el gym: suplementos de proteínas, quemadores de grasa, ganadores de masa, aminoácidos, shakers, pre-entrenos y mucho más. ¡Marcas de suplementos 100% originales y de la mejor calidad!</p>
      </div>

    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2019 Copyright Text
      <a class="grey-text text-lighten-4 right" href="https://www.facebook.com/Suplementosh-217516315801274/">Mas infromación</a>
    </div>
  </div>
</footer>

</html>





