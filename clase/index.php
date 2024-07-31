<?php
$servicio = "https://servicios.bcn.gob.ni/Tc_Servicio/ServicioTC.asmx?WSDL";
$parametros = array();

if (isset($_REQUEST['Consultar']) && $_REQUEST['Consultar'] == "Mes") {
    if (isset($_REQUEST['Month']) && isset($_REQUEST['Year'])) { // Verificar si Month y Year están definidos
        $parametros['Mes'] = $_REQUEST['Month'];
        $parametros['Ano'] = $_REQUEST['Year'];
        $ValorTasaMes = "";
        try {
            $client = new SoapClient($servicio, $parametros);
            $result = $client->RecuperaTC_Mes($parametros);
            $Class = (array) $result->RecuperaTC_MesResult;
            $ValorDelXML = $Class['any'];
            $xml = simplexml_load_string($ValorDelXML);
            $array = (array) $xml;
            foreach ($array as $key => $a) {
                foreach ($a as $key2 => $aa) {
                    foreach ($aa as $key3 => $a3) {
                        if ($key3 == "Fecha" || $key3 == "Valor")
                            $ValorTasaMes .= ' ' . $key3 . '-' . $a3;
                    }
                    $ValorTasaMes .= '
';
                }
            }
        } catch (SoapFault $e) {
            echo "Error al realizar la llamada SOAP: " . $e->getMessage();
        }
    } else {
        echo "Por favor, complete los campos Mes y Año.";
    }
}

if (isset($_REQUEST['Consultar']) && $_REQUEST['Consultar'] == "Dia") {
    if (isset($_REQUEST['Day']) && isset($_REQUEST['Month_Day']) && isset($_REQUEST['Year_Day'])) { // Verificar si Day, Month_Day y Year_Day están definidos
        $parametros['Dia'] = $_REQUEST['Day'];
        $parametros['Mes'] = $_REQUEST['Month_Day'];
        $parametros['Ano'] = $_REQUEST['Year_Day'];
        try {
            $client = new SoapClient($servicio, $parametros);
            $result = $client->RecuperaTC_Dia($parametros);
            $TasaDiaria = ($result->RecuperaTC_DiaResult);
            echo $TasaDiaria;
        } catch (SoapFault $e) {
            echo "Error al realizar la llamada SOAP: " . $e->getMessage();
        }
    } else {
        echo "Por favor, complete los campos Día, Mes y Año.";
    }
}
?>
<?php
$servicio = "https://servicios.bcn.gob.ni/Tc_Servicio/ServicioTC.asmx?WSDL";
$parametros = array();

if (isset($_REQUEST['Consultar']) && $_REQUEST['Consultar'] == "Mes") {
    if (isset($_REQUEST['Month']) && isset($_REQUEST['Year'])) { // Verificar si Month y Year están definidos
        $parametros['Mes'] = $_REQUEST['Month'];
        $parametros['Ano'] = $_REQUEST['Year'];
        $ValorTasaMes = "";
        try {
            $client = new SoapClient($servicio, $parametros);
            $result = $client->RecuperaTC_Mes($parametros);
            $Class = (array) $result->RecuperaTC_MesResult;
            $ValorDelXML = $Class['any'];
            $xml = simplexml_load_string($ValorDelXML);
            $array = (array) $xml;
            foreach ($array as $key => $a) {
                foreach ($a as $key2 => $aa) {
                    foreach ($aa as $key3 => $a3) {
                        if ($key3 == "Fecha" || $key3 == "Valor")
                            $ValorTasaMes .= ' ' . $key3 . '-' . $a3;
                    }
                    $ValorTasaMes .= '
';
                }
            }
        } catch (SoapFault $e) {
            echo "Error al realizar la llamada SOAP: " . $e->getMessage();
        }
    } else {
        echo "Por favor, complete los campos Mes y Año.";
    }
}

if (isset($_REQUEST['Consultar']) && $_REQUEST['Consultar'] == "Dia") {
    if (isset($_REQUEST['Day']) && isset($_REQUEST['Month_Day']) && isset($_REQUEST['Year_Day'])) { // Verificar si Day, Month_Day y Year_Day están definidos
        $parametros['Dia'] = $_REQUEST['Day'];
        $parametros['Mes'] = $_REQUEST['Month_Day'];
        $parametros['Ano'] = $_REQUEST['Year_Day'];
        try {
            $client = new SoapClient($servicio, $parametros);
            $result = $client->RecuperaTC_Dia($parametros);
            $TasaDiaria = ($result->RecuperaTC_DiaResult);
            echo $TasaDiaria;
        } catch (SoapFault $e) {
            echo "Error al realizar la llamada SOAP: " . $e->getMessage();
        }
    } else {
        echo "Por favor, complete los campos Día, Mes y Año.";
    }
}
?>
