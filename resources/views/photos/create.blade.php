@extends('layouts.test')

@section('content')

    <form action="/photos" method="post">
        {{csrf_field()}}
        <label for=""><input type="text" name="name" placeholder="Name"></label><br>
        <label for=""><input type="text" name="alt" placeholder="Alt"></label><br>
        <label for=""><input type="text" name="title" placeholder="Title"></label><br>
        <label for=""><input type="text" name="path" placeholder="Path"></label><br>
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