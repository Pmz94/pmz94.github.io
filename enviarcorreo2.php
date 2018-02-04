<?php
    $correo_a="pmz94@hotmail.com";
    $nombre=$_POST["nombre"];
    $correo_de=$_POST["correo"];
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["mensaje"];
    $contenido="De: " . $nombre . "\nCorreo: " . $correo_de . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
    mail($correo_a,$asunto,$contenido);
    header("Location:enviado.html");
?>