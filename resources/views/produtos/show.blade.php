@extends('layouts.layout')
@section('header')
<div class="page-header">
        <h1>Produtos / Show #{{$produto->id}}</h1>
        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('produtos.edit', $produto->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

                <div class="form-group">
                     <label for="id">ID</label>
                     <p class="form-control-static">{{$produto->id}}</p>
                </div>
                    <div class="form-group">
                     <label for="nome">NOME</label>
                     <p class="form-control-static">{{$produto->nome}}</p>
                </div>
                    <div class="form-group">
                     <label for="categoria">CATEGORIA</label>
                     <p class="form-control-static">{{$produto->categoria}}</p>
                </div>
                    <div class="form-group">
                     <label for="quantidade">QUANTIDADE</label>
                     <p class="form-control-static">{{$produto->quantidade}}</p>
                </form>

            <a class="btn btn-link" href="{{ route('produtos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection