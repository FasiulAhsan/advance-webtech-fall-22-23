@extends('layouts.app')
@section('content')

    <table class="table table-border">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
        </tr>
       
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->Name}}</td>
                    <td>{{$student->student_id}}</td>
                    <td>{{$student->email}}</td>
                </tr>
            @endforeach
        

    </table>




@endsection