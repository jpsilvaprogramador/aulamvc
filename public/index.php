<?php
// 1. Segue para o Router.php

require_once (__DIR__) . '/../app/core/Router.php';


$url = $_GET['url'] ?? '';

$router = new Router();
$router->dispatch($url);