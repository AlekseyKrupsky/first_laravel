@extends('admin.layouts.index')

@section('content')

    @if(count($goods)>0)
    <table>
        <tr>
            <td><b> Name</b></td>
            <td><b>Short Description</b></td>
            <td><b>View</b></td>
            <td><b>Edit</b></td>
        </tr>
        @foreach($goods as $good)

            <tr>
                <td>{{$good->name}}</td>
                <td>{{$good->shop_description}}</td>
                <td><a href="{{route('admin_goods').'/show/'.$good->id}}">Show link</a> </td>
                <td><a href="{{route('admin_goods').'/edit/'.$good->id}}">Edit link</a></td>
            </tr>
        @endforeach
    </table>
        @endif

    <a href="{{route('good_create')}}">Add new good</a>

@endsection