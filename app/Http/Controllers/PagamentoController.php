<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function pagamentos() {
        return view('pagamentos');
    }
}
