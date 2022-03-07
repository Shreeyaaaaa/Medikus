<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\Prescription;

class PrescriptionController extends Controller
{
    public function index(Request $request)

    { $date = $request->get('date', today());
    	
        if($request->date){
            $bookings = Booking::latest()->where('date',$request->date)->where('doctor_id',auth()->user()->id)->get();
            return view('prescription.index',compact('bookings'));
        }
        $bookings = Booking::latest()->where('date',date('Y-m-d'))->where('doctor_id',auth()->user()->id)->get();
        return view('prescription.index',compact('bookings'));
   
    }

 


     public function store(Request $request)
    {
        $data  = $request->all();
       
       // $data['medicine'] = implode(',',$request->medicine);
        prescription::create($data);
        return redirect()->back()->with('message','Prescription created');
    }

     public function show($userId,$date)
    {
        $prescription = Prescription::where('user_id',$userId)->where('date',$date)->first();
        return view('prescription.show',compact('prescription'));
    }
    //get all patients from prescription table
    public function patientsFromPrescription()
    {   
        $patients = Prescription::get();
        
        return view('prescription.all',compact('patients'));
    }

}



