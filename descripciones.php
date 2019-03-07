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
</head>
<body class="fondo-login" background="img/fondologin.jpg">
  <?php 
  include("conexion.php");

  $id = $_REQUEST['id'];

  $query = "SELECT * FROM tabla_imagen WHERE id ='$id'";
  $resultado = $conexion ->query($query);
  $row = $resultado->fetch_assoc();
  ?>


  <div class="row">
   <div class="conteriner">
     <div class="card-panel card-login margin-login">
       <div class="center">
         <td><img class="imgs-productos" height="200px" src="dbprotes/<?php echo $row['Imagen'] ?>"/></td>
       </div>
       <div class="card-content center">
         <p class=" product-name truncate"><b><?php echo $row['nombre'] ?> </b><p>
           <p> stock: <?php echo $row['stock'] ?> <p>
             <?php
    //si esta vacia imprime esto
    if (empty($_SESSION['nombre'])) {

     ?>
             <p>Precio: <?php echo $row['precio'] ?></p>
             <?php 
     //si esta llena pero al mismo tiempo es igual a obed (super usuario)entonces:
   }else if ($_SESSION['nombre']=='obed') {
    ?>
             <p>Precio: <?php echo $row['precioAdmin'] ?></p>
             <?php  
  //pero si no imprime esto que solo es que no puede hagregar productos
}
  ?>
             <p>Descripcion del producto: <?php echo $row['descripcion'] ?></p>

           </div>
         </div>
       </div>
     </div>
   </div>

 </body>


<!--JavaScript at end of body for optimized loading-->
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script type="text/javascript" src="js/jsMaterialize.js"></script>

</body>
</html>
