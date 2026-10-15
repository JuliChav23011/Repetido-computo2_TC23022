<?php
namespace Parqueo\Controladores;

interface Cobrable{
    public function calcularTarifa(int $minuto): float;
}

?>