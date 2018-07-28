@extends('layouts.test')




@section('content')
    <h2>{{$title}}</h2>
    <ul>
    @foreach($goods as $good)
       <li> {{$good->name}} --- {{$good->description}}
           <a href="{{route('goods').'/'.$good->id}}">More information</a>
       </li>
        @endforeach
    </ul>
    {{--@endsection--}}
@endsection