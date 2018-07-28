@extends('admin.layouts.index')

@section('content')

ID - {{$good->id}} <br>
Name - {{$good->name}} <br>
Short description - {{$good->shop_description}} <br>
Description - {{$good->description}} <br>
Icon path - {{$good->icon}} <br>
<a href="{{route('admin_goods').'/edit/'.$good->id}}">Edit this</a>

<h2>Photos</h2>

    @foreach($good->photos as $photo)
        {{$photo->path}} <br>
    @endforeach


    <h2>Comments</h2>
    <ul>
        @foreach($good->comments as $comment)
         <li>  {{$comment->text}}
             <form action="{{route('com_del',$comment->id)}}" method="post">
                 {{csrf_field()}}
                 {{method_field('DELETE')}}
                 <input type="submit" value="Delete bad comment">
             </form></li>
        @endforeach
    </ul>


    <form action="/admin/goods/comment/{{$good->id}}" method="post">
        {{csrf_field()}}
        <input type="text" name="text" placeholder="Enter comment">
        <input type="submit" value="Add comment">
    </form>

    <h2>Add new address</h2>
    <form action="/admin/goods/address/{{$good->id}}" method="post">
        {{csrf_field()}}
        <input type="text" name="address" placeholder="Enter address">
        <input type="submit" value="Add">
    </form>

    <h2>Available addresses</h2>
    <ul>
        @foreach($good->addresses as $address)
            <li>{{$address->address}}<form action="{{route('add_del',$address->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete address">
                </form>
            </li>

        @endforeach
    </ul>
@endsection