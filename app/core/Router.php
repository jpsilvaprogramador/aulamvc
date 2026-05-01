<?php
namespace App\Core;

use App\Controller\HomeController;
use App\Controller\Errors\HttpErrorController;



class Router
{
    public function dispatch($url)
    {

        $url = trim($url, '/');  // Tira a barra final
        $partes = $url ? explode('/', $url) : []; // Separa a url em partes

        
        $controllerName = $partes[0] ?? 'Home'; // Condição
        $controllerName = ucfirst($controllerName) . 'Controller';
        $actionName = $partes[1] ?? 'index';


        if (!class_exists($controllerName)) {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }

        $controller = new $controllerName();



        if (!method_exists($controller, $actionName)) {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }

        $params = array_slice($partes, 2);


        call_user_func_array([$controller, $actionName], $params);
    }
}
