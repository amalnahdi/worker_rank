@extends('layouts.app')

@section('child')
hello world

<ul>

    <li>{{$users->id}}</li>
    <li>{{$users->name}}</li>
    <li>{{$users->email}}</li>


</ul>

@endsection