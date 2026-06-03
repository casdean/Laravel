<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admin.index');
    }

    function add(Request $dados){
        $admins = new \App\Models\AdminModel();
        $admins::create($dados->all());

        return view('admin.index', ['success'=>'Cadastrado!', 'admins'=>$admins::all()]);
    }

    function remove(string $id) {
        $admin = new \App\Models\AdminModel();
        $admin::destroy($id);

        return view('admin.index', ['success'=>'Removido!', 'admins'=>$admins::all()]);
    }

    function atualizar(string $id) {
        $admin = new \App\Models\AdminModel();
        $admin = $admin::find($id);

        return view('admin.atualizar', ['admin'=>$admin]);
    }

}
