@extends('layouts.layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
        <div class="col-md-6  col-md-offset-3">
    <div class="page-header sty-pn">
        <h1><i class=""></i> Categoria #{{$categoria->descricao}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">

            <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('id')) has-error @endif">
                       <label for="id-field">Id</label>
                    <input type="text" id="id-field" name="id" class="form-control"  disabled value="{{ $categoria->id }}"/>
                       @if($errors->has("id"))
                        <span class="help-block">{{ $errors->first("id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('descricao')) has-error @endif">
                       <label for="descricao-field">Descricao</label>
                    <input type="text" id="descricao-field" name="descricao" class="form-control" value="{{ $categoria->descricao }}"/>
                       @if($errors->has("descricao"))
                        <span class="help-block">{{ $errors->first("descricao") }}</span>
                       @endif
                    </div>
                    <hr>
                <div class="">
                    <button type="submit" class="btn btn-primary">Savar</button>
                    <a class="btn btn-link pull-right" href="{{ route('categorias.index') }}"><i class=""></i> Voltar</a>
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
