<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$destinatario = "felipe_v_spd@hotmail.com";
$asunto = "¡Quiero contratarte!";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";
mail($destinatario, $asunto, $carta);
header('Location:probando.html');
?>