<?php
include 'config.php';

$sql = "SELECT * FROM comentarios ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nombre = $row['nombre'];
        $comentario = $row['comentario'];
        $fecha = date("d/m/y"); 

        // Verificar si los campos están vacíos
        
            echo '<div class="item">';
            echo '<h2>' . $nombre . '</h2>';
            echo '<p>' . $comentario . '</p>';
            echo '</div>';
        
    }
}
?>
