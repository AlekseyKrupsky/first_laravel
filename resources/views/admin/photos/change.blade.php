@extends('admin.layouts.index')

@section('content')
    <h3>Edit photo</h3>
    <form  method="post">
        {{csrf_field()}}
        Name <br><input type="text" name="name" value="{{$photo->name}}"> <br>
        Alt text  <br> <input type="text" name="alt" value="{{$photo->alt}}"><br>
        Title <br><input type="text" name="title" value="{{$photo->title}}"><br>
        Icon path <br><input type="text" name="path" value="{{$photo->path}}"><br>
        <input type="submit" value="Save">
    </form>

@endsection