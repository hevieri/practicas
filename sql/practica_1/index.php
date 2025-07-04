<?php 
// Conectarnos a la base de datos y traer el listado de peliculas

// Paso 1: Vamos a crear una conexión a la base datos
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "cine";

// Creamos a la conexión, utilizando el método mysqli()
$conn = new mysqli($servername, $username, $password, $database);

// Ahora, en $conn tenemos nuestra conexión a la base de datos cine

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>peliculas</title>    
</head>

<body>
    <h1>Mis películas favoritas <small>(2024)</small></h1>
    <?php 
        // Usamos la conexión ($conn) para acceder a las peliculas
        $result = $conn->query("SELECT * FROM peliculas");

        // Recupero y muestro la información
        // $result->num_rows me dice cuantos registros trajo la consulta
        if ($result->num_rows > 0) {
            // Leo los registros que trajo
            while ($row = $result->fetch_assoc()) {
                ?>
                
                <h2><?php echo $row["titulo"]; ?></h2>
                <p><?php echo $row["director"]; ?></p>
                <p><small>Año: <?php echo $row["anio"]; ?> - Género: <?php echo $row["genero"]; ?></small></p>
                
                <?php
            }
        } else {
            echo "No hay resultados";
        }
    ?>

</body>
</html>

<?php 
    // Cierro la conexión a la base de datos
    $conn->close();
?>