<?php
require_once 'builder/builder.php';
require_once 'builder/director.php';

$truckBuilder = new TruckBuilder();
$newVehicle = (new Director())->build($truckBuilder);
print_r($newVehicle);

/*
Truck Object
(
    [data:AssemblePart:private] => Array
        (
            [rightDoor] => Door Object
                (
                )

            [leftDoor] => Door Object
                (
                )

            [truckEngine] => Engine Object
                (
                )

            [tyre1] => Tyre Object
                (
                )

            [tyre2] => Tyre Object
                (
                )

            [tyre3] => Tyre Object
                (
                )

            [tyre4] => Tyre Object
                (
                )

            [tyre5] => Tyre Object
                (
                )

            [tyre6] => Tyre Object
                (
                )

        )

)
 */