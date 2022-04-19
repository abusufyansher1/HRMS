<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function Dashboard()
	{
	    
	  $clients = DB::table('users')->where('role',3)->where('active_status',0)->get();
	  $employees = DB::table('users')->where('role',2)->where('active_status',0)->get();
	  $projects = DB::table('projects')->where('status',0)->where('active_status',0)->get();
	  
		return view('admin.dashboard',['clients'=>$clients,'employees'=>$employees,'projects'=>$projects]);
    }
}
