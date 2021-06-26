@extends('layout.template')


@section('conteudo')
<h1>
  Avaliacao  
</h1>
<form action="{{route('avaliacao_salvar')}}" method="POST">
  {{ csrf_field() }}
  <div class="mb-3">
    <label for="id">ID</label>
    <input type="text" value="{{old('id',$avaliacao->id)}}" class="form-control" id="id" name="id" readonly>
  </div>
  <div class="mb-3">
      <label for="nota">Estrelas</label>
      <input type="number" value="{{old('nota', $avaliacao->nota)}}" class="form-control @error('nota') is-invalid @enderror" id="nota" name="nota">
      @error('nota')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="descricao">descricao</label>
        <input type="text" value="{{old('descricao', $avaliacao->descricao)}}" class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao">
        @error('descricao')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  <button type="submit" class="btn btn-primary"><i class="fas fa-cloud-upload-alt"></i> Enviar</button>
</form>
@endsection
