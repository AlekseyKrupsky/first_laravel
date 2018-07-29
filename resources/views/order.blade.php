@extends('admin.layouts.index')
@section('content')
    Вы собираетесь заказать товар "{{$good->name}}"
    <form action="{{route('order',$good->id)}}" method="post">
        {{csrf_field()}}
        <input type="email" name="email" value="{{$email}}"><br>
        <input type="submit" value="Заказать">
    </form>
@endsection