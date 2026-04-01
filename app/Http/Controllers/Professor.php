<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $professores = [
            (Object) ['nome'=>'tania', 'cpf'=>'1233'],
            (Object) ['nome'=>'romeu', 'cpf'=>'1255'],
           
        ];
        return view('professor', compact('professores'));
        //alunos do compact vem do mesmo nome da variável
    }
}
