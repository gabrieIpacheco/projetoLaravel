<?php

namespace App\Http\Controllers;
use App\Http\Requests\AvaliacaoRequest;
use App\Models\Avaliacao;

class AvaliacaoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $avaliacao = Avaliacao::all();
        return view('avaliacao.listagem', ['avaliacao'=> $avaliacao]);        
    }

    function novo(){
        $avaliacao = new Avaliacao();
        $avaliacao->id = 0;
        $avaliacao->nota = 0;
        $avaliacao->descricao = "";
        return view('avaliacao.formulario', ['avaliacao' => $avaliacao]);
    }

    function salvar(AvaliacaoRequest $request){
        if($request->input("id")==0){
            $avaliacao = new Avaliacao();
        }else{
            $avaliacao = avaliacao::find($request->input("id"));       
        }
        $avaliacao->nota = $request->input("nota");
        $avaliacao->descricao = $request->input("descricao");
        $avaliacao->save();
        $mensagem = "Avaliacao salva";
        return redirect()->route("avaliacao_listagem")->with(compact('mensagem'));        
    }

    function editar($id){
        $avaliacao = avaliacao::find($id);
        return view("avaliacao.formulario", ['avaliacao'=>$avaliacao]);
    }

    function excluir($id){
        $avaliacao = avaliacao::find($id);
        $mensagem = "avaliacao: $avaliacao->descricao excluida!";
        $avaliacao->delete();
        return redirect()->route("avaliacao_listagem")->with(compact('mensagem'));
    }
}
