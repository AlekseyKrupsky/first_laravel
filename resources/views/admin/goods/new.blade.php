@extends('admin.layouts.index')

@section('content')
<h3>Adding new good</h3>



<form action="/admin/goods/store" method="post">

    {{csrf_field()}}
    Name <br><input type="text" name="name"> <br>
    Short description  <br> <input type="text" name="shop_description"><br>
    Description <br><textarea name="description" id="" cols="60" rows="5"></textarea><br>
    Icon <br><input type="text" name="icon"><br>
    <input type="submit" value="Add new">

</form>


@if(count($errors)>0)
<div class="alert alert-danger">
    <ul>
@foreach($errors->all() as $error)

  <li> {{$error}}</li>

@endforeach
    </ul>
</div>
    @endif

@endsection