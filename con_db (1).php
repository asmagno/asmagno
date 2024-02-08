<?php

$servidor="localhost:3306";
$usuario="asmagnoc_Arturo";
$contraseña="2estigmacrisis4";
$base="asmagnoc_registro";

$conex = mysqli_connect($servidor,$usuario,$contraseña,$base);

if ($conex->connect_error){
die ("Conexión fallida: ". $conex->connect_error);
    
}

?>

<?php

$servidor="localhost:3306";
$usuario="asmagnoc_Arturo";
$contraseña="2estigmacrisis4";
$base="asmagnoc_Blog";

$conn = mysqli_connect($servidor,$usuario,$contraseña,$base);

$resultado=mysqli_query($conn,'SELECT* FROM comentarios');



?>