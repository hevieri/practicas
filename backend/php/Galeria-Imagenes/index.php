<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zorros</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="estilos.css" rel="stylesheet">

</head>
<body>
  
  <div class="container">
    <h1 class="text-center mt-5">Crear una galería de imágenes dinámica usando PHP, HTML, CSS y Bootstrap</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <?php
      $imagenes = array(
        "img/img1.jpeg" => "Zorro del Artico",
        "img/img2.jpeg" => "Zorro de Bengala",
        "img/img3.jpeg" => "Zorro de Darwin",
        "img/img4.jpeg" => "Zorro Fenec",
        "img/img5.jpeg" => "Zorro Gris",
        "img/img6.jpeg" => "Zorro Rojo"
      );

      foreach ($imagenes as $imagen => $subtitulo) {
        echo '
        <div class="col">
          <div class="card">
            <img src="' . $imagen . '" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">' . $subtitulo . '</h5>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>
  <hr>
</body>
</html>
