<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){
        return view('aluno.index');
    }

    function add(Request $dados){
        $alunos = new \App\Models\AlunoModel();
        $alunos::create($dados->all());

        return view('aluno.index', ['success'=>'Cadastrado!', 'alunos'=>$alunos::all()]);
    }
}
