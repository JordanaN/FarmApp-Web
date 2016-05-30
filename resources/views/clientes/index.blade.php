@extends('layouts.layout')

@section('header')
<div class="page-header clearfix">
  <h1>
    <i class=""></i> Clientes
    <a class="btn btn-success pull-right" href="{{ route('clientes.create') }}"><i class=""></i> Cadastrar</a>
  </h1>

</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    @if($clientes->count())
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th> Nome</th>
          <th>Email</th>
          <th>Endereço</th>
          <th>Numero</th>
          <th>Bairro</th>
          <th>Cidade</th>
          <th>Estado</th>
          <th class="text-right">Opções</th>
        </tr>
      </thead>

      <tbody>
        @foreach($clientes as $cliente)
        <tr>
          <td>{{$cliente->nome}}</td>
          <td>{{$cliente->email}}</td>
          <td>{{$cliente->endereco}}</td>
          <td>{{$cliente->numero}}</td>
          <td>{{$cliente->bairro}}</td>
          <td>{{$cliente->cidade}}</td>
          <td>{{$cliente->estado}}</td>
          <td class="text-right">
           <a class="btn btn-xs btn-warning" href="{{ route('clientes.edit', $cliente->id) }}"><i class=""></i> Editar</a>
            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Deseja deletrar o cliente?')) { return true } else {return false };">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-xs btn-danger"><i class=""></i> Deletar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {!! $clientes->render() !!}
    @else
    <h3 class="text-center alert alert-info">Vazia!</h3>
    @endif

  </div>
</div>

@endsection