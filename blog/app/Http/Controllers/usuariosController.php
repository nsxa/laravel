<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuarios;
use App\http\Request\usuariosForm;
use DB;
class usuariosController extends Controller
{
    //
	
	public function __construct()
	{
		
	}
	
	public function index(Request $request)
	{
			
			//echo $_GET["nombre"];
			
			$datos[] = "uno";
			$datos[] = "dos";
			
			
			$users = DB::table('usuarios')->get();
			
			var_dump($users);
			exit();
			

			return view('usuarios')->with('datos', $users);
			
			
			/*if($request)
			{
			
			
			$query=trim($request->get('searchText'));
			
			
			//return view ('App\resources\views\usuarios');
			return view ('usuarios');
			}
			*/
			
			
	}
	
	public function create(){
		
		
	}
	
	public function store(){
		
		
	}
	
	public function show()
	{
		
		
	}
	public function edit(){
		
		
	}
	public function update(){
		
		
	}
	public function destroy(){
	}
}
