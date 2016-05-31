@extends('layouts.layout')

@section('header')
<div class="page-header clearfix">
  <h1>
    <i class=""></i> Categorias
    <a class="btn btn-success pull-right" href="{{ route('categorias.create') }}"><i class=""></i> Cadastrar</a>
  </h1>

</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    @if($categorias->count())
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Desccrição</th>
          <th class="text-right">Opções</th>
        </tr>
      </thead>

      <tbody>
        @foreach($categorias as $categoria)
        <tr>
          <td>{{$categoria->descricao}}</td>
          <td class="text-right">
            <a class="btn btn-xs btn-warning" href="{{ route('categorias.edit', $categoria->id) }}"><i class=""></i> Editar</a>
            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Deseja deletar a categoria?')) { return true } else {return false };">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-xs btn-danger"><i class=""></i> Deletar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {!! $categorias->render() !!}
    @else
    <h3 class="text-center alert alert-info">Vazia!</h3>
    @endif

  </div>
</div>

@endsection