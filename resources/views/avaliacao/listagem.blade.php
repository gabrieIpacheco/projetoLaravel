@extends('layout.template')

@section('conteudo')
<h1>Lista de Avaliacao</h1>
<a href="avaliacao/novo" class="btn btn-primary"><i class="far fa-file-alt"></i> novo</a>
<table class="table table-hover table-sm">
    <thead>       
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Descrição</th>
        <th scope="col">Estrelas</th>
        <th scope="col" colspan="2">Opções</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($avaliacao as $ava)
        <tr>
            <td>{{$ava->id}}</td>
            <td>{{$ava->descricao}}</td>
            <td>
                @for ($i = 0; $i < $ava->nota; $i++)
                <i class="far fa-star"></i>
                @endfor
            </td>
            <td colspan="2">
                <a href="{{route('avaliacao_editar', ['id' => $ava->id])}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a href="{{route('avaliacao_excluir', ['id' => $ava->id])}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Excluir</a>
            </td>
        </tr>
    @empty
        <p>SEM AVALIAÇÕES CADASTRADAS</p>
    @endforelse
    </tbody>
</table>
@endsection