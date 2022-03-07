@extends('admin.layouts.app')
@section('title')
Doc Create
@endsection
@section('content')  
<div class="page-wrapper">
<div class="content container-fluid">

<div class="row">
    <div class="col-lg-12">
        @if(Session::has('message'))
            <!-- <div class="alert bg-success alert-success text-white" role="alert"> -->
                <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        @endif

        
    <div class="card">
    <div class="card-header"><h3>Add Doctors</h3></div>
    <div class="card-body">
        <form class="forms-sample" action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data" >@csrf
            <div class="row">
                <div class="col-lg-6">
                    <label for="">Full name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="doctor name" value="{{old('name')}}">
                    @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email"value="{{old('email')}}">
                     @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="doctor password">
                     @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="col-lg-6">
                    <label for="">Gender</label>
                    <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                        <option value="">select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                     @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>

                <div class="row">
                    <div class="col-lg-6">
                        <label for="">Education</label>
                        <input type="text" name="education" class="form-control @error('education') is-invalid @enderror" placeholder="doctor highest degree" value="{{old('education')}}">
                         @error('education')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="doctor address"  value="{{old('address')}}">
                         @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
            <div class="row">
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Specialist</label>
                        <select name="speciality" class="form-control">
                            <option value="">Please select</option>

                            @foreach(App\Models\Speciality::all() as $d)
                                <option value="{{$d->speciality}}">{{$d->speciality}}</option>
                            @endforeach
                        </select>


                         @error('speciality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>

           <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Phone number</label>
                        <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror"value="{{old('phone_number')}}">
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
                        
                    </div>
                </div>
            <div class="row">
                         <div class="col-md-6">
                        <div class="form-group">
                    <label>DOB</label>
                        <input type="date" class="form-control"  placeholder="DOB" name="dob">
                         @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>

                    <div class="col-md-6">
                        <label>Role</label>
                        <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
                            <option value="">Please select role</option>
                            @foreach(App\Models\Role::where('name','!=','patient')->get() as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                            
                        </select>
                         @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="row">
                    
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Hospital</label>
                        <select name="hospital" class="form-control">
                            <option value="">Please select</option>

                            @foreach(App\Models\Hospital::all() as $h)
                                <option value="{{$d->hospital}}">{{$h->hospital}}</option>
                            @endforeach
                        </select>


                         @error('hospital')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                    </div>
                </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="">NMC number</label>
                        <input type="text" name="NMC_no" class="form-control @error('NMC_no') is-invalid @enderror"value="{{old('NMC_no')}}">
                                @error('NMC_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
                        
                    </div>
                </div>
            
            <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                    <label>Image</label>
                        <input type="file" class="form-control file-upload-info @error('image') is-invalid @enderror"  placeholder="Upload Image" name="image">
                        <span class="input-group-append">
                       
                        </span>
                         @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
            </div>
           
            <div class="form-group">
                <label for="exampleTextarea1">About</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="exampleTextarea1" rows="4" name="description">
                {{old('description')}}

                </textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            
            </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>


                </form>
            </div>
        </div>
    </div>
</div>
    </div>          
            </div>
@endsection
