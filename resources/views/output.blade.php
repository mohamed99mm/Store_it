@extends('layout1')
@section('title')
    show  borrowed items
@endsection
@section('img')
    url('img1/portfolio/fullsize/6.jpg')
@endsection
@section('heading')
    Show  Borrowed items
@endsection
@section('content')
<!--<h1>
    Show borrowed Items
</h1>-->
<table class="" border="2px;"BORDERCOLOR=#bbc7c4  align="center"cellpadding="10px;"cellspacing="10px;">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ItemName</th>
            <th scope="col">ItemQuantity</th>
            <th scope="col">PersonName</th>
            <th scope="col">PersonType</th>
            <th scope="col">Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($borrows as $borrow)
            <tr>
                <td> {{$borrow->id}} </td>
                <td> {{$borrow->itemname}} </td>
                <td> {{$borrow->itemquantity}} </td>
                <td> {{$borrow->personname}} </td>
                <td> {{$borrow->persontype}} </td>
                <td> {{$borrow->created_at}} </td>
                <td><a  class="btn btn-success" class="links"href="{{url('/borrow/edit',$borrow->id)}}">Edit</a></td>
                <td><a  class="btn btn-danger" class="links" href="{{url('/borrow/delete',$borrow->id)}}">Delete</a></td>
            </tr>
        </tbody>


    @endforeach
        </br>
    </br>

</table>
</br>
</br>
    <div class="links">
        <a href="{{url('/')}}"  class="btn btn-primary float-middle"> Home  </a>
        </br>
        </br>
        <a href="{{url('/borrow')}}"  class="btn btn-primary float-middle"> Add borrow items </a>
    </div>

@endsection