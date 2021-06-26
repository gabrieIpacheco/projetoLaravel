@extends('layout.template')

@section('conteudo')
<h1>Lista de especializações</h1>
<a href="especializacao/novo" class="btn btn-primary"><i class="far fa-file-alt"></i> novo</a>
<table class="table table-hover table-sm">
    <thead>       
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Descrição</th>
        <th scope="col">Imagem</th>
        <th scope="col" colspan="2">Opções</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($especializacao as $esp)
        <tr>
            <td>{{$esp->id}}</td>
            <td>{{$esp->descricao}}</td>
            <td>
                @if ($esp->imagem != "")
                <img style="width:40px; height:40px;" src="storage/{{$esp->imagem}}">
                @endif              
            </td>
            <td colspan="2">
                <a href="{{route('especializacao_editar', ['id' => $esp->id])}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a href="{{route('especializacao_excluir', ['id' => $esp->id])}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Excluir</a>
            </td>
        </tr>
    @empty
        <p>SEM ESPECIALIZAÇÔES CADASTRADAS</p>
    @endforelse
    </tbody>
</table>
@endsection