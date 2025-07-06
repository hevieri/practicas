<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <title>Document</title>
</head>
<body>
  <?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Validación y limpieza
  $nombre     = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : '';
  $rol        = isset($_POST['rol']) ? htmlspecialchars(trim($_POST['rol'])) : '';
  $tecnologia = isset($_POST['tecnologia']) ? htmlspecialchars(trim($_POST['tecnologia'])) : '';
  $ciudad     = isset($_POST['ciudad']) ? htmlspecialchars(trim($_POST['ciudad'])) : '';
  $email      = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
  $linkedin   = isset($_POST['linkedin']) ? htmlspecialchars(trim($_POST['linkedin'])) : '';

  if ($nombre && $rol && $tecnologia && $ciudad) {
    echo "<div style='max-width: 500px; margin: 40px auto; font-family: sans-serif; line-height: 1.6;'>";
    echo "<p>Hola, mi nombre es <strong>$nombre</strong>. Me especializo como <strong>$rol</strong>, con experiencia principalmente en <strong>$tecnologia</strong>.</p>";
    echo "<p>Actualmente resido en <strong>$ciudad</strong> y estoy abierta a nuevos desafíos profesionales.</p>";

    if (!empty($email)) {
      echo "<p>📧 Podés contactarme en: <strong>$email</strong></p>";
    }

    if (!empty($linkedin)) {
      echo "<p>🔗 También podés encontrarme en <a href='$linkedin' target='_blank'>LinkedIn</a>.</p>";
    }

    echo "</div>";
  } else {
    echo "<p style='color:red;'>Faltan campos obligatorios. Volvé y completalos todos.</p>";
  }
} else {
  echo "<p>No se recibió información. <a href='formulario.php'>Volver al formulario</a></p>";
}



?>
</body>
</html>
