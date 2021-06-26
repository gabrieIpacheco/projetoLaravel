@extends('layout.template')


@section('conteudo')
<h1>
  Paciente  
</h1>
<form action="{{route('paciente_salvar')}}" method="POST">
  {{ csrf_field() }}
  <div class="mb-3">
    <label for="id">ID</label>
    <input type="text" value="{{old('id',$paciente->id)}}" class="form-control" id="id" name="id" readonly>
  </div>
  <div class="mb-3">
      <label for="nome">nome</label>
      <input type="text" value="{{old('nome', $paciente->nome)}}" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome">
      @error('nome')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="cpf">cpf</label>
        <input type="text" value="{{old('cpf', $paciente->cpf)}}" class="form-control @error('cpf') is-invalid @enderror" id="cpf" name="cpf">
        @error('cpf')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  <button type="submit" class="btn btn-primary"><i class="fas fa-cloud-upload-alt"></i> Enviar</button>
</form>
@endsection
