<?php

use Parqueo\Enums\TipoVehiculo;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="">Ingrese la Placa</label>
        <input type="text" name="placa">
        <br><br>
        <label for="">Propietario</label>
        <input type="text" name="propietario">
        <br><br>
        <label for="">Tipo de Vehiculo</label>
        <select name="tipo" id="">
            <option value="">Seleccione un Vehiculo</option>
            <?php foreach(TipoVehiculo::cases() as $items):?>
                <option value="<?= $items->value ?>"><?= $items->name?></option>
                <?php endforeach;?>
        </select>
        <br><br>
        <label for="">Hora de entrada</label>
        <input type="time" name="entrada">
        <br><br>
        <label for="">Hora de salida</label>
        <input type="time" name="salida">
        <button type="submit">Enviar Registro</button>
    </form>
</body>
</html>