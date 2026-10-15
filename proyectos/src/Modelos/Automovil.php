<?php
namespace Parqueo\Modelos;

use Override;
use Parqueo\Controladores\Vehiculo;

class Automovil extends Vehiculo{
    #[Override]
    public function tarifaPorHora(): float
    {
        return 0.75;
    }
}

?>