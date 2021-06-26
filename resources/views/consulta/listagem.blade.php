@extends('layout.template')

@section('conteudo')
  <h1>Lista de Consultas</h1>
        <a href="{{route('consulta_novo')}}" class="btn btn-primary"><i class="far fa-file-alt"></i> novo</a>
      <table class="table table-hover table-sm">
          <thead>       
          <tr>
              <th scope="col">ID</th>
              <th scope="col">Descrição</th>
              <th scope="col">Data</th>
              <th scope="col">Hora</th>
              <th scope="col">Especializacao</th>
              <th scope="col">Paciente</th>
              <th scope="col" colspan="2">Opções</th>
          </tr>
          </thead>
          <tbody>
          @forelse ($consulta as $cons)
              <tr>
                  <td>{{$cons->id}}</td>
                  <td>{{$cons->descricao}}</td>
                  <td>{{$cons->data->format('d/m/Y')}}</td>
                  <td>{{$cons->hora->format('H:i')}}</td>
                  <td>{{$cons->especializacao->descricao}}</td>
                  <td>{{$cons->paciente_id == null ? $cons->paciente_id:$cons->paciente->nome}}</td>
                  <td colspan="2">
                      <a href="{{route('consulta_editar', ['id' => $cons->id])}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Editar</a>
                      <a href="{{route('consulta_excluir', ['id' => $cons->id])}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Excluir</a>
                  </td>
              </tr>
          @empty
              <p>SEM CONSULTAS CADASTRADAS</p>
          @endforelse
          </tbody>
      </table>
      <div class="me-auto">{{$consulta->links()}}</div>
      
@endsection