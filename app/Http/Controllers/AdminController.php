<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Client;

class AdminController extends Controller
{
    function Dashboard()
	{
	    $users = User::selectRaw('
    COUNT(CASE WHEN role = 2 THEN 1 ELSE NULL END) as "activeEmployees"')
	->where('active_status',0)->first();		
	$projects = Project::selectRaw('
    COUNT(CASE WHEN status = 0 THEN 1 ELSE NULL END) as "pending",
    COUNT(CASE WHEN status = 1 THEN 1 ELSE NULL END) as "completed",
	COUNT(CASE WHEN status = 2 THEN 1 ELSE NULL END) as "cancelled"')
	->where('active_status',0)->first();
	$count_clients=$this->getClients()->count();
	return view('admin.dashboard',['clients'=>$count_clients,'users'=>$users,'projects'=>$projects]);
    }
	function getClients()
	{
		$clients=Client::where('active_status',0);
		return $clients;
    }
	// function getUsersByStatus($active_status)
	// {
	// 	$users=Users::where('active_status',$active_status);
	// 	return $users;
    // }
	function ViewClients()
	{
		$clients=$this->getClients()->get();
		return view('admin.clients',['clients'=>$clients]);
	}
	function ViewUsersByStatus($active_status)
	{
		$users=User::where('active_status',$active_status)->where('role','2')->get();
		return view('admin.employees',['users'=>$users]);
	}
}
