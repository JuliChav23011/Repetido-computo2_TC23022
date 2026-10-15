<?php
session_start();
require __DIR__ ."/../vendor/autoload.php";

$_SESSION["ticket"] ??= [];

if($_SERVER["REQUEST_METHOD"] == "POST"){

$placa = $_POST["placa"];
$propietario = $_POST["propietario"];
$tipo = $_POST["tipo"];
$entrada = $_POST["entrada"];
$salida = $_POST["salida"];

$_SESSION["ticket"][] =[
    "placa" => $placa,
    "popietario" => $propietario,
    "tipo" => $tipo,
    "entrada" => $entrada,
    "salida" => $salida
];
 header("Location: listado.php");

}

require __DIR__ ."/../vistas/formulario.php";

?>