<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Route;
use Toastr;
class AuthController extends Controller
{
	function index(Request $req1)
	{
		$req1->validate([
   			'email'=>'required|email',
   			'password'=>'required|min:5|max:12',
   		]);
   			$email=$req1->input('email');
   		$password=$req1->input('password');
   		$users = DB::table('users')
            ->where('email','=',$email)
            ->where('password','=',$password)
            ->where('active_status','=',0)
            ->first();
         if(!$users)
   	{
   		// session()->flash('data','Error! Invalid credentials');
           
    Toastr::error('Invalid credentials', 'Error!', ["positionClass" => "toast-top-right"]);
     return redirect('/login');
   		// return "";
   	}
   	else{
   		if ($users->role==1) {
   			// session('userid',$users->id);
   		 session(['userid' => $users->id]);
   		 session(['username' => $users->username]);
   		 session(['role' => $users->role]);
         session(['code' => "admin"]);
         
    Toastr::success('Login successful', 'Success!', ["positionClass" => "toast-top-right"]);
            return redirect('/admin/dashboard/');
   		}
   		else{
   	
            Toastr::warning('Invalid role', 'Warning!', ["positionClass" => "toast-top-right"]);
     return redirect('/');
   		}

	}
    //
}
}