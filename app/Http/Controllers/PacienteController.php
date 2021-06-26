<?php

namespace App\Http\Controllers;
use App\Models\paciente;
use App\Http\Requests\PacienteRequest;

class PacienteController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $paciente = Paciente::all();
        return view('paciente.listagem', ['paciente'=> $paciente]);        
    }

    function novo(){
        $paciente = new Paciente();
        $paciente->id = 0;        
        $paciente->nome = "";
        $paciente->cpf = "";
        return view('paciente.formulario', ['paciente' => $paciente]);
    }

    function salvar(PacienteRequest $request){
        if($request->input("id")==0){
            $paciente = new Paciente();
        }else{
            $paciente = Paciente::find($request->input("id"));       
        }
        $paciente->cpf = $request->input("cpf");
        $paciente->nome = $request->input("nome");
        $paciente->save();
        $mensagem = "Paciente: $paciente->nome registro salvo";
        return redirect()->route("paciente_listagem")->with(compact('mensagem'));        
    }

    function editar($id){
        $paciente = Paciente::find($id);
        return view("paciente.formulario", ['paciente'=>$paciente]);
    }

    function excluir($id){
        $paciente = Paciente::find($id);
        $mensagem = "Paciente: $paciente->nome excluida!";
        $paciente->delete();
        return redirect()->route("paciente_listagem")->with(compact('mensagem'));
    }
}
