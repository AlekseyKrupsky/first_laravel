@extends('admin.layouts.index')

@section('content')
<h3>Adding new photo</h3>
<form action="/admin/photos/store" method="post">

    {{csrf_field()}}
    Name <br><input type="text" name="name"> <br>
    Alt text  <br> <input type="text" name="alt"><br>
    Title <br><input type="text" name="title"><br>
    Icon path <br><input type="text" name="path"><br>
    <input type="submit" value="Add new">

</form>

@endsection