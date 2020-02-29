<?php
require 'vendor/autoload.php';
require 'config.php';

if(!isset($_GET['client_id'])){
    echo 'Falta seleccionar el cliente;';
    die();
}


$cliente = $_GET['client_id'];


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8443",
  CURLOPT_URL => "https://185.45.72.158:8443/api/v2/clients/".$cliente."/domains",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: " . $auth,
    "cache-control: no-cache",
    "passsword: " . $password ,
    "postman-token: 7a6eaaed-5716-b648-f346-68559c9a2009",
    "username: " . $username
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  foreach(json_decode($response) as $r){
      echo 'Dominio: '.$r->name.'<br>Fecha creacion: '.$r->created.'<p>--------------</p>';
  }
}