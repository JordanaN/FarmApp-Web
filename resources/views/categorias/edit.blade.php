@extends('layouts.layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Categorias / Edit #{{$categorium->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('categorias.update', $categorium->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('id')) has-error @endif">
                       <label for="id-field">Id</label>
                    <input type="text" id="id-field" name="id" class="form-control" value="{{ $categorium->id }}"/>
                       @if($errors->has("id"))
                        <span class="help-block">{{ $errors->first("id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('descricao')) has-error @endif">
                       <label for="descricao-field">Descricao</label>
                    <input type="text" id="descricao-field" name="descricao" class="form-control" value="{{ $categorium->descricao }}"/>
                       @if($errors->has("descricao"))
                        <span class="help-block">{{ $errors->first("descricao") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ route('categorias.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
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
