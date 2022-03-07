@extends('admin.layouts.app')
@section('title')
Hospital Edit
@endsection
@section('content') 
<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Hospital</h5>
                    <span>Update Hospital</span>
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Hospital</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update</li>
            </ol>
        </nav>
    </div>
    </div>
</div>

<div class="row justify-content-center">
	<div class="col-lg-10">
     
       
	<div class="card">
	<div class="card-header"><h3>Edit Hospital</h3></div>
	<div class="card-body">
		<form class="forms-sample" action="{{route('hospital.update',[$hospital->id])}}" method="post" >@csrf
            @method('PUT')
			<div class="row">
				<div class="col-lg-6">
                    <div class="form-group">

					<label for="">Hospital name</label>
					<input type="text" name="hospital" class="form-control @error('hospital') is-invalid @enderror" placeholder="hospital name" value="{{$hospital->hospital}}">
                    @error('hospital')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
				</div>
           <div class="form-group">

                    <label for="">Location</label>
                    <input type="text" name="location" class="form-control @error('location') is-invalid @enderror" placeholder="location name" value="{{$hospital->location}}">
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
                    <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" placeholder="description name" >{{$hospital->description}}
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
</div>
</div>
@endsection