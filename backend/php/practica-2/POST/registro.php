<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de Registro</title>
</head>
<body>
    <h1>Procesamiento de Registro</h1>
    <?php
    
    if (isset($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password'])) {
       
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($password)) {
           
            echo "<p>¡Registro exitoso!</p>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellido: $apellido</p>";
            echo "<p>Correo Electrónico: $email</p>";
            
        } else {
            echo "<p>Error: Todos los campos son obligatorios.</p>";
        }
    } else {
        echo "<p>Error: No se recibieron datos del formulario.</p>";
    }
    ?>
</body>
</html>
