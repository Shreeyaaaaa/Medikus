<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
class MyPatientController extends Controller
{
    public function index(Request $request)
    {
    	date_default_timezone_set('Australia/Melbourne');
    	if($request->date){
    		$bookings = Booking::latest()->where('date',$request->date)->where('doctor_id',auth()->user()->id)->get();
    		return view('doctors.my-patients.index',compact('bookings'));
    	}
    	$bookings = Booking::latest()->where('date',date('Y-m-d'))->where('doctor_id',auth()->user()->id)->get();
    	return view('doctors.my-patients.index',compact('bookings'));
    }

    public function toggleStatus($id)
    {
        $booking  = Booking::find($id);
        $booking->status =! $booking->status;
        $booking->save();
        return redirect()->back();

    }

    public function allTimeAppointment()
    {
        $bookings = Booking::latest()->paginate(20);
       
        return view('doctors.my-patients.all',compact('bookings'));
    }

  
}
