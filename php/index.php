<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__ . "/vendor/autoload.php";

$request = Request::createFromGlobals();

$response = new Response('<h2>first</h2><h1>Hellow World</h1>');

$response->headers->set('salut', 'ça va');

$response->send();

?>