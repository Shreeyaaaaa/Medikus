@extends('admin.layouts.app')
@section('title')
Speciality Edit
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
                    <h5>Speciality</h5>
                    <span>Update Speciality</span>
                </div>
            </div>
        </div>
    <div class="col-lg-4">
        <nav class="breadcrumb-container" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.html"><i class="ik ik-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#">Speciality</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update</li>
            </ol>
        </nav>
    </div>
    </div>
</div>

<div class="row justify-content-center">
	<div class="col-lg-10">
     
       
	<div class="card">
	<div class="card-header"><h3>Edit Speciality</h3></div>
	<div class="card-body">
		<form class="forms-sample" action="{{route('speciality.update',[$speciality->id])}}" method="post" >@csrf
            @method('PUT')
			<div class="row">
				<div class="col-lg-6">
                    <div class="form-group">

					<label for="">Speciality name</label>
					<input type="text" name="speciality" class="form-control @error('speciality') is-invalid @enderror" placeholder="speciality name" value="{{$speciality->speciality}}">
                    @error('speciality')
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