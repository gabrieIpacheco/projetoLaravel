@extends('layout.template')

@section('conteudo')
<h1>Lista de pacientes</h1>
<a href="paciente/novo" class="btn btn-primary"><i class="far fa-file-alt"></i> novo</a>
<table class="table table-hover table-sm">
    <thead>       
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col" colspan="2">Opções</th>
    </tr>
    </thead>
    <tbody>
    @forelse ($paciente as $pac)
        <tr>
            <td>{{$pac->id}}</td>
            <td>{{$pac->nome}}</td>
            <td>{{$pac->cpf}}</td>
            <td colspan="2">
                <a href="{{route('paciente_editar', ['id' => $pac->id])}}" class="btn btn-primary"><i class="fas fa-pencil-alt"></i> Editar</a>
                <a href="{{route('paciente_excluir', ['id' => $pac->id])}}" class="btn btn-danger"><i class="far fa-trash-alt"></i> Excluir</a>
            </td>
        </tr>
    @empty
        <p>SEM PACIENTES CADASTRADAS</p>
    @endforelse
    </tbody>
</table>
@endsection