<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="styles.css"> <!-- Incluir aquí tus estilos CSS -->
    <style>
        /* Estilos específicos para el mensaje de registro */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .mensaje-container {
            text-align: center;
            max-width: 400px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .mensaje-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .btn-volver {
            background-color: #292926;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .btn-volver:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="mensaje-container">
        <?php
        // Conexión a la base de datos
        $conexion = new mysqli("localhost", "root", "", "usuarios_db");

        // Verificar conexión
        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }

        // Obtener datos del formulario
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];

        // Preparar consulta SQL
        $sql = "INSERT INTO usuarios (nombre, email, contrasena) VALUES ('$nombre', '$email', '$contrasena')";

        // Ejecutar consulta y verificar
        if ($conexion->query($sql) === TRUE) {
            echo "<h2>¡Usuario registrado correctamente!</h2>";
        } else {
            echo "<h2>Error al registrar el usuario: " . $conexion->error . "</h2>";
        }

        // Cerrar conexión
        $conexion->close();
        ?>

        <a href="index.html" class="btn-volver">Volver al inicio</a>
    </div>
</body>

</html>
