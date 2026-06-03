<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    function index(){
        return view('curso.index');
    }

    function add(Request $data){
        $cursos = new App\Models\CursoModel();
        $cursos::create($dados->all());

        return view('curso.index', ['success'=>'Cadastrado!', 'cursos'=>$cursos::all()]);
    }

    function remove(string $id) {
        $curso = new \App\Models\CursoModel();
        $curso::destroy($id);

        return view('curso.index', ['success'=>'Removido!', 'cursos'=>$cursos::all()]);
    }

    function atualizar(string $id) {
        $curso = new \App\Models\CursoModel();
        $curso= $curso::find($id);

        return view('curso.atualizar', ['curso'=>$curso]);
    }

}
