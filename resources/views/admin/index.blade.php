@extends('admin.layouts.index')



@section('content')
    <div class="jumbotron">
        <h1>Goods</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
        <a class="btn btn-lg btn-primary" href="{{route('admin_goods')}}" role="button">Create and edit</a>
    </div>
    <div class="jumbotron">
        <h1>Photos</h1>
        <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser's viewport.</p>
        <a class="btn btn-lg btn-primary" href="{{route('admin_photos')}}" role="button">Create and edit</a>
    </div>
@endsection