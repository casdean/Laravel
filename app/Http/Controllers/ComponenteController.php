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

    function remove(string $id) {
        $componente = new \App\Models\ComponenteModel();
        $componente::destroy($id);

        return view('comp.index', ['success'=>'Removido!', 'componentes'=>$componentes::all()]);
    }

    function atualizar(string $id) {
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($id);

        return view('comp.atualizar', ['componente'=>$componente]);
    }

    function save(Request $dados){
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($dados->id);
        $componente->update($dados->all());

        return view('comp.index', ['success'=>'Atualizado!', 'componentes'=>$componente::all()]);
    }

    
}
