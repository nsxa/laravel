<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
//use Models\User as User;
use App\Models\Usuario;

use DB;
//use App\Usuario;


class tictactoe extends Controller
{
    //
	
	
	
	public function store(){
		
		
echo "hola";
$users = DB::select("select * from 'usuario'");


var_dump($users);
//$Usuario = Usuario::all()->toArray();

       // dd($Usuario);
		
	
		
		
	}
	
	public function index(){
		
		
		$usuario= new Usuario();
		
		$todo=$usuario->todo();
		
		var_dump($todo);
echo "hola";

//$users = DB::select("select * from usuario");


//var_dump($users);

echo "chao";
//$Usuario = Usuario::all()->toArray();

       // dd($Usuario);
		
	}
}
