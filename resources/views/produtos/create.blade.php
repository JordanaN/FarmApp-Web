@extends('layouts.layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class=""></i> Novo Produto </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-6">

            <form action="{{ route('produtos.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                   <div class="form-group @if($errors->has('nome')) has-error @endif">
                       <label for="nome-field">Nome</label>
                    <input type="text" id="nome-field" name="nome" class="form-control" value="{{ old("nome") }}"/>
                       @if($errors->has("nome"))
                        <span class="help-block">{{ $errors->first("nome") }}</span>
                       @endif
                    </div>
                     <div class="form-group @if($errors->has('categoria')) has-error @endif">
                       <label for="categoria-field">Categoria</label>
                    <input type="text" id="categoria-field" name="categoria" class="form-control" value="{{ old("categoria") }}"/>
                       @if($errors->has("categoria"))
                        <span class="help-block">{{ $errors->first("categoria") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('quantidade')) has-error @endif">
                       <label for="quantidade-field">Quantidade</label>
                    <input type="text" id="quantidade-field" name="quantidade" class="form-control" value="{{ old("quantidade") }}"/>
                       @if($errors->has("quantidade"))
                        <span class="help-block">{{ $errors->first("quantidade") }}</span>
                       @endif
                    </div>
                    <hr />
                <div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a class="btn btn-link pull-right" href="{{ route('produtos.index') }}"><i class=""></i> Voltar</a>
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
