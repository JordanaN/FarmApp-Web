@extends('layouts.layout')

@section('header')
<div class="page-header clearfix">
 <h1>
  <i class=""></i> Produtos
  <a class="btn btn-success pull-right" href="{{ route('produtos.create') }}"><i class=""></i> Cadastrar</a>
</h1>

</div>
@endsection

@section('content')
<div class="row">
 <div class="col-md-12">
  @if($produtos)
  <table class="table table-striped table-responsive">
   <thead>
    <tr>
     <th>Nome</th>
     <th>Categoria</th>
     <th>Quantidade</th>
     <th class="text-right">Opções</th>
   </tr>
 </thead>
 <tbody>
  @foreach($produtos as $produto)
  <tr>
   <td>{{$produto->nome}}</td>
   <td>{{ $produto->categoria->descricao or 'categoria padrao'}}</td>
   <td>{{$produto->quantidade}}</td>
   <td class="text-right">
    <a class="btn btn-xs btn-warning" href="{{ route('produtos.edit', $produto->id) }}" method="POST"><i class=""></i> Editar</a>
    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Deseja deletar o produto?')) { return true } else {return false };">
     <input type="hidden" name="_method" value="DELETE">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <button type="submit" class="btn btn-xs btn-danger"><i class=""></i> Deletar</button>
   </form>
 </td>
</tr>
@endforeach
</tbody>
</table>
@else
<h3 class="text-center alert alert-info">Vazia!</h3>
@endif
</div>
</div>
@endsection

