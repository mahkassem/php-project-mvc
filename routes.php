<?php

require_once UTILS . 'Router.php';
require_once CONTROLLERS . 'HomeController.php';

$homeController = new HomeController();
Router::get('/', function () use ($homeController) {
  $homeController->index();
});

Router::get('/add', function () use ($homeController) {
  $request = $_GET;
  $homeController->add($request);
});

Router::get('/profile', function () use ($homeController) {
  $homeController->profile();
});

Router::get('/my-friends', function () use ($homeController) {
  $homeController->myFriends();
});
