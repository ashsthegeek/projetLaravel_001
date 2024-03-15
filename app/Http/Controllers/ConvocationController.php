<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvocationController extends Controller
{
    public function liste_convocation()
    {
        return view('convocations.employeur.convocation');
    }
}
