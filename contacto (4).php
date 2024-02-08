<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="contacto.css"> 
    <title>Desarrollo digital</title>
</head>
<body>
<header>
    <div class ="enca">
    <a href= "index.html">
    <img class="logo" src="Logo.png">
    </a>
    <h2 class ="nombre">Desarrollo digital</h2>
    </div>
<nav class="navega">
    <a href="blog.php" class="nav-link">Blog</a>
    <a href="fIlosofia.html" class="nav-link2">Filosofía</a>
    <a href="contacto.php" class="nav-link3">Contacto</a>
    <h2 class="idioma">Español</h2>
</nav>
</header>
<div class="conteiner">    
<article class = "global">
  

<div class ="receptor">
    <h2 class="indica">Indícame tus datos y me pondré en contacto contigo a la brevedad</h2>
    <form method="post">
    <input class="nom" type="text" name="name" placeholder="Nombre Completo">
    <input class="nom" type="text" name="tele" placeholder="Numero teléfonico">
    <input class="nom" type="email" name="correo" placeholder="Correo">
    <textarea class="com" name="coment" rows="4" cols="35" placeholder="Escribe tu comentario aquí"></textarea>
    <input class="env"type="submit" name ="register">
</form>
<?php 
include("registrar.php");
?>
</div>
</article>
<div class="diseño">
<aside>

<h2 class="titre">Contacto</h2>
<img class = "concat" src="Arturo.jpg">
<div class="emisor"> 
<ul>
    <li>Arturo Sebastian Mercado Martíenz</li>
    <li>-- ---- ----</li>
    <li>-- ---- ----</li>
    <li>Contacto@asmagno.com</li>
</ul> 
</div>

</div>
</aside>
</div>

<div class = "pie">
<footer>
    <p>camino</p>
</footer>    
</div> 
</body>
</html>