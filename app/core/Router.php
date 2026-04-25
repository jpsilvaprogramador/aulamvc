<?php

require_once __DIR__ . '/../controller/HomeController.php';
require_once __DIR__ . '/../controller/errors/HttpErrorController.php';


class Router
{
    public function dispatch($url)
    {

        // Definindo os controladores
        // Adicionando o "Controller" a qualquer parâmetro digitado
        $url = trim($url, '/');  // Tira a barra final



        $partes = $url ? explode('/', $url) : []; // Separa a url em partes

        // ControllerName
        $controllerName = $partes[0] ?? 'Home'; // Condição
        $controllerName = ucfirst($controllerName) . 'Controller';
        // ActionName
        $actionName = $partes[1] ?? 'index';


        if (!class_exists($controllerName)) {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }

        $controlador = new $controllerName();



        if (!method_exists($controlador, $actionName)) {
            $controller = new HttpErrorController();
            $controller->notFound();
            return;
        }

        $params = array_slice($partes, 2);


        call_user_func_array([$controlador, $actionName], $params);
    }
}
