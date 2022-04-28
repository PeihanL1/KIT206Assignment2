<?php
//connect to mysql
$mysqli = new mysqli('alacritas.cis.utas.edu.au', 'kit206g18', 'group18', 'gmis');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


?>
