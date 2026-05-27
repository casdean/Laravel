<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function index(){
        return view('comp.index');
    }

    function add(Request $data){
        $componentes = new App\Models\ComponenteModel();
        $componentes::create($dados->all());

        return view('comp.index', ['success'=>'Cadastrado!', 'componentes'=>$componentes::all()]);
    }
}
