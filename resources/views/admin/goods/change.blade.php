@extends('admin.layouts.index')

@section('content')
    <h3>Edit good</h3>

    <form method="post" action="/admin/goods/{{$good->id}}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        Name <br><input type="text" name="name" value="{{$good->name}}"> <br>
        Short description  <br> <input type="text" name="shop_description" value="{{$good->shop_description}}"><br>
        Description <br><textarea name="description" id="" cols="60" rows="5">{{$good->description}}</textarea><br>
        Icon <br><input type="text" name="icon" value="{{$good->icon}}"><br>
        <input type="submit" value="Save">
    </form>

@endsection