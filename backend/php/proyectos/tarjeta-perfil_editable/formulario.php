<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">

    <title>Formulario de tarjeta laboral</title>
</head>
<body>
    <form method="POST" action="resultado.php" style="display:flex; flex-direction:column; gap:10px; width:280px;">
    <input type="text" name="nombre" placeholder="Nombre completo">
    <input type="text" name="rol" placeholder="Puesto o especialidad">
    <input type="text" name="tecnologia" placeholder="Tecnología principal">
    <input type="text" name="ciudad" placeholder="Ciudad, País">
    <input type="email" name="email" placeholder="Correo electrónico (opcional)">
    <input type="text" name="linkedin" placeholder="Perfil de LinkedIn (opcional)">
    <button type="submit">Generar tarjeta</button>
  </form>
</body>
</html>