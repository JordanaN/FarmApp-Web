@extends('layouts.layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class=""></i> Nova Categoria </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-6">

            <form action="{{ route('categorias.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group @if($errors->has('descricao')) has-error @endif">
                       <label for="descricao-field">Descricao</label>
                    <input type="text" id="descricao-field" name="descricao" class="form-control" value="{{ old("descricao") }}"/>
                       @if($errors->has("descricao"))
                        <span class="help-block">{{ $errors->first("descricao") }}</span>
                       @endif
                    </div>
                    <hr>
                <div class="">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a class="btn btn-link pull-right" href="{{ route('categorias.index') }}"><i class=""></i>Voltar</a>
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
