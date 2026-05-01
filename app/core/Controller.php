<?php
namespace App\Core;

class Controller
{
    protected function view($view, $viewData = [])
    {
        
    extract($viewData);

    $viewFile = __DIR__ . '/../views/' . $view . '.php';

        if(!file_exists($viewFile)) {
            throw new \Exception("VIEW NÃO ENCONTRADA:" . $viewFile);

        }
        require_once $viewFile;
    }
}