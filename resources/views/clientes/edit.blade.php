@extends('layouts.layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class=""></i> Cliente #{{$cliente->nome}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-6">

            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has(' nome')) has-error @endif">
                       <label for=" nome-field"> Nome</label>
                    <input type="text" id=" nome-field" name=" nome" class="form-control" value="{{ $cliente-> nome }}"/>
                       @if($errors->has(" nome"))
                        <span class="help-block">{{ $errors->first(" nome") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('email')) has-error @endif">
                       <label for="email-field">Email</label>
                    <input type="text" id="email-field" name="email" class="form-control" value="{{ $cliente->email }}"/>
                       @if($errors->has("email"))
                        <span class="help-block">{{ $errors->first("email") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('endereco')) has-error @endif">
                       <label for="endereco-field">Endereco</label>
                    <input type="text" id="endereco-field" name="endereco" class="form-control" value="{{ $cliente->endereco }}"/>
                       @if($errors->has("endereco"))
                        <span class="help-block">{{ $errors->first("endereco") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('numero')) has-error @endif">
                       <label for="numero-field">Numero</label>
                    <input type="text" id="numero-field" name="numero" class="form-control" value="{{ $cliente->numero }}"/>
                       @if($errors->has("numero"))
                        <span class="help-block">{{ $errors->first("numero") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('bairro')) has-error @endif">
                       <label for="bairro-field">Bairro</label>
                    <input type="text" id="bairro-field" name="bairro" class="form-control" value="{{ $cliente->bairro }}"/>
                       @if($errors->has("bairro"))
                        <span class="help-block">{{ $errors->first("bairro") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('cidade')) has-error @endif">
                       <label for="cidade-field">Cidade</label>
                    <input type="text" id="cidade-field" name="cidade" class="form-control" value="{{ $cliente->cidade }}"/>
                       @if($errors->has("cidade"))
                        <span class="help-block">{{ $errors->first("cidade") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('estado')) has-error @endif">
                       <label for="estado-field">Estado</label>
                    <input type="text" id="estado-field" name="estado" class="form-control" value="{{ $cliente->estado }}"/>
                       @if($errors->has("estado"))
                        <span class="help-block">{{ $errors->first("estado") }}</span>
                       @endif
                    </div>
                    <hr>
                <div class="">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a class="btn btn-link pull-right" href="{{ route('clientes.index') }}"><i class=""></i> Voltar</a>
                </div>
            </form>
        </div>
        <div class="imCliente">
  <img src=" {{asset('../img/category.gif')}}" width="auto" height="350px" >
</div>
</div>
<div class="footer">
  <p></p>
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
