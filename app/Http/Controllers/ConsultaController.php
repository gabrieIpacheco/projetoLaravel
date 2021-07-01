<?php

namespace App\Http\Controllers;


use App\Http\Requests\ConsultaRequest;
use App\Models\Consulta;
use App\Models\Especializacao;
use App\Models\Paciente;

class ConsultaController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $consulta = Consulta::orderby('data','desc')->paginate(7);
        return view('consulta.listagem', ['consulta'=> $consulta]);        
    }

    function novo(){
        $especializao = Especializacao::all();
        $paciente = Paciente::all();
        $consulta = new Consulta();
        $consulta->id = 0;
        $consulta->descricao = "";        
        $consulta->data = "0000-00-00";
        $consulta->hora = "07:00 ";
        $consulta->especializacao_id = 0;
        $consulta->paciente_id = 0; 
        return view('consulta.formulario', ['consulta' => $consulta, 'especializacao'=> $especializao, 'paciente' => $paciente]);
    }

    function salvar(ConsultaRequest $request){
        if($request->input("id")==0){
            $consulta = new Consulta();
        }else{
            $consulta = Consulta::find($request->input("id"));       
        }
        $consulta->descricao = $request->input("descricao");
        $consulta->data = $request->input("data");
        $consulta->hora = $request->input("hora");       
        $consulta->especializacao_id = $request->input("especializacao_id");
        $consulta->paciente_id = $request->input("paciente_id");

        $consulta->save();
        $medico = $consulta->especializacao->descricao;
        $dataConsulta = $consulta->data->format('d/m/Y').' as '.$consulta->hora->format('H:i');
        $mensagem = "Consulta com $medico foi agendada para o dia $dataConsulta horas";
        return redirect()->route("consulta_listagem")->with(compact('mensagem'));        
    }

    function editar($id){
        $consulta = Consulta::find($id);
        $especializao = Especializacao::all();
        $paciente = Paciente::all();
        return view("consulta.formulario", ['consulta'=>$consulta, 'especializacao'=> $especializao, 'paciente' => $paciente]);
    }

    function excluir($id){
        $consulta = Consulta::find($id);
        $medico = $consulta->especializacao->descricao;
        $dataConsulta = $consulta->data->format('d/m/Y').' as '.$consulta->hora->format('H:i');
        $mensagem = "Consulta com $medico para o dia $dataConsulta horas, foi cancelada";
        $consulta->delete();
        return redirect()->route("consulta_listagem")->with(compact('mensagem'));
    }
}
