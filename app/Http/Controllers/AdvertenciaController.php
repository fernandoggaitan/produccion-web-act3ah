<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertenciaController extends Controller
{
    
    public function mensaje()
    {
        return view('advertencia.mensaje');
    }

}
