<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $hospitals = Hospital::get();
        return view('admin.hospital.index',compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hospital.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'hospital'=>'required|unique:hospitals',
             
        ]);
        $data = $request->all();
         $name = (new Hospital)->hosAvatar($request);


        $data['image'] = $name;
      
        Hospital::create($data);
        
        return redirect()->back()->with('message','Hospital created');       }

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
        $hospital = Hospital::find($id);
        return view('admin.hospital.edit',compact('hospital'));      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'hospital'=>'required|unique:hospitals'
             
        ]);
        $hospital = Hospital::find($id);
        $hospital->hospital = $request->hospital;
        $hospital->save();
        return redirect()->route('admin.hospital.index')->with('message','Hospital updated');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $hospital = Hospital::find($id);
        $hospital->delete();
        return redirect()->route('hospital.index')->with('message','Hospital deleted');     }
}