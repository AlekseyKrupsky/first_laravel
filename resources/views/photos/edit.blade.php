@extends('layouts.test')

@section('content')

    <form method="pacth" action="/photos/{{$id}}">
        {{csrf_field()}}
        <label for=""><input type="text" name="name" value="{{$name}}"></label><br>
        <label for=""><input type="text" name="alt" value="{{$alt}}"></label><br>
        <label for=""><input type="text" name="title" value="{{$title}}"></label><br>
        <label for=""><input type="text" name="path" value="{{$path}}"></label><br>
        <label for=""><input type="submit" name="enter" value="Update"></label>
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