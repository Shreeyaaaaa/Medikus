@extends('layouts.app')
@section('content')
<div class="banner-wrapper">
          <div class="search-box search-box-3">

            <form action="{{url('/searchbyname')}}">
              <div class="form-group search-location">
                <input type="text" name ="name" class="form-control" placeholder="Search Location">
              </div>
             
              <button type="submit" class="btn btn-primary search-btn btn-search mt-0"><i class="fas fa-search"></i>  <span>Search</span>
              </button>
            </form>
          
          </div>
        </div>


@endsection
