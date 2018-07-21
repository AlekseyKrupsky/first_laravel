@extends('admin.layouts.index')

@section('content')
    @if(count($photos)>0)
        <table>
            <tr>
                <td><b>Name</b></td>
                <td><b>Alt text</b></td>
                <td><b>View</b></td>
                <td><b>Edit</b></td>
            </tr>
            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->name}}</td>
                    <td>{{$photo->alt}}</td>
                    <td><a href="{{route('admin_photos').'/show/'.$photo->id}}">Show link</a> </td>
                    <td><a href="{{route('admin_photos').'/edit/'.$photo->id}}">Edit link</a></td>
                </tr>
            @endforeach
        </table>
    @endif
    <a href="{{route('photo_create')}}">Add new photo</a>
@endsection