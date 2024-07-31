<?php
// URL de la API
$url = 'http://ip-api.com/json';

// Realizar la solicitud GET
$response = file_get_contents($url);

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si se recibió una respuesta válida
if ($data && $data['status'] == 'success') {
    // Mostrar los datos de ubicación
    echo 'País: ' . $data['country'] . '<br>';
    echo 'Ciudad: ' . $data['city'] . '<br>';
    echo 'Latitud: ' . $data['lat'] . '<br>';
    echo 'Longitud: ' . $data['lon'] . '<br>';
    // Agregar más información según tus necesidades
} else {
    // Mostrar un mensaje de error si la solicitud falla
    echo 'Error al obtener la ubicación.';
}
?>
