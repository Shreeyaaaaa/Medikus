<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Time;
use App\Models\User;


use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $myappointments = Appointment::latest()->where('user_id', auth()->user()->id)->get();

      
        return view('doctors.appointment.index',compact('myappointments'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//dd($request->all());

        $this->validate($request,[
            'date'=>'required|unique:appointments,date,NULL,id,user_id,'.\Auth::id(),
            'time'=>'required'
        ]);

     $appointment =Appointment::create([
            'user_id'=>Auth::user()->id,
            
            'date' => $request->date
        ]);

    foreach($request->time as $time){
            Time::create([
                'appointment_id'=> $appointment->id,
                'time'=> $time,
                //'stauts'=>0
            ]);
        }
        return redirect()->back()->with('message','Appointment created for'. $request->date);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $appointmentId) 
    {

        $appointment = Time::where('appointment_id',$appointmentId)->delete();
        foreach($request->time as $time){
            Time::create([
                'appointment_id'=>$appointmentId,
                'time'=>$time,
                'status'=>0
            ]);
        }
         return $this->index();
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateTime(Request $request)
    {
        dd($request->all());
         $appointmentId = $request->appoinmentId;
        $appointment = Time::where('appointment_id',$appointmentId)->delete();
        foreach($request->time as $time){
            Time::create([
                'appointment_id'=>$appointmentId,
                'time'=>$time,
                'status'=>0
            ]);
        }
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




public function check(Request $request)
{

        $date = $request->date;
         $appointment= Appointment::where('date',$date)->where('user_id',auth()->user()->id)->first();
         if(!$appointment){
            return redirect()->to('/appointment')->with('errmessage','Appointment time not available for this date');
        }
        $appointmentId = $appointment->id;
        $times = Time::where('appointment_id',$appointmentId)->get();

       
        return view('doctors.appointment.index',compact('times','appointmentId','date'));

    }



    


   
    
 
}
