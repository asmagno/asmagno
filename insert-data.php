<?php
include 'config.php';

$nombre = $_POST['nombre'];
$comentario = $_POST['comentario'];
$fecha=date("d/m/y");

$sql= "INSERT INTO comentarios (nombre, comentario, fecha) VALUES ('$nombre','$comentario','$fecha')";
$result = mysqli_query($conn,$sql);

if($result){
    echo 1;
} else{
    echo 0;
}

?>


