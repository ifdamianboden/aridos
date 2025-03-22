<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "compubaires@gmail"; // Reemplaza con tu correo
    $asunto = "Nuevo mensaje de contacto";
    $cuerpo = "Nombre: " . $nombre . "\nEmail: " . $email . "\nMensaje: " . $mensaje;

    if (mail($destinatario, $asunto, $cuerpo)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>