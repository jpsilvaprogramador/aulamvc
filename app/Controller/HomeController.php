<?php
namespace App\Controller;

use \App\Core\Controller;
use \App\Models\Usuario;

class HomeController extends Controller
{
    public function index()
    {
        $usuario = new Usuario();
        $data = $usuario->getUserData();

        // Retornar a view de home
        $this->view('home/index', $data);
    }

    public function contact()
    {
        $this->view('home/contact');
    }
}