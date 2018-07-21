
@extends('layouts.test')


@section('content')
Name - {{$name}} <br>
Alt - {{$alt}} <br>
Title - {{$title}} <br>
Path - {{$path}} <br>
<a href="/photos/{{$id}}/edit">change</a>
@endsection