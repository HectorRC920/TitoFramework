<?php

require "./Router.php";

$router = new Router();

$router->get('/test', function (){
  return 'ola bb';
});
$router->post('/posteo', function(){
  return 'post en DB';
});

try {
  $action = $router->resolve();
  print($action());
} catch (\Throwable $th) {
  print("Not found");
  http_response_code(404);
}


