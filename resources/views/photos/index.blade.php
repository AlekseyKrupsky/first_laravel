@extends('layouts.test')


@section('content')
<h2>All Photos</h2>

@foreach($photos as $photo)
    Name - {{$photo->name}}//// Path {{$photo->path}}<a href="/photos/id/{{$photo->id}}">Link</a> <br>
@endforeach


<a href="/photos/create">Create New</a>
    @endsection