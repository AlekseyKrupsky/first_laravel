@extends('layouts.test')

{{$title}}


@section('content')
    <ul>
    @foreach($goods as $good)
       <li> {{$good->name}} --- {{$good->description}}</li>
        @endforeach
    </ul>
    {{--@endsection--}}
@endsection