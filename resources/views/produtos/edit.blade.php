@extends('layouts.layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Produtos / Edit #{{$produto->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('id')) has-error @endif">
                       <label for="id-field">Id</label>
                    <input type="text" id="id-field" name="id" class="form-control" value="{{ $produto->id }}"/>
                       @if($errors->has("id"))
                        <span class="help-block">{{ $errors->first("id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('nome')) has-error @endif">
                       <label for="nome-field">Nome</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ $produto->nome }}"/>
                       @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('categoria')) has-error @endif">
                       <label for="categoria-field">Categoria</label>
                    <input type="text" id="categoria-field" name="categoria" class="form-control" value="{{ $produto->categoria }}"/>
                       @if($errors->has("categoria"))
                        <span class="help-block">{{ $errors->first("categoria") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('quantidade')) has-error @endif">
                       <label for="quantidade-field">Quantidade</label>
                    <input type="text" id="quantidade-field" name="quantidade" class="form-control" value="{{ $produto->quantidade }}"/>
                       @if($errors->has("quantidade"))
                        <span class="help-block">{{ $errors->first("quantidade") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('updated_at')) has-error @endif">
                       <label for="updated_at-field">Updated_at</label>
                    <input type="text" id="updated_at-field" name="updated_at" class="form-control" value="{{ $produto->updated_at }}"/>
                       @if($errors->has("updated_at"))
                        <span class="help-block">{{ $errors->first("updated_at") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('created_at')) has-error @endif">
                       <label for="created_at-field">Created_at</label>
                    <input type="text" id="created_at-field" name="created_at" class="form-control" value="{{ $produto->created_at }}"/>
                       @if($errors->has("created_at"))
                        <span class="help-block">{{ $errors->first("created_at") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('produtos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
