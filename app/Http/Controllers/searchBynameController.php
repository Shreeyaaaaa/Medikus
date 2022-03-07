<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;

class searchBynameController extends Controller
{
    public function index(Request $request) 
{	
	$search=$request->get('name');
	$doctors=User::where( 'name','=',$search )->orWhere('department','=',$search)->get();


        return view('seachbynameresult', compact('doctors'));

  
  

    }
     
}
 
    

 