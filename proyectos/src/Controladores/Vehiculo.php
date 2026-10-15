<?php
namespace Parqueo\Controladores;

use Override;
use Parqueo\Controladores\Cobrable;

abstract class Vehiculo implements Cobrable{
    public readonly string $placa;
    public readonly string $propietario;

    public function __construct($placa, $propietario)
    {
    
    }

    abstract public function tarifaPorHora(): float;

    #[Override]
    public function calcularTarifa(int $minuto): float
    {
        
        if($minuto <=15){
            $total = 0.0;
        }
        
        $total = $this->tarifaPorHora() * $minuto;
        return $total;
    }

}


?>