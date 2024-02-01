<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// va creato dal terminale "php artisan make:controller PageController" 
class PageController extends Controller
{

    public function index()
    {
        // ritorniamo alla pagina dedicata
        return view('pages.home');
    }
}
