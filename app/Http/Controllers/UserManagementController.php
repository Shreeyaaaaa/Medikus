<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use DB;

class UserManagementController extends Controller
{
   //viewUserRole
	public function viewUserRole()
	{
	$UserRoles = DB::table('users')->where('role_id', '1')->get();

      dd($UserRoles);
		return view('admin.index',compact('UserRoles'));
	}

}
