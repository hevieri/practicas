<?php

$productos = array(
    array("nombre" => "Camiseta", "categoria" => "Ropa", "precio" => 20),
    array("nombre" => "Chomba", "categoria" => "Ropa", "precio" => 100),
    array("nombre" => "Zapatillas", "categoria" => "Calzado", "precio" => 50),
    array("nombre" => "Zapatos", "categoria" => "Calzado", "precio" => 30),
    array("nombre" => "Laptop", "categoria" => "Electrónica", "precio" => 800)
    
);


if (isset($_GET['categoria'])) {
    $categoria_seleccionada = $_GET['categoria'];
    echo "<h1>Productos en la categoría: $categoria_seleccionada</h1>";
    
    
    foreach ($productos as $producto) {
        if ($producto['categoria'] === $categoria_seleccionada) {
            echo "<p>Nombre: " . $producto['nombre'] . "</p>";
            echo "<p>Categoría: " . $producto['categoria'] . "</p>";
            echo "<p>Precio: $" . $producto['precio'] . "</p>";
            echo "<hr>";
        }
    }
} else {
    echo "<h1>Error: Categoría no especificada</h1>";
}
?>
