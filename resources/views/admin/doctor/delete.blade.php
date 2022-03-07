@extends('admin.layouts.app')
@section('title')
Delete Doctor
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
	<div class="card-header"><h3>Confrim delete</h3></div>
	<div class="card-body">
        <img src="{{asset('images')}}/{{$user->image}}" width="120">
        <h2>{{$user->name}}</h2>
		<form class="forms-sample" action="{{route('doctor.destroy',[$user->id])}}" method="post" >@csrf
            @method('DELETE')
			
            <div class="card-footer">
                <button type="submit" class="btn btn-danger mr-2">Confrim</button>
                <a href="{{route('doctor.index')}}" class="btn btn-secondary">
                    Cancel
                  
                </a>
            </div>
           


				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>

@endsection