<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Speciality;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //      $users  = User::where('role_id','=',1)->get();
    //     return view('admin.doctor.index',compact('users'));

      
    // }
    public function index(Request $request)
    {
         $users = User::where([
            ['role_id','=',1],
            [function($query) use($request){
            if ($term=$request->term) {
            $query->where('name', 'Like', '%' . $term . '%')->get();
        }
        }]
         ])->orderBy("id","desc")->paginate(10);
        

        return view('admin.doctor.index',compact('users'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $this->validateStore($request);
        $data = $request->all();
       /* $image = $request->file('image');
        $name = $image->hashName();
        $destination = public_path('/images');
        $image->move($destination,$name);*/
        $name = (new User)->userAvatar($request);


        $data['image'] = $name;
        $data['password'] = bcrypt($request->password);
        User::create($data);

        return redirect()->back()->with('message','Doctor added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.doctor.delete',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user = User::find($id);
        return view('admin.doctor.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateUpdate($request,$id);
        $data = $request->all();
        $user = User::find($id);
        $imageName = $user->image;
        $userPassword = $user->password;
        if($request->hasFile('image')){
            $imageName =(new User)->userAvatar($request);
            unlink(public_path('images/'.$user->image));
        }
        $data['image'] = $imageName;
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }else{
            $data['password'] = $userPassword;
        }
         $user->update($data);
        return redirect()->route('doctor.index')->with('message','Doctor updated successfully');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $id==Auth::id();
       if(auth()->user()->id == $id){
            abort(401);
       }
       $user = User::find($id);
       $userDelete = $user->delete();
       if($userDelete){
        unlink(public_path('images/'.$user->image));
       }
        return redirect()->route('doctor.index')->with('message','Doctor deleted successfully');    }

    public function validateStore($request){
        return  $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:6|max:25',
            'gender'=>'required',
            'education'=>'required',
            'address'=>'required',
            'speciality'=>'required',
            'phone_number'=>'required|numeric',
            'image'=>'required|mimes:jpeg,jpg,png',
            'role_id'=>'required',
            'description'=>'required'

       ]);
    }
     public function validateUpdate($request,$id){
        return  $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:users,email,'.$id,
          
            
            'phone_number'=>'numeric',
            'image'=>'mimes:jpeg,jpg,png',
            

       ]);
    }
     
}
/*
 'gender'=>'required',
            'education'=>'required',
            'address'=>'required',
            'speciality'=>'required',
            'phone_number'=>'required|numeric',
            'image'=>'mimes:jpeg,jpg,png',
            'role_id'=>'required',
            'description'=>'required'*/