<?php
session_start(); 
if(!isset($_SESSION['user'])) {
   header("Location: ./default.php");
}
?>
<!DOCTYPE html>
<html>
<?php
include './PHP/cabecera.php';
?>
<body class="w3-light-grey">


 <!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <span class="w3-bar-item w3-right"><?php echo "".$_SESSION['user'].'
      <a href="./PHP/cerrarsesion.php"><button  >Cerrar sesion</button></a>

      
   
    </span>' ?>
</div>

<hr>
<div class="w3-container">
    <h5>Sistemas operativos</h5>
<?php
                                        include './PHP/tablasistema.php';

?>   
  </div>
  <hr>

<div class="w3-container">
    <h5>Navegadores</h5>
    <?php
                                        include './PHP/tablanavegador.php';

?> 
  </div>
  <hr>

<div class="w3-container">
    <h5>Resolución pantallas</h5>
    <?php
                                        include './PHP/tablapantalla.php';

?> 
  </div>
  <hr>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:0px;margin-top:43px;">

 


  




  
  

  

    

  

  <!-- End page content -->
</div>

<?php
include './PHP/endpage.php';
?> 
</body>
</html>
