<?php
// Solo aceptar POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    if ($nombre === '' || $mensaje === '') {
        echo json_encode(['error' => 'Faltan datos']);
        exit;
    }

    $linea = "Nombre: $nombre | Mensaje: $mensaje\n";
    file_put_contents('mensajes.txt', $linea, FILE_APPEND);

    echo json_encode(['success' => 'Mensaje recibido. ¡Gracias!']);
    exit;
}

echo json_encode(['error' => 'Método no permitido']);
