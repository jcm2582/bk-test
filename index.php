<?php

$request = new HttpRequest();
$request->setUrl('https://freetrial1566893.beekeeper.io/api/2//status');
$request->setMethod(HTTP_METH_GET);

$request->setHeaders(array(
  'postman-token' => '4ecc2970-92b9-442f-85e2-0435bad927f5',
  'cache-control' => 'no-cache',
  'content-type' => 'application/json',
  'accept' => 'application/json',
  'authorization' => 'Token 47e6a7a2-a0d0-468f-92c1-7f45f0f0bdff'
));

$request->setBody('echo 'hello world'');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

?>