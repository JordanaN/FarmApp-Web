@extends('layouts.layout')
@section('header')
<div class="page-header">
        <h1>Clientes / Show #{{$cliente->id}}</h1>
        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="btn-group pull-right" role="group" aria-label="...">
                <a class="btn btn-warning btn-group" role="group" href="{{ route('clientes.edit', $cliente->id) }}"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger">Delete <i class="glyphicon glyphicon-trash"></i></button>
            </div>
        </form>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="#">

                <div class="form-group">
                     <label for=" nome"> NOME</label>
                     <p class="form-control-static">{{$cliente->nome}}</p>
                </div>
                    <div class="form-group">
                     <label for="email">EMAIL</label>
                     <p class="form-control-static">{{$cliente->email}}</p>
                </div>
                    <div class="form-group">
                     <label for="endereco">ENDERECO</label>
                     <p class="form-control-static">{{$cliente->endereco}}</p>
                </div>
                    <div class="form-group">
                     <label for="numero">NUMERO</label>
                     <p class="form-control-static">{{$cliente->numero}}</p>
                </div>
                    <div class="form-group">
                     <label for="bairro">BAIRRO</label>
                     <p class="form-control-static">{{$cliente->bairro}}</p>
                </div>
                    <div class="form-group">
                     <label for="cidade">CIDADE</label>
                     <p class="form-control-static">{{$cliente->cidade}}</p>
                </div>
                    <div class="form-group">
                     <label for="estado">ESTADO</label>
                     <p class="form-control-static">{{$cliente->estado}}</p>
                </div>

            </form>

            <a class="btn btn-link" href="{{ route('clientes.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>

        </div>
    </div>

@endsection