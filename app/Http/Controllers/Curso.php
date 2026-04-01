<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show(){
        $cursos = [
            (Object) ['nome'=>'design de logo', 'periodo'=>'tarde'],
            (Object) ['nome'=>'aspirador de borboleta', 'periodo'=>'manhã'],
           
        ];
        return view('curso', compact('cursos'));
        //alunos do compact vem do mesmo nome da variável
    }
}
