<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = ['Fornecedor 1'];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
