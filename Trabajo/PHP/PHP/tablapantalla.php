<?php
        include_once "DBD.php";
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Comprobamos que no hay errores en la conexion

        if ($conn->connect_error) {
                die("Conexion Falló: " . $conn->connect_error);
                echo '<tr><td>Fallo accederBD</td></tr>';
        }else{
            $sql = "SELECT `Pantalla`,count(`Pantalla`) as parcial,(SELECT count(*) FROM DATOS) as total FROM DATOS GROUP BY `Pantalla` ORDER BY parcial DESC";//CONSULTA
            $result = $conn->query($sql);
            
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<p>'.$row["Pantalla"].'</p>';
                    echo '<div class="w3-grey">';
                    $parcial= $row["parcial"];
                    $total= $row["total"];
                    $porcentaje= round(($parcial*100)/$total,2);
                    echo '<div class="w3-container w3-center w3-padding w3-blue" style="width:'.$porcentaje.'%">'.$porcentaje.'%</div>';
                    echo '</div>';
                }
            }else{
                echo '<tr><td align="center" colspan="6">No se encuentran resultados</td></tr>';
            }
        }
        $conn->close();
?>  