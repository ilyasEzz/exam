<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index()
    {
        $autos = $this->getAllCars();

        return view('auto.index', [
            'autos' => $autos
        ]) ;
    }
}
