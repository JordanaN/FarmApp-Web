@extends('layouts.layout')

@section('header')
<div class="page-header clearfix">
 <h1>
  <i class="glyphicon glyphicon-align-justify"></i> Produtos
  <a class="btn btn-success pull-right" href="{{ route('produtos.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
</h1>

</div>
@endsection

@section('content')
<div class="row">
 <div class="col-md-12">
  @if($produtos)
  <table class="table table-condensed table-striped">
   <thead>
    <tr>
     <th>Nome</th>
     <th>Categoria</th>
     <th>Quantidade</th>
     <th>Responsavel</th>
     <th class="text-right">OPTIONS</th>
   </tr>
 </thead>
 <tbody>
  @foreach($produtos as $produto)

  <tr>
   <td>{{$produto->nome}}</td>
   <td>{{ $produto->categoria->descricao or 'categoria padrao'}}</td>
   <td>{{$produto->quantidade}}</td>
   <td>{{$produto->id_produto_user}}</td>

   <td class="text-right">
    <a class="btn btn-xs btn-primary" href="{{ route('produtos.show', $produto->id) }}" method="GET"><i class="glyphicon glyphicon-eye-open"></i> View</a>
    <a class="btn btn-xs btn-warning" href="{{ route('produtos.edit', $produto->id) }}" method="POST"><i class="glyphicon glyphicon-edit"></i> Edit</a>
    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
     <input type="hidden" name="_method" value="DELETE">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
   </form>
 </td>
</tr>
@endforeach
</tbody>
</table>
<!-- {!! $produtos->render() !!} -->
@else
<h3 class="text-center alert alert-info">Empty!</h3>
@endif

</div>
</div>



@endsection

