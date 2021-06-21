<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Empleado;


class EmpleadosController extends Controller
{

    public function __construct()
	{
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.colaboradores.index',['empleados'=>Empleado::all()]);
        
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
        return view('backend.colaboradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         
		$input = $request->all();
		//dd( $input );

		$rules = [
			//'Foto' => 'mimes:jpeg,png,jpg',// max 150kb
			'nombre' => 'required'
		
			//hacer validacion para tipo de datos

		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$b = new Empleado($input);
			$b->save();
		}
		 
		return view('backend.colaboradores.index',['empleados'=> Empleado::all()]);	
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.colaboradores.edit', ['empleados' => Empleado::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        	//dd($request->all());
		$input = $request->all();
		//dd($input);
		//dd($input);
		$rules = [
			'nombre' => 'required'
		];


		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$p = Empleado::find($id);
			$p->update($input);
			//dd($p->hyperlink);
			$p->save();
        }
		return view('backend.colaboradores.edit', ['empleados' => Empleado::find($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Empleado::find($id);
		$b->delete();
		return view('backend.colaboradores.index',['empleados'=>Empleado::all()]);
    }
}
