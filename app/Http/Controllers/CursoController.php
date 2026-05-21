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
}
