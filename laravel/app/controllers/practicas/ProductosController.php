<?php

class Practicas_ProductosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$productos= Producto::all();
		return View::make('practicas/crud/productos/list')->with('productos', $productos);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('practicas/crud/productos/new');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$producto= new Producto();
		$producto->producto=Input::get('nombre');
		$producto->estado=Input::get('activo');
		$producto->save();
		return Redirect::route('crud.show', $producto->id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$producto= Producto::find($id);
		return View::make('practicas/crud/productos/show')->with('producto', $producto);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto=Producto::find($id);
		return View::make('practicas/crud/productos/edit')->with('producto', $producto);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$producto= Producto::find($id);
		$producto->producto=Input::get('producto');
		$producto->estado=Input::get('activo');
		$producto->save();
		return Redirect::route('crud.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
       $producto = Producto::find($id);
        
        if (is_null ($producto))
        {
            App::abort(404);
        }
        
        $producto->delete();

        if (Request::ajax())
        {
            return Response::json(array (
                'success' => true,
                'msg'     => 'Producto ' . $producto->full_name . ' eliminado',
                'id'      => $producto->id
            ));
        }
        else
        {
            return Redirect::route('crud.index');
        }
	}


}
