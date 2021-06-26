@extends('layout.template')


@section('conteudo')
<h1>@if ($especializacao->imagem != "")
  <img style="width:100px; height:100px;" src="/storage/{{$especializacao->imagem}}">
  @endif
  Especializacao  
</h1>
<form action="{{route('especializacao_salvar')}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="mb-3">
    <label for="id">ID</label>
    <input type="text" value="{{old('id',$especializacao->id)}}" class="form-control" id="id" name="id" readonly>
  </div>
  <div class="mb-3">
      <label for="descricao">Descricao</label>
      <input type="text" value="{{old('descricao', $especializacao->descricao)}}" class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao">
      @error('descricao')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="file">Imagem</label>
      <input type="file" class="form-control" id="file" accept="image/*"name="file">
      @error('file')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
  <button type="submit" class="btn btn-primary"><i class="fas fa-cloud-upload-alt"></i> Enviar</button>
</form>
@endsection
