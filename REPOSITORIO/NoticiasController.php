<?php

//require_once __DIR__ . '/../core/Controller.php';

class NoticiasController extends Controller
{
    public function index()
    {
        $this->view('noticias/index');
    }

    public function noticia($idNoticia = null)
    {
        $this->view('noticias/noticia', ['idNoticia' => $idNoticia]);
    }
}