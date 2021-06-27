@extends('layout.template')

@section('conteudo')
  <form action="{{route('boletim_salvar')}}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
      <label for="id">ID</label>
      <input type="text" value="{{old('id', $boletim->id)}}" class="form-control" id="id" name="id" readonly>
    </div>
    <div class="mb-3">
      <label for="descricao">Descricao</label>
      <input type="text" value="{{old('descricao', $boletim->descricao)}}" class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao">
      @error('descricao')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="data_publicacao" class="form-label">Data</label>
      <input type="date" class="form-control @error('data_publicacao') is-invalid @enderror" id="data_publicacao" name="data_publicacao"  value="{{old('data_publicacao', $boletim->data_publicacao->format('Y-m-d'))}}" required>
      @error('data_publicacao')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-cloud-upload-alt"></i> Enviar</button>
  </form>
@endsection
