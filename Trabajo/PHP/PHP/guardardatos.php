<?php

        include_once "./DBD.php";
        include_once "./locations.php";
        include 'classestadistica.php';
        session_start();
	
        
         //header("Location: /dashboard/DELAOSA/PROCESO/default.php");
        // CREAMS CONEXION CON LA BASE DE DATOS
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Comprobamos que no hay errores en la conexion
        if ($conn->connect_error) {
           
                die("Conexion Falló: " . $conn->connect_error);
        }
        /*$usuario=$_POST['usuario'];
        $fecha=$_POST['fecha'];
        $ipservidor=$_POST['ipservidor'];
        $memoria_total=$_POST['memoria_total'];
        $memoria_libretotal=$_POST['memoria_libretotal'];
        $memoria_usada=$_POST['memoria_usada'];
        $pmemoria_usada=$_POST['pmemoria_usada'];
        $cpu=$_POST['cpu'];
        $ipcliente=$_POST['ipcliente'];
        $sistema=$_POST['sistema'];
        $navegador=$_POST['navegador'];
        $resolucion=$_POST['resolucion'];*/
        
        print_r($_SESSION['stat']);
        $estadistica=$_SESSION['stat'];
        print_r($estadistica);
        $sql = "INSERT INTO DATOS VALUES(".$estadistica->get_id().",STR_TO_DATE('".$estadistica->get_fecha()."','%Y/%m/%d %H:%i:%s'),'".$estadistica->get_ipservidor()."','".$estadistica->get_memoria_total()."','".$estadistica->get_memoria_libretotal()."','".$estadistica->get_memoria_usada()."','".$estadistica->get_pmemoria_usada()."','".$estadistica->get_cpu()."','".$estadistica->get_ipcliente()."','".$estadistica->get_sistema()."','".$estadistica->get_navegador()."','".$estadistica->get_resolucion()."','".$estadistica->get_tiempoacceso()."')";
        echo $sql;
        $result = $conn->query($sql);
        //echo $result->num_rows;
        if ($result) {// Salida de datos de cada fila
            header("Location: ".$index);
            
        }else {
            
            
        }
        $conn->close(); 
  

?>