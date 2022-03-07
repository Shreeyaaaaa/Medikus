@extends('admin.layouts.app')
@section('title')
Hospital Create
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
	<div class="card-header"><h3>Add Hospital</h3></div>
	<div class="card-body">
		<form class="forms-sample" action="{{route('hospital.store')}}" method="post" enctype="multipart/form-data">@csrf
			<div class="row">
				<div class="col-lg-8">
                    <div class="form-group">

					<label for="">Hospital name</label>
					<input type="text" name="hospital" class="form-control @error('hospital') is-invalid @enderror" placeholder="hospital name" value="                   {{old('hospital')}}">
                    @error('hospital')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				</div>
                <div class="form-group">

                    <label for="">Location</label>
                    <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="location name" value="{{old('location')}}">
                    @error('location')
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

                    <label for="">Description</label>
                    <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="description name" value="{{old('description')}}">
                        </textarea>
                    @error('description')
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