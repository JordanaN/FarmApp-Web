<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller {

	/**
     	* Create a new controller instance.
	*
	* @return void
	*/
	 public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categorias = Categoria::orderBy('id', 'desc')->paginate(10);

		return view('categorias.index', compact('categorias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('categorias.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$categoria = new Categoria();

		$categoria->id = $request->input("id");
        $categoria->descricao = $request->input("descricao");

		$categoria->save();

		return redirect()->route('categorias.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$categoria = Categoria::findOrFail($id);

		return view('categorias.show', compact('categoria'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$categoria = Categoria::findOrFail($id);

		return view('categorias.edit', compact('categoria'));
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
		$categoria = Categoria::findOrFail($id);

		$categoria->id = $request->input("id");
        $categoria->descricao = $request->input("descricao");

		$categoria->save();

		return redirect()->route('categorias.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$categoria = Categoria::findOrFail($id);
		$categoria->delete();

		return redirect()->route('categorias.index')->with('message', 'Item deleted successfully.');
	}

}
