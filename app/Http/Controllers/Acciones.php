<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Acciones extends Controller
{
    public function aleatorio(Request $r) {
        $a = random_int(1, 100);
        return view('valor', ['valor' => $a, 'nombre' => 'Jose']);
    }
}
