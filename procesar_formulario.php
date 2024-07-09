<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

 
    if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
       l
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            
            $to = "javigarmon1020@gmail.com";  
            $subject = "Nuevo mensaje de contacto de $nombre";
            $body = "Nombre: $nombre\nEmail: $email\n\nMensaje:\n$mensaje";
            $headers = "From: $email";

          
            if (mail($to, $subject, $body, $headers)) {
                echo "Mensaje enviado exitosamente.";
            } else {
                echo "Error al enviar el mensaje. Por favor, intenta de nuevo.";
            }
        } else {
            echo "Dirección de correo electrónico no válida.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
    echo "Método no permitido.";
}
?>
