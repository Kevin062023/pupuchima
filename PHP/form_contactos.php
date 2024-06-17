<?php
//conectamos el formulario de contacto con las siguientes variables:
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje_textarea'];

//Recepción del mensaje ingresado en el formulario
$mensaje = "Este mensaje fue enviado por " .$nombre . ",\r\n";
$mensaje .= "El e-mail es: " . $email . ",\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje_textarea'] . ",\r\n";

//email receptor
$receptor = 'infopupuchima@gmail.com';
$asunto = 'Este correo fue enviado desde la página web';

//funcion mail
//a quién será enviado 
mail($receptor, $asunto, utf8_decode($mensaje),$header);

//redirección luego de haber enviado nuestro form
header('Location:../HTML/FIN.html');
