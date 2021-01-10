@extends('layout')
@section('title')
    Committee opinions
@endsection
@section('img')
    url('img1/portfolio/fullsize/6.jpg')
@endsection
@section('head')
    CheckCommittee opinions
@endsection
@section('content')
    <table class="" border="2px;"BORDERCOLOR=#bbc7c4  align="center"cellpadding="10px;"cellspacing="10px;">
        <thead>
        <tr>
            <th scope="col"> Committee ID</th>
            <th scope="col"> Committee Name</th>
            <th scope="col">Committe Email</th>
            <th scope="col">Committe Type</th>
            <th scope="col">Committe Opinion</th>
            <th scope="col">Item Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($checkcommites as $checkcommittees)
            <tr>
                <td> {{$checkcommittees->id}} </td>
                <td> {{$checkcommittees->cname}} </td>
                <td> {{$checkcommittees->cemail}} </td>
                <td> {{$checkcommittees->ctype}} </td>
                <td> {{$checkcommittees->opnion}} </td>
                <td> {{$checkcommittees->itemname}} </td>
                <td><a class="btn btn-success" href="{{url('/edit',$checkcommittees->id)}}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{url('/delete',$checkcommittees->id)}}">Delete</a></td>
            </tr>
        </tbody>
       @endforeach

    </table>
    </br>
    <div class="clearfix">
        <a class="btn btn-primary float-middle" href="{{url('/examine')}}">Add opinion &rarr;</a>
    </div>
@endsection