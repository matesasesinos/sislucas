<?php require 'config.php';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8443",
  CURLOPT_URL => "https://185.45.72.158:8443/api/v2/clients",
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
    "password: " . $password,
    "postman-token: 64a0bdc3-5f23-5edc-1ebc-c28e53a81e48",
    "username: " . $username
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

$datos = json_decode($response);
curl_close($curl);
// echo 'Clientes<br>';
// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//  foreach(json_decode($response) as $r){
//    echo $r->id.'-'.$r->name.'-<a href="dominios.php?client_id='.$r->id.'">Dominios del cliente</a> - <a href="cliente.php?client_id='.$r->id.'">Detalles del cliente</a><br>';
//  }
// }
?>