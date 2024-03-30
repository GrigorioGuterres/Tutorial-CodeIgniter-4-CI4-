<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Error extends Controller
{
    public function index()
    {
        return view('errors/index');
    }

    public function error_404()
    {
        return view('errors/html/error_404');
    }
}
