<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeralController extends Controller
{
    public function inicio() {
        if(session()->get("logado") != 'sim') { 
            toastr()->info('Faça login com os dados mostrados no input'); 
        }
        return view('geral');
    }
}
