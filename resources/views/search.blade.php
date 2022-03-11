

@extends('layouts.app')

@section('content')


<!--Search doctor-->
<form action="{{url('/searchdoctor')}}" method="GET">

    <div class="card">
        <div class="card-body">
            <div class="card-header">Find Doctors</div>
            <div class="card-body">
                <di v class="row">
                    <div class="col-md-8">
                        <input type="text" name="date" class="form-control" id="datepicker">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary" type="submit">Find Doctors</button>

                    </div>

                </div>

            </div>
        </div>
    </div>
</form>
 <!--display doctors-->
    <div class="card">
        <div class="card-body">
            <div class="card-header"><h3>15  Doctors  Available</h3><br>
            Book appointments with minimum wait-time & verified doctor details</h4></div>
            <div class="card-body">
                
               <!--     <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Expertise</th>
                            <th>Book</th>
                        </tr>
                    </thead>--->

                    <tbody>
                       @forelse($doctors as $doctor)
                     
                       <div class="row">
        <div class="col-md-3 profile">

                <div class="card-body">
                    <img  src="{{asset('images')}}/{{$doctor->doctor->image}}"" class="profile-img" style="border-radius: 50%;" >
                    <br>
                    <a href="{{route('new.appointment',['doctorId' => $doctor->user_id, 'date' => $doctor->date])}}">
                    view profile

   
            </div>
        </div>
    </td>
                     

                      <div class="col-md-5 profile">
                   <h4 > <a href="{{route('new.appointment',['doctorId' => $doctor->user_id, 'date' => $doctor->date])}}">{{$doctor->doctor->name}}</h4>
                                     <h4>{{$doctor->doctor->department}} </h4>

                   <h4 >{{$doctor->doctor->education}}</h4>
                    <h5 style="font-size: 14px;"> {{$doctor->doctor->address}} </h5>
                   <ion-icon name="today-outline"></ion-icon>
              
            <h4>4.93</h4>
               <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
               
                <i class="fas fa-calendar-check-o" aria-hidden="true"></i>
            </div>
            </div>
     
              <div class="col-md-4 profile">
                                <h4 style="color: #01a400"> <i class="fas fa-calendar-check" aria-hidden="true" style="margin: 10px;"></i>Available Today</h4>
                                <h5><a href="{{route('new.appointment',['doctorId' => $doctor->user_id, 'date' => $doctor->date])}}">
                                View Availability</h5>
                                <a href="{{route('new.appointment',['doctorId' => $doctor->user_id, 'date' => $doctor->date])}}">
                                    <button class="btn btn-success">Book Appointment</button>
                                </a>


                           
            </div>
   
         </div>
     




        </div>
   
                        @empty
                        <td>No doctors available today</td>
                        @endforelse


                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>



@endsection





