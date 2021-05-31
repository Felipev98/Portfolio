<?php
// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];
// Datos para el correo
$destinatario = "felipe_v_spd@hotmail.com";
$asunto = "Contacto desde nuestra web";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";
// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location: bd.html');
$host ="localhost";
$user ="root";
$pass ="";
$db="cv-tp";
$con = mysqli_connect($host,$user,$pass,$db) or die("Problemas al Conectar");
mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");
$nombre=$_POST['nombre'];
$correo=$_POST['email'];
$mensaje=$_POST['mensaje'];
$sql="INSERT INTO datos VALUES('$nombre',
                                 '$correo',
                                 '$mensaje')";
$ejecutar=mysqli_query($con,$sql);
if(!$ejecutar){
echo"Hubo Algun Error";
}else{
header('Location: bd.html');
}
 ?>


