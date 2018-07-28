@extends('admin.layouts.index')

@section('content')

    @if(count($goods)>0)
    <table>
        <tr>
            <td><b> Name</b></td>
            <td><b>Short Description</b></td>
            <td><b>View</b></td>
            <td><b>Edit</b></td>
            <td><b>Delete</b></td>
        </tr>
        @foreach($goods as $good)

            <tr>
                <td>{{$good->name}}</td>
                <td>{{$good->shop_description}}</td>
                <td><a href="{{route('admin_goods').'/show/'.$good->id}}">Show link</a> </td>
                <td><a href="{{route('admin_goods').'/edit/'.$good->id}}">Edit link</a></td>
                <td>
                    <form action="/admin/goods/{{$good->id}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input type="submit" value="delete">
                    </form></td>
            </tr>
        @endforeach
    </table>
        @endif

    <a href="{{route('good_create')}}">Add new good</a>

@endsection