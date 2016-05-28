<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientes = Cliente::orderBy('id', 'desc')->paginate(10);

		return view('clientes.index', compact('clientes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clientes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$cliente = new Cliente();

		$cliente->nome = $request->input("nome");
	        $cliente->email = $request->input("email");
	        $cliente->endereco = $request->input("endereco");
	        $cliente->numero = $request->input("numero");
	        $cliente->bairro = $request->input("bairro");
	        $cliente->cidade = $request->input("cidade");
	        $cliente->estado = $request->input("estado");
	        $cliente->updated_at = $request->input("updated_at");
	        $cliente->created_at = $request->input("created_at");

		$cliente->save();

		return redirect()->route('clientes.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cliente = Cliente::findOrFail($id);

		return view('clientes.show', compact('cliente'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cliente = Cliente::findOrFail($id);

		return view('clientes.edit', compact('cliente'));
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
		$cliente = Cliente::findOrFail($id);

		$cliente->nome = $request->input("nome");
        $cliente->email = $request->input("email");
        $cliente->endereco = $request->input("endereco");
        $cliente->numero = $request->input("numero");
        $cliente->bairro = $request->input("bairro");
        $cliente->cidade = $request->input("cidade");
        $cliente->estado = $request->input("estado");
        $cliente->updated_at = $request->input("updated_at");
        $cliente->created_at = $request->input("created_at");

		$cliente->save();

		return redirect()->route('clientes.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cliente = Cliente::findOrFail($id);
		$cliente->delete();

		return redirect()->route('clientes.index')->with('message', 'Item deleted successfully.');
	}

}
