@extends('layout.template')

@section('conteudo')
  <form action="{{route('consulta_salvar')}}" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
      <label for="id">ID</label>
      <input type="text" value="{{old('id', $consulta->id)}}" class="form-control" id="id" name="id" readonly>
    </div>
    <div class="mb-3 form-group">
      <label for="Descricao">Descricao</label>
    <select class="form-control @error('descricao') is-invalid @enderror" id="Descricao" name="descricao">
      <option {{old('descricao', $consulta->descricao) == "Consulta de rotina"?"selected":""}} value="Consulta de rotina">Consulta de rotina</option>
      <option {{old('descricao', $consulta->descricao) == "Consulta de Emergência"?"selected":""}} value="Consulta de Emergência">Consulta de Emergência</option>
      <option {{old('descricao', $consulta->descricao) == "Retorno"?"selected":""}} value="Retorno">Retorno</option>     
    </select>
        {{-- <label for="descricao">Descricao</label>
        <input type="text" value="{{old('descricao',$consulta->descricao)}}" class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" required> --}}
        @error('descricao')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="data" class="form-label">Data</label>
      <input type="date" class="form-control @error('data') is-invalid @enderror" id="data" name="data"  value="{{old('data', $consulta->data->format('Y-m-d'))}}" required>
      @error('data')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="autor" class="form-label">hora(07:00 a 19:00)</label>
      <input type="time" class="form-control @error('hora') is-invalid @enderror" id="hora" name="hora"  min="07:00"max="19:00" value="{{old('hora',$consulta->hora->format('H:i'))}}" required>
      @error('hora')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="especializacao" class="form-label">Especializacao</label>
      <select class="form-select @error('especilizacao_id') is-invalid @enderror" size="3" name="especializacao_id" id="especializacao_id" required>
        @foreach($especializacao as $cons)
        <option 
        {{old('especializacao_id', $consulta->especializacao_id) == $cons->id?"selected":""}}
        value="{{$cons->id}}"> {{$cons->descricao}} </option>
        @endforeach
      </select>
      @error('especializacao_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-cloud-upload-alt"></i> Enviar</button>
  </form>
@endsection
