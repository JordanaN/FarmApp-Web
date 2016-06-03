@extends('layouts.layout')
@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
<div class="row col-md-12 col-sm-6">
	<div class="col-md-6 col-md-offset-3"">
		<div class="page-header">
			<h1><i class=""></i> Produto  #{{$produto->nome}}</h1>
		</div>
		@endsection

		@section('content')
		@include('error')

		<form action="{{ route('produtos.update', $produto->id) }}" method="POST">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group @if($errors->has('id')) has-error @endif">
				<label for="id-field">Id</label>
				<input type="text" id="id-field" name="id" class="form-control" disabled value="{{ $produto->id }}"/>
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
				<input type="text" id="categoria-field" disabled="" class="form-control" value="{{ $produto->categoria->descricao }}"/>
				<input type="hidden" id="categoria-hdn-field" name="categoria_id" value="{{ $produto->categoria_id }}"/>
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
			<hr>
			<div class="">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a class="btn btn-link pull-right" href="{{ route('produtos.index') }}"><i class=""></i> Voltar </a>
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
