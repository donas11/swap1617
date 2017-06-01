<?php
for ($i = 1; $i <= 90; $i++) {
    echo "INSERT INTO USER VALUES('".$i."',UNHEX(MD5('".$i."'))); <br>";
}
?>