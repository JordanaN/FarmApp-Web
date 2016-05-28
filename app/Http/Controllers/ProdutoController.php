<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Produto;
use App\Http\Controllers\Auth\AuthController;
use Auth;
use DB;



class ProdutoController extends Controller {

	 /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$produtos = Produto::with('categoria')->orderBy('id', 'desc')->paginate(10);
		return view('produtos.index', compact('produtos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('produtos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{

		$produto = new Produto();

		$produto->id = $request->input("id");
		$produto->nome = $request->input("nome");
		$produto->categoria_id = $request->input("categoria");
		$produto->quantidade = $request->input("quantidade");
		$produto->updated_at = $request->input("updated_at");
		$produto->created_at = $request->input("created_at");
		$produto->id_produto_user = Auth::user()->id;

		$produto->save();

		return redirect()->route('produtos.index')->with('message', 'Produto criado com sucesso.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$produto = Produto::findOrFail($id);

		return view('produtos.show', compact('produto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$produto = Produto::findOrFail($id);

		return view('produtos.edit', compact('produto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$produto = Produto::findOrFail($id);

		$produto->id = $request->input("id");
		$produto->nome = $request->input("nome");
		$produto->categoria = $request->input("categoria");
		$produto->quantidade = $request->input("quantidade");
		$produto->updated_at = $request->input("updated_at");
		$produto->created_at = $request->input("created_at");

		$produto->save();

		return redirect()->route('produtos.index')->with('message', 'Produto atualizado com sucesso.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$produto = Produto::findOrFail($id);
		$produto->delete();

		return redirect()->route('produtos.index')->with('message', 'Produto deletado com sucesso.');
	}

}
