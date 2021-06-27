<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoletimRequest;
use App\Models\Boletim;


class BoletimController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $boletim = Boletim::orderby('data_publicacao','desc')->paginate(7);
        return view('boletim.listagem', ['boletim'=> $boletim]);        
    }

    function novo(){
        $boletim = new boletim();
        $boletim->id = 0;
        $boletim->data_publicacao = "0000-00-00";
        $boletim->descricao = "";
        return view('boletim.formulario', ['boletim' => $boletim]);
    }

    function salvar(BoletimRequest $request){
        if($request->input("id")==0){
            $boletim = new boletim();
        }else{
            $boletim = Boletim::find($request->input("id"));       
        }
        
        $boletim->descricao = $request->input("descricao");
        $boletim->data_publicacao = $request->input("data_publicacao");
        $dataFormatada = $boletim->data_publicacao->format('d/m/Y');
        $boletim->save();
        $mensagem = "Boletim do dia $dataFormatada foi publicado";
        return redirect()->route("boletim_listagem")->with(compact('mensagem'));        
    }

    function editar($id){
        $boletim = Boletim::find($id);
        return view("boletim.formulario", ['boletim'=>$boletim]);
    }

    function excluir($id){
        $boletim = Boletim::find($id);
        $dataFormatada = $boletim->data_publicacao->format('d/m/Y');
        $mensagem = "Boletim do dia $dataFormatada foi excluido!";
        $boletim->delete();
        return redirect()->route("boletim_listagem")->with(compact('mensagem'));
    }
}
