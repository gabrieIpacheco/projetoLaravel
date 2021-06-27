@extends('layout.template')

@section('conteudo')
  <h1>Lista de boletins</h1>
        <a href="{{route('boletim_novo')}}" class="btn btn-primary"><i class="far fa-file-alt"></i> novo</a>
      <table class="table table-hover table-sm">
          <thead>       
          <tr>
              <th scope="col">ID</th>
              <th scope="col">Descrição</th>
              <th scope="col">Data da publicação</th>
              <th scope="col" colspan="2">Opções</th>
          </tr>
          </thead>
          <tbody>
          @forelse ($boletim as $bol)
              <tr>
                  <td>{{$bol->id}}</td>
                  <td>{{$bol->descricao}}</td>
                  <td>{{$bol->data_publicacao->format('d/m/Y')}}</td>
                  <td><a href="{{route('boletim_editar', ['id' => $bol->id])}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Editar</a></td>
                  <td><a href="{{route('boletim_excluir', ['id' => $bol->id])}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Excluir</a></td>
              </tr>
          @empty
              <p>SEM BOLETINS CADASTRADOS</p>
          @endforelse
          </tbody>
      </table>
      <div class="me-auto">{{$boletim->links()}}</div>      
@endsection