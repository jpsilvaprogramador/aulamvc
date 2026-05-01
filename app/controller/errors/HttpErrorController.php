<?php
namespace App\Controller\Errors;

use App\Core\Controller;

class HttpErrorController extends Controller
{
    public function notFound()
    {
        http_response_code(404);
        $this->view('errors/404');
    }

    public function internalServerError()
    {
        http_response_code(500);
        $this->view('errors/500');
    }

    public function aunuthorized()
    {
        http_response_code(403);
        $this->view('errors/403');
    }
}