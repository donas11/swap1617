<?php
session_start(); 

        require_once 'classestadistica.php';
        include_once "./DBD.php";
        include_once "./locations.php";
        
         //header("Location: /dashboard/DELAOSA/PROCESO/default.php");
        // CREAMOS CONEXION CON LA BASE DE DATOS
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Comprobamos que no hay errores en la conexion
        if ($conn->connect_error) {
           
                die("Conexion Falló: " . $conn->connect_error);
        }
        
        $usuario=$conn->real_escape_string($_POST['user']);
        $clave=$conn->real_escape_string($_POST['password']);
        $sql = "SELECT USUARIO FROM USER where USUARIO = '$usuario' AND PASS = UNHEX(MD5('$clave'))";//CONSULTA
        //echo $sql;
        $result = $conn->query($sql);
        //echo $result->num_rows;
        if ($result->num_rows > 0) {// Salida de datos de cada fila
            $row = $result->fetch_assoc();
            $_SESSION['user']=$_POST['user'];
            $_SESSION['stat']=new Estadistica();
            $_SESSION['stat']->set_usuario($_SESSION['user']);
            	 echo "hola";
                 header("Location: ".$index);
        }else {
            	echo "nohola";
                header("Location: ".$default);
        }
        $conn->close(); 
    
 
?>
