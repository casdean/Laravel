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

    function remove(string $id) {
        $aluno = new \App\Models\AlunoModel();
        $aluno::destroy($id);

        return view('aluno.index', ['success'=>'Removido!', 'alunos'=>$alunos::all()]);
    }

    function atualizar(string $id) {
        $aluno = new \App\Models\AlunoModel();
        $aluno = $aluno::find($id);

        return view('aluno.atualizar', ['aluno'=>$aluno]);
    }

}
