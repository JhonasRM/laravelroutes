<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paginaInicialController extends Controller
{
    public function inicial() {
        return view('site.paginainicial');
    }
}
