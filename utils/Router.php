<?php

class Router
{

  public static function get($uri, $callback)
  {
    $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ($requestUri == $uri && $_SERVER['REQUEST_METHOD'] == 'GET') {
      $callback();
      exit();
    }
  }
}
