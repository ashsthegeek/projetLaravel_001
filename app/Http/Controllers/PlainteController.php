<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PlainteController extends Controller
{
    public function index_plainte()
    {
        return view('PLAINTES.index_plainte');
    }
}
