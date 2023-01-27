<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use AuthController;
//use Models\User as User;
use App\Models\Usuario;

use DB;
//use App\Usuario;


class login extends Controller
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
		
		

$users = [
  'Joel',
  'Ellie',
  'Tess'
];

return view('login')
  ->with('users', $users)
  ->with('title', 'Listado de usuarios');
  
		
	}
	
	public function registration()
    {
        return view('registration');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
 echo "Hola".$_POST["email"];
 
 //exit();
 
 
 
        $credentials = $request->only('email', 'password');
       
		$Usuario = Usuario::todo();

		var_dump($Usuario);
		
		foreach($Usuario as $user){
			
			echo $user->username;
			
			if($user->username==$_POST["email"])
			{
				
				return redirect()->intended('dashboard');
			}
			
		}

		
	   /*if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');*/
    }
 
    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
     
    public function dashboard()
    {
 return view('dashboard');
      /*if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');*/
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
	
}
