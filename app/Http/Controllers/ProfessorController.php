<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function index(){
        return view('prof.index');
    }

    function add(Request $data){
        $professores = new App\Models\ProfModel();
        $professores::create($dados->all());

        return view('prof.index', ['success'=>'Cadastrado!', 'professores'=>$professores::all()]);
    }

    function remove(string $id) {
        $professor = new \App\Models\ProfModel();
        $professor::destroy($id);

        return view('prof.index', ['success'=>'Removido!', 'professores'=>$professores::all()]);
    }

    function atualizar(string $id) {
        $professor = new \App\Models\ProfModel();
        $professor = $professor::find($id);

        return view('professor.atualizar', ['professor'=>$professor]);
    }

}
