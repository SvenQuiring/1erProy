<?php

$date1 = new DateTime($_POST['fecha']);
$date2 = new DateTime(date("Y-m-d"));

$dateDiff = $date1->diff($date2);

if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
    echo "Hola " . htmlspecialchars($_POST['nombre']);
    echo " " . htmlspecialchars($_POST['apellido']);
    print ", tienes " . $dateDiff->format("%Y anos, %m meses y %d dias de edad");
}

?>
