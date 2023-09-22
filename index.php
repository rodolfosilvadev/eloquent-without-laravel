<?php

require 'vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router($_ENV['URL_BASE']);

/**
 * routes
 * The controller must be in the namespace Test\Controller
 */

$router->namespace("App\Controllers");

$router->get("/users", "Users:index", "users.index");

$router->group("error")->namespace("App");
$router->get("/{errcode}", "Coffee:notFound");

/**
* This method executes the routes
*/
$router->dispatch();

/*
* Redirect all errors
*/
if ($router->error()) {
   $router->redirect("/error/{$router->error()}");
}