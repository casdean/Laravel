<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes extends Controller

{
  function listar(){
    $clientes = [
        "cliente1" => ["id"=>1, "nome"=>"João Silva"],
        "cliente2" => ["id"=>2, "nome"=>"Maria Oliveira"],
        "cliente3" => ["id"=>3, "nome"=>"Carlos Souza"],
        "cliente4" => ["id"=>4, "nome"=>"Ana Pereira"],
        "cliente5" => ["id"=>5, "nome"=>"Pedro Santos"],
        "cliente6" => ["id"=>6, "nome"=>"Lucas Costa"],
        "cliente7" => ["id"=>7, "nome"=>"Fernanda Lima"],
        "cliente8" => ["id"=>8, "nome"=>"Rafael Alves"],
        "cliente9" => ["id"=>9, "nome"=>"Juliana Rocha"],
        "cliente10" => ["id"=>10, "nome"=>"Bruno Martins"],
        "cliente11" => ["id"=>11, "nome"=>"Patrícia Gomes"],
        "cliente12" => ["id"=>12, "nome"=>"Ricardo Teixeira"],
        "cliente13" => ["id"=>13, "nome"=>"Camila Ribeiro"],
        "cliente14" => ["id"=>14, "nome"=>"Diego Carvalho"],
        "cliente15" => ["id"=>15, "nome"=>"Aline Barbosa"],
        "cliente16" => ["id"=>16, "nome"=>"Thiago Moreira"],
        "cliente17" => ["id"=>17, "nome"=>"Mariana Freitas"],
        "cliente18" => ["id"=>18, "nome"=>"Felipe Mendes"],
        "cliente19" => ["id"=>19, "nome"=>"Beatriz Nunes"],
        "cliente20" => ["id"=>20, "nome"=>"Gustavo Cardoso"],
        "cliente21" => ["id"=>21, "nome"=>"Larissa Duarte"],
        ];

    return view('estoque', ["produtos"=>$produtos]);
  }

}





