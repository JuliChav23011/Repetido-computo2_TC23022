<?php
namespace Parqueo\Models;

use Override;
use Parqueo\Controladores\Vehiculo;
class Pickup extends Vehiculo{

public function __construct($placa, $propietario){
    parent::__construct($placa, $propietario);
}
    #[Override]
    public function tarifaPorHora(): float
    {
        return 1.00;
    }
}

?>