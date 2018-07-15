<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://freetrial1566893.beekeeper.io/api/2/status",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "echo 'hello world'",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "authorization: Token 47e6a7a2-a0d0-468f-92c1-7f45f0f0bdff",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: f51ac7ed-029b-794d-6e42-8835a082ff46"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
$json = $response;
$obj = json_decode($json);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}
?>