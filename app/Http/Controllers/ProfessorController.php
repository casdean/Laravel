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
}
