<?php
session_start(); 
if(!isset($_SESSION['user'])) {
   header("Location: ./default.php");
}
include_once "./PHP/funciones.php";

  
$mi_temporizador = microtime();
$partes_de_la_hora_actual = explode(' ', $mi_temporizador);
$hora_actual = $partes_de_la_hora_actual[1] + $partes_de_la_hora_actual[0];
$hora_al_empezar = $hora_actual;


?>


<!DOCTYPE html>
<html>

<?php
if(!isset($_GET['r']))
{
echo "<script language=\"JavaScript\">
<!-- 
document.location=\"$PHP_SELF?r=1&Ancho=\"+screen.width+\"&Alto=\"+screen.height;
//-->
</script>";
}
else {    

// Código a mostrar en caso que se detecte la resolución de la pantalla
     if(isset($_GET['Ancho']) && isset($_GET['Alto'])) {
               $resolucion=$_GET['Ancho']."x".$_GET['Alto'];  
     }
     else {
               $resolucion="----x----";
     }
}

?>

<?php
include './PHP/cabecera.php'
?>


<body class="w3-light-grey">

 <!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <span class="w3-bar-item w3-right"><?php echo "".$_SESSION['user'].'
      <button  ><a href="PHP/cerrarsesion.php">Cerrar sesion</a></button>

      
   
    </span>' ?>
</div>







<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:0px;margin-top:43px;">

 


  



  <hr>
  <div class="w3-container">
    <h5> <?php $ipservidor=$_SERVER['SERVER_ADDR']; echo "IP servidor ".$ipservidor;    ?> 
    </h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>Memoria total</td>
        <td><?php 
        	$free = shell_exec('free');
        	$free = (string)trim($free);
        	$free_arr = explode("\n", $free);
        	$mem = explode(" ", $free_arr[1]);
        	$mem = array_filter($mem);
        	$mem = array_merge($mem);
        	$memory_usage = $mem[2]/$mem[1]*100;
			$memtotal=$mem[1];
			$memoria_total=number_format ( $memtotal , 0 ,  "." ,  "," );
			$memoria_usada=number_format ( $mem[2] , 0 ,  "." ,  "," );
			$pmemoria_usada=round($memory_usage,2);
			$memoria_usada_pag=number_format ( round(memory_get_usage() / 1024,1) , 2 ,  "." ,  "," );
			$pmemoria_usada_pag=round((memory_get_usage()/ 1024)/$mem[1]*100,2);	
			$memoria_libretotal=round(($mem[1]/$mem[1]*100)-($mem[2]/$mem[1]*100),2);

        echo '' . $memoria_total. 'KB'; ?></td>
        <td><?php   echo $memoria_libretotal."%" ?></td>
      </tr>
      <tr>
        <td>Memoria usada global servidor</td>
        <td><?php  echo '' .$memoria_usada. 'KB'?></td>
        <td><?php   echo $pmemoria_usada."%" ?></td>
      </tr>
      <tr>
        <td>Memoria usada parcial servidor</td>
        <td><?php  echo $memoria_usada_pag. 'KB'?></td>
        <td><?php   echo $pmemoria_usada_pag."%" ?></td>
      </tr>
      <tr>
        <td>CPU media</td>
        <td><?php 
        	$load = sys_getloadavg();
			$cpu= $load[0];  echo $cpu."%" ?> </td>
		<td><?php echo $load[2]."%" ?></td>
      </tr>
    </table><br>
    
  </div>
  



<div class="w3-container">
    <h5> <?php    			
    			$info=detect(); 
    			$ipcliente=getRealIP(); echo "IP Cliente: ".$ipcliente." ";    ?> </h5>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
        <td>Sistema operativo</td>
        <td><?php $sistema=$info['os']; echo " ".$sistema; ?></td>
      </tr>
      <tr>
        <td>Navegador</td>
        <td><?php $navegador=$info['browser']; echo $navegador; ?></td>
      </tr>
       <tr>
        <td>Pantalla</td>
        <td><?php echo $resolucion; ?></td>
      </tr>

    </table><br>
    
  </div>
  <div class="w3-container">
  <?php $fecha = "".date('Y/m/d H:i:s');
          echo "Fecha y hora: ".$fecha ?>


<a href="./estadisticas.php"><button >Estadisticas</button></a>
<?php
//print_r($_SERVER['HTTP_USER_AGENT']);
//print_r( );
?>

  </div>
  <hr>	
  <form class="login-form" method="post" action="./PHP/guardardatos.php">
  <div class="w3-container">


<?php
    require_once 'PHP/classestadistica.php';
    //session_start();
    $estadisticas=new Estadistica();
    $estadisticas->setestadistica($_SESSION['user'],$fecha,$ipservidor,$memoria_total,$memoria_libretotal,$memoria_usada,$pmemoria_usada,$cpu,$ipcliente,$sistema,$navegador,$resolucion);
/*
	echo '<input type="hidden" name="usuario" value="'.$_SESSION['user'].'">';
	echo '<input type="hidden" name="fecha" value="'.$fecha.'">';
	echo '<input type="hidden" name="ipservidor" value="'.$ipservidor.'">';
	echo '<input type="hidden" name="memoria_total" value="'.$memoria_total.'">';
	echo '<input type="hidden" name="memoria_libretotal" value="'.$memoria_libretotal.'">';
	echo '<input type="hidden" name="memoria_usada" value="'.$memoria_usada.'">';
	echo '<input type="hidden" name="pmemoria_usada" value="'.$pmemoria_usada.'">';
	echo '<input type="hidden" name="cpu" value="'.$cpu.'">';
	echo '<input type="hidden" name="ipcliente" value="'.$ipcliente.'">';
	echo '<input type="hidden" name="sistema" value="'.$sistema.'">';
	echo '<input type="hidden" name="navegador" value="'.$navegador.'">';
	echo '<input type="hidden" name="resolucion" value="'.$resolucion.'">';*/
?>
 <button type="submit" >Guardar Datos</button></div>   
</form>

  <!-- End page content -->
</div>
<hr>
<div class="w3-container">
<?php
$mi_temporizador = microtime();
$partes_de_la_hora_actual = explode(' ', $mi_temporizador);
$hora_actual = $partes_de_la_hora_actual[1] + $partes_de_la_hora_actual[0];
$hora_al_terminar = $hora_actual;
$tiempo_total_en_segundos = round(($hora_al_terminar - $hora_al_empezar), 4);
echo 'La página fue generada en '.$tiempo_total_en_segundos.' segundos.';

$estadisticas->set_tiempoacceso($tiempo_total_en_segundos);
$_SESSION['stat']=$estadisticas;
//print_r($_SESSION['stat']);
?>
</div>
<hr>


<?php
include './PHP/endpage.php';
?> 
</body>
</html>
