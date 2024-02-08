<?php

$servername="localhost:3306";
$username="asmagnoc_Arturo";
$password="2estigmacrisis4";
$database="asmagnoc_Blog";

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    echo "connetion Failed.";
}


?>
