<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        $alunos = [
            (Object) ['nome'=>'claudia', 'telefone'=>'222', 'email'=>'clauclau@21'],
            (Object) ['nome'=>'roberto', 'telefone'=>'212', 'email'=>'roro@gmail.com'],
            (Object) ['nome'=>'valeria', 'telefone'=>'333', 'email'=>'valeria@gmail.com']
        ];
        return view('aluno', compact('alunos'));
        //alunos do compact vem do mesmo nome da variável
    }

    function add($nome, $telefone, $email){
         $alunos [] = 
             (Object) ['nome'=>'Marion', 'telefone'=>'543', 'email'=>'mamamia@21'];
              return view('add', compact('alunos'));
         }
}
