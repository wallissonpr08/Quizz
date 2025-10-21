<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PerguntaController extends Controller
{
    public function inicio(): View
    {
        return view(view: 'perguntas.inicio');
    }
}
