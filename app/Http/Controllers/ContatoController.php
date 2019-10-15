<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {

        $contatos = [
            (object)["nome"=>"Sergio","tel"=>"6565656565"],
            (object)["nome"=>"Joao","tel"=>"123321321"]
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);


        return view('contato.index',compact('contatos'));
    }
    public function criar(Request $req)
    {
        dd($req->all());
        return "Esse é o Criar do ContatoController";
    }
    public function editar()
    {
        return "Esse é o Editar do ContatoController";
    }
}
