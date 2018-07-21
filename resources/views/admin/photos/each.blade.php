@extends('admin.layouts.index')

@section('content')

    ID - {{$photo->id}} <br>
    Name - {{$photo->name}} <br>
    Alt - {{$photo->alt}} <br>
    Title - {{$photo->title}} <br>
    Icon path - {{$photo->path}} <br>
    <a href="{{route('admin_photos').'/edit/'.$photo->id}}">Edit this</a>
@endsection