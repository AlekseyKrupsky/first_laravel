@extends('admin.layouts.index')

@section('content')

ID - {{$good->id}} <br>
Name - {{$good->name}} <br>
Short description - {{$good->shop_description}} <br>
Description - {{$good->description}} <br>
Icon path - {{$good->icon}} <br>
<a href="{{route('admin_goods').'/edit/'.$good->id}}">Edit this</a>
@endsection