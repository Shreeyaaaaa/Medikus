

@extends('layouts.app')

@section('content')


<!--Search doctor-->
<form action="{{url('/searchdoctor')}}" method="GET">

    <div class="card">
        <div class="card-body">
            <div class="card-header">Find Doctors</div>
            <div class="card-body">
                <div class="row">
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
            <div class="card-header"> Doctors </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Expertise</th>
                            <th>Book</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse($doctors as $doctor)
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                
                                <img src="{{asset('images/doctor1.jpg')}}" width="100px" style="border-radius: 50%;">
                            </td>
                            <td>
                                {{$doctor->doctor->name}}
                            </td>
                            <td>
                                {{$doctor->doctor->department}}
                            </td>
                            <td>
                                <a href="{{route('new.appointment',['doctorId' => $doctor->user_id, 'date' => $doctor->date])}}">
                                    <button class="btn btn-success">Book Appointment</button>
                                </a>


                            </td>
                        </tr>
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





