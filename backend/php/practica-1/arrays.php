<?php

//Array Escalar
/*
$estudiantes = array("Juan", "Pedro", "Ana", "Maria");
$estudiantes[3]="Claudia";

echo $estudiantes[3]; 

$estudiantes=["Juan", "Pedro", "Ana", "Maria"]; */

//Array Asociativo

$tutor = [
    "nombre" => "Carlos",
    "apellido" => "Perez",
    "edad" => 30
];

$tutor["edad"] = 19;
echo $tutor["nombre"];


//Array Multidimensional
$tutor_2 = [
    "nombre" => "Esteban",
    "apellido" => "Diaz",
    "edad" => 30,
    "cursos" => "php","javascript","phyton",
];

echo $tutor_2["cursos"]; 

count_recursive($tutor_2); //cuenta los elementos de un array multidimensional