<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Especializacao;
use App\Http\Requests\EspecializacaoRequest;

class EspecializacaoController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $especializacao = Especializacao::all();
        return view('especializacao.listagem', ['especializacao'=> $especializacao]);        
    }

    function novo(){
        $especializacao = new especializacao();
        $especializacao->id = 0;
        $especializacao->descricao = "";
        return view('especializacao.formulario', ['especializacao' => $especializacao]);
    }

    function salvar(EspecializacaoRequest $request){
        if($request->input("id")==0){
            $especializacao = new Especializacao();
        }else{
            $especializacao = Especializacao::find($request->input("id"));       
        }
        $imagem = "";
        if($request->file('file')){
        $path = $request->file('file')->store('public');
        $caminhos = explode('/', $path);
        $tamanho = sizeof($caminhos);
        $imagem = $caminhos[$tamanho-1];
        
        if($especializacao->imagem != ""){
                Storage::delete('public/'.$especializacao->imagem);
            }
        }
        
        $especializacao->descricao = $request->input("descricao");
        if($imagem != ""){
            $especializacao->imagem = $imagem;
        }
        $especializacao->save();
        $mensagem = "Categoria $especializacao->descricao foi salva";
        return redirect()->route("especializacao_listagem")->with(compact('mensagem'));        
    }

    function editar($id){
        $especializacao = Especializacao::find($id);
        return view("especializacao.formulario", ['especializacao'=>$especializacao]);
    }

    function excluir($id){
        $especializacao = Especializacao::find($id);
        $mensagem = "Especializacao: $especializacao->descricao excluida!";
        if($especializacao->imagem != ""){
            Storage::delete('public/'.$especializacao->imagem);
        }
        $especializacao->delete();
        return redirect()->route("especializacao_listagem")->with(compact('mensagem'));
    }
}
