@extends('layouts.test')

@section('content')

    <form action="/goods" method="post">
        {{csrf_field()}}
    <label for=""><input type="text" name="name" placeholder="Name"></label><br>
    <label for=""><input type="text" name="shop_description" placeholder="Short description"></label><br>
    <label for=""><input type="text" name="description" placeholder="Description"></label><br>
    <label for=""><input type="text" name="icon" placeholder="icon"></label><br>
    <label for=""><input type="submit" name="enter" value="Create new"></label>
    </form>
{{--{{csrf_token()}}--}}

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif




    @endsection