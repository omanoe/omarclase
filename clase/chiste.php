<?php
// URL de la API de Chuck Norris
$url = "http://api.icndb.com/jokes/random";

// Realizar la solicitud GET a la API
$response = file_get_contents($url);

// Decodificar la respuesta JSON
$data = json_decode($response, true);

// Verificar si se obtuvieron los datos correctamente
if ($data && $data['type'] == 'success') {
    // Obtener el chiste
    $joke = $data['value']['joke'];
    echo "Chiste de Chuck Norris: " . $joke;
} else {
    echo "Error al obtener el chiste.";
}
?>
