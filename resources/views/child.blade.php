@extends('layouts.app2')

@section('child')
hello 

<ul>

    <li>{{$users->id}}</li>
    <li>{{$users->name}}</li>
    <li>{{$users->email}}</li>


</ul>

@endsection