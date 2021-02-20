@extends('layout1')
@section('title')
    show  Added items
@endsection
@section('img')
    url('img1/portfolio/fullsize/6.jpg')
@endsection
@section('heading')
    Show  Added items
@endsection
@section('content')
    <!--<h1>show  Added items</h1>-->
    <table class="" border="2px;"BORDERCOLOR=#bbc7c4  align="center"cellpadding="10px;"cellspacing="10px;">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">price</th>
            <th scope="col">discription</th>
            <th scope="col">status</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
@foreach($items as $item)
    <tr>
        <td> {{$item->id}} </td>
        <td> {{$item->name}} </td>
        <td> {{$item->quantity}} </td>
        <td> {{$item->price}} </td>
        <td> {{$item->discription}} </td>
        <td> {{$item->status}} </td>
        <td><a  class="btn btn-success" href="{{url('/a/edit',$item->id)}}">Edit</a></td>
        <td><a  class="btn btn-danger" href="{{url('/a/delete',$item->id)}}">Delete</a></td>
    </tr>
        </tbody>
    @endforeach
    </table>

<div class="links">
    <a href="{{url('/s')}}"  class="btn btn-primary float-middle" class="links"> Add Item  </a>
</br>
</br>
    <a href="{{url('/')}}" class="btn btn-primary float-middle"class="links"> Home  </a>
</div>
   @endsection
