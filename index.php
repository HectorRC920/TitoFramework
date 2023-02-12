<?php

require "./Router.php";

$router = new Router();

$router->get('/test', function (){
  return 'ola bb';
});
$router->get('/test1', function (){
  return 'ola bb1';
});
$router->post('/posteo', function(){
  return 'post en DB';
});
print_r($router);
try {
  $action = $router->resolve();
  print($action());
} catch (\Throwable $th) {
  print("Not found");
  http_response_code(404);
}


