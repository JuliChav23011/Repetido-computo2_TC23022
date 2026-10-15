<?php
namespace Parqueo\Enums;

use Parqueo\Controladores\Vehiculo;
use Parqueo\Modelos\Automovil;
use Parqueo\Modelos\Motocicleta;
use Parqueo\Models\Pickup;

enum TipoVehiculo:string{
    case Automovil = "A";
    case Motocicleta = "M";
    case Pickup = "P";
    
    public function CrearVehiculo($placa, $propietario): Vehiculo{
        return match($this){
            self::Pickup => new Pickup($placa, $propietario),
            self::Automovil => new Automovil($placa, $propietario),
            self::Motocicleta => new Motocicleta($placa, $propietario)
        };
    }

}


?>