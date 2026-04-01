<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show(){
        $componentes = [
            (Object) ['nome'=>'tania', 'horario'=>'12:30'],
            (Object) ['nome'=>'romeu', 'horario'=>'18:69'],
           
        ];
        return view('componente', compact('componentes'));
        //alunos do compact vem do mesmo nome da variável
    }
}
