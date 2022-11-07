@extends('layouts.app')
@section('content')
<html>
    <head>

    </head>
    <body>
        <h2>Student Create</h2>
        <form action="{{route('studentCreate')}}" class="form-group" method="POST">
            {{ csrf_field() }}

            <label for="">name</label>
            <input type="text" name='name' value="{{old('name')}}" class ="form-control">
<br>
            <label for="">ID</label>
            <input type="text" name='id' value="{{old('id')}}" class ="form-control">
<br>
            <label for="">DOB</label>
            <input type="text" name='dob' value="{{old('dob')}}" class ="form-control">
<br>
            <label for="">Email</label>
            <input type="text" name='email' value="{{old('email')}}" class ="form-control">
<br>
            <label for="">Mobile Number</label>
            <input type="text" name='phone' value="{{old('phone')}}" class ="form-control">
<br>
        
            <input type="submit" class="btn btn-primary" value="Add Student">
        </form>

    </body>


</html>
@endsection