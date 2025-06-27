<?php
#<operador> ? <true value> : <false value>;

#(9>7) ? 10*7 : 10*5;

(9>7) ? $total=10*7 : $total=10*5;
echo "El total es: $total";

#otro ejemplo

$edad = 20;
$mensaje = ($edad >= 18) ? "Es mayor de edad" : "Es menor de edad";
echo $mensaje;



//null coalescing ternario
$nombre = $usuario ?: "Invitado";
#eslo mismo que
if ($usuario) {
    $nombre = $usuario;
} else {
    $nombre = "Invitado";
}
#Es decir: Si $usuario tiene algún valor (no es null, falso, vacío, cero, etc.), entonces $nombre toma ese valor. 

#Si $usuario no tiene valor, entonces $nombre se vuelve "Invitado".

?>


