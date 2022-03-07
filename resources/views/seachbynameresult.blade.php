@extends('layouts.app')
@section('content')

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
                       @foreach($doctors as $doctor)
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->department}}</td>
                        @endforeach


                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>


@endsection
