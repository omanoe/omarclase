<?php
// URL de la API de Coffee Price para obtener el precio del café
$url = 'https://coffee-price.xyz/api';

// Realizar una solicitud HTTP GET a la API
$response = file_get_contents($url);

// Decodificar la respuesta JSON en un array asociativo
$data = json_decode($response, true);

// Verificar si la solicitud fue exitosa y procesar los datos
if ($data && isset($data['price'])) {
    $coffeePrice = $data['price'];
    echo "El precio del café es: $" . $coffeePrice;
} else {
    echo "No se pudo obtener el precio del café.";
}
?>


