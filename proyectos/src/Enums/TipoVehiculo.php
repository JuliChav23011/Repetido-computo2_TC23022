<?php
namespace Parqueo\Enums;

use Parqueo\Controladores\Vehiculo;

enum TipoVehiculo:string{
    case Automovil = "A";
    case Motocicleta = "M";
    case Pickup = "P";

    public function etiqueta(): string{

    }
    public function CrearVehiculo(string $placa, string $propietario): Vehiculo{
        
    }

}


?>