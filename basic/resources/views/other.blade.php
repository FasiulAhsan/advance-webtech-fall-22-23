@extends('layouts.app')
@section('content')
<h1>
    Passing Data to View [with function]

</h1>
<ul>
    {{$name}}<br>
    {{$profession}}<br>
    {{$address}}
</ul>
<div>
    @foreach($ages as $person=>$age)
    {{$person}} {{$age}} <br>
    @endforeach
</div>


@endsection
       