@extends('layouts.app')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
               <form action="{{route('mypatients.list')}}" method="POST">

                 <div class="card-header">
                     Filter:
                     <div class="row">
                     <div class="col-md-10">
                         <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
                     </div>
                     <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                         
                     </div>
                 </div>
                 
                 </div>
                 </form>

                <div class="card-header"> 

                     Appointment ({{$bookings->count()}})
                 </div>
              
                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Photo</th>
                          <th scope="col">Date</th>
                          <th scope="col">User</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Gender</th>

                          <th scope="col">Time</th>
                          <th scope="col">Doctor</th>
                          <th scope="col">Status</th>
                          <th scope="col">Prescription</th>

                        </tr>
                      </thead>
                      <tbody>
                        @forelse($bookings as $key=>$booking)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td><img src="/profile/{{$booking->user->image}}" width="80" style="border-radius: 50%;">
                          </td>
                          <td>{{$booking->user_id}}</td>
                          <td>{{$booking->date}}</td>
                          <td>{{$booking->user->name}}</td>
                          <td>{{$booking->user->email}}</td>
                          <td>{{$booking->user->phone_number}}</td>
                          <td>{{$booking->user->gender}}</td>
                          <td>{{$booking->time}}</td>
                          <td>{{$booking->doctor->name}}</td>
                          <td>
                            <!--Button trigger model --->
                             @if(!App\Models\Prescription::where('date',date('Y-m-d'))->where('doctor_id',auth()->user()->id)->where('user_id',$booking->user->id)->exists())
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$booking->user_id}}">
                                Write prescription

                    </button>
                    @include('prescription.form')
                    @else 
                   <a href="{{route('prescription.show',[$booking->user_id,$booking->date])}}" class="btn btn-secondary">View prescription</a>
                    @endif

                          </td>
                        </tr>
                        @empty
                        <td>There is no any appointments !</td>
                        @endforelse
                       
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
