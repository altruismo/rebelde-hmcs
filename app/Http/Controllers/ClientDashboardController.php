<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientDashboardController extends Controller
{
    public function index()
    {   
        //Esto no es opcional en este contexto, porque Laravel necesita saber que la vista está en un namespace registrado y no en resources/views.
        return view('theme::dashboard-new');
    }

    public function exindex()
    {
        //Esta vista está obsoleta
        return view('theme::dashboard');
    }
}
