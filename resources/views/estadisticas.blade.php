<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];

    echo "Temperatura recibida: " . $temperature . "°C<br>";
    echo "Humedad recibida: " . $humidity . "%";
} else {
    echo "No se recibieron datos";
}
?>
