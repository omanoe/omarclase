<?php
// Ciudad para obtener el clima
$city = 'London';

// URL de la API de MetaWeather
$url = "https://www.metaweather.com/api/location/search/?query={$city}";

// Realizar la solicitud a la API
$response = file_get_contents($url);

// Decodificar la respuesta JSON
$data = json_decode($response);

// Verificar si se recibió una respuesta válida
if ($data && !empty($data[0]->woeid)) {
    // Obtener el WOEID (Where On Earth ID) de la ciudad
    $woeid = $data[0]->woeid;

    // URL de la API de MetaWeather para obtener el clima actual
    $weather_url = "https://www.metaweather.com/api/location/{$woeid}/";

    // Realizar la solicitud para obtener el clima actual
    $weather_response = file_get_contents($weather_url);

    // Decodificar la respuesta JSON
    $weather_data = json_decode($weather_response);

    // Verificar si se recibió una respuesta válida
    if ($weather_data && !empty($weather_data->consolidated_weather[0])) {
        // Mostrar los datos del clima actual
        echo "Ciudad: {$weather_data->title}<br>";
        echo "Temperatura: {$weather_data->consolidated_weather[0]->the_temp} °C<br>";
        echo "Humedad: {$weather_data->consolidated_weather[0]->humidity}%<br>";
        echo "Descripción: {$weather_data->consolidated_weather[0]->weather_state_name}<br>";
    } else {
        echo "Error al obtener datos climáticos.";
    }
} else {
    echo "Error al obtener datos climáticos.";
}
?>
