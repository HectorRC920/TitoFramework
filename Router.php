<?php

require "./HttpMethods.php";
class Router {
  public $routes = []; 

  public function __construct()
  {
    foreach (HttpMethods::cases() as $method) {
      $this->routes[$method->value] = [];
    }
  }

  public function resolve()
  {
    $method = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];
    return $this->routes[$method][$uri];
  }
  public function get(string $uri, callable $action)
  {
    $this->routes[HttpMethods::GET->value][$uri] = $action;
  }
  public function post(string $uri, callable $action)
  {
    $this->routes[HttpMethods::POST->value][$uri] = $action;
  }
};