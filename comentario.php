<?php
include("con_db.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['comentario'])) {
        $nombre = trim($_POST['nombre']);
        $comentario = trim($_POST['comentario']);

        $nombre = mysqli_real_escape_string($conn, $nombre);
        $comentario = mysqli_real_escape_string($conn, $comentario);

        $consulta = "INSERT INTO comentarios(nombre, comentario) VALUES ('$nombre','$comentario')";
        $resultado = mysqli_query($conn, $consulta);
        
        if ($resultado) {
            ?>
            <h3 class="mes">¡Comentario enviado con éxito!</h3>
            <?php
        }
    }
}

mysqli_close($conn);
?>


