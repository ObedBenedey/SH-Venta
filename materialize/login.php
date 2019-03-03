<!-- {%FOOTER_LINK} -->
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
  <form action="validar.php" method="post" enctype="application/x-www.form-urlencoded">
 <div class="row">
  <div class="conteriner">
    <div class="card-panel card-login margin-login">
      <div class="center" col s3 m6 l6>
       <img class="img-login" src="img/account.jpg">
       <h4 class="sign-in">Sign in</h4>
     </div>
     <div>
      <input type="text" id="caja1" name="usuario" placeholder="Usuario">
      <label for="email">User </label>
    </div>
    <div>
      <input type="password" id="caja2" name="password" placeholder="Contraseña" required>
      <label for="password">Password </label>
    </div>  
    <p>
     <div class="row">
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Remember me</span>
      </label>
      


          <input type="submit" name="Iniciar sesion" class="btn-floating right"/>

      </form>
      <?php 
if (empty($_SESSION['nombre'])) {} else if ($_SESSION['nombre']=='obed') {
       ?>
      <div class="center">
        <a class="waves-effect waves-light btn" onclick="registrar()">Registrate</a>
      </div>
    <?php } ?>
     </div>
    </p>
  </div>
</div>
</div>
<script type="text/javascript"> 
      function registrar(){
        window.location= "registrar.php";
      }
</script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/jsMaterialize.js"></script>
</body>
</html>



