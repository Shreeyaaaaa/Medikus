@extends('admin.layouts.app')
@section('title')
Speciality Create
@endsection
@section('content') 
<div class="page-wrapper">
<div class="content container-fluid">

<div class="row justify-content-center">
	<div class="col-lg-10">
        @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
       
	<div class="card">
	<div class="card-header"><h3>Add Speciality</h3></div>
	<div class="card-body">
		<form class="forms-sample" action="{{route('speciality.store')}}" method="post" enctype="multipart/form-data">@csrf
			<div class="row">
				<div class="col-lg-6">
                    <div class="form-group">

					<label for="">Speciality name</label>
					<input type="text" name="speciality" class="form-control @error('speciality') is-invalid @enderror" placeholder="speciality name" value="                   {{old('speciality')}}">
                    @error('speciality')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				</div>
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
            <div class="form-group">

				
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </div>
        </div>

           


				</form>
			</div>
            </div>
		</div>
	</div>
</div>
 </div>          
            </div>

@endsection