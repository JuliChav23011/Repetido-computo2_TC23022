<?php

namespace Parqueo\Modelos;

use Override;
use Parqueo\Controladores\Vehiculo;

class Motocicleta extends Vehiculo{
    #[Override]
    public function tarifaPorHora(): float
    {
        return 0.40;
    }
}

?>