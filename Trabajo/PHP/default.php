<?php
session_start(); 
if(isset($_SESSION['user'])) {
   header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html>
<?php
include './PHP/cabecera.php';
?>  
<body class="w3-light-grey">









<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:0px;margin-top:43px;">

 


  



  <hr>
  <div class="login-page">
  <div class="form" >
    <form class="login-form" method="post" action="./PHP/iniciarsesion.php">
      <input type="text" name="user" placeholder="Usuario"/>
      <input type="password" name="password" placeholder="Contraseña"/>
      <button type="submit" >Entrar</button>
    </form>
  </div>
  </div>
  <hr>

  
  

  

    

  

  <!-- End page content -->
</div>

<?php
include './PHP/endpage.php';
?>  

</body>
</html>
