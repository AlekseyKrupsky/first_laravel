@extends('admin.layouts.index')

@section('content')

    ID - {{$good->id}} <br>
    Name - {{$good->name}} <br>
    Short description - {{$good->shop_description}} <br>
    Description - {{$good->description}} <br>
    Icon path - {{$good->icon}} <br>

    <h2>Photos</h2>
    @if(count($good->photos)>0)
    @foreach($good->photos as $photo)
        {{$photo->path}} <br>
    @endforeach
@else <h4>No photos</h4>
        @endif

    <h2>Comments</h2>
    @if(count($good->comments)>0)
    <ul>
        @foreach($good->comments as $comment)
            <li>  {{$comment->text}}</li>
        @endforeach
    </ul>

    @else
        <h4>No comments</h4>
    @endif


    <form action="{{route('comment',$good->id)}}" method="post">
        {{csrf_field()}}
        <input type="text" name="text" placeholder="Enter comment">
        <input type="submit" value="Add comment">
    </form>


    @if(count($errors)>0)

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>Available addresses</h2>
    @if(count($good->addresses)>0)
    <ul>
        @foreach($good->addresses as $address)
            <li>{{$address->address}}</li>
        @endforeach
    </ul>
        @else <h4>No addresses</h4>
    @endif

@endsection