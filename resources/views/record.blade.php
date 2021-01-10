@extends('layout1')
@section('title')
    show  ordered items
@endsection
@section('img')
    url('img1/portfolio/fullsize/6.jpg')
@endsection
@section('heading')
    Show  Ordered items
@endsection
@section('content')
<!--<h1>
    Show Order details
</h1>-->
    <table style="color: #17a2b8" class="" border="2px;"BORDERCOLOR=#bbc7c4  align="center"cellpadding="10px;"cellspacing="10px;">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ItemName</th>
            <th scope="col">ItemQuantity</th>
            <th scope="col">ItemUnit</th>
            <th scope="col">ItemPrice</th>
            <th scope="col">TotalPrice</th>
            <th scope="col">CompanyName</th>
            <th scope="col">Duration</th>
            <th scope="col">Location</th>
            <th scope="col">Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td> {{$order->id}} </td>
                <td> {{$order->itemname}} </td>
                <td> {{$order->itemquantity}} </td>
                <td> {{$order->itemunit}} </td>
                <td> {{$order->itemprice}} </td>
                <td> {{$order->totalprice}} </td>
                <td> {{$order->companyname}} </td>
                <td> {{$order->duration}}  month</td>
                <td> {{$order->location}} </td>
                <td> {{$order->created_at}} </td>
                <td><a class="btn btn-success" class="links" href="{{url('/order/edit',$order->id)}}">Edit</a></td>
                <td><a class="btn btn-danger" class="links" href="{{url('/order/delete',$order->id)}}">Delete</a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</form>
</br>

    <div class="links">
        <a href="{{url('/')}}" class="btn btn-primary float-middle" class="links" > Home  </a>
        </br>

        <a href="{{url('/suply')}}" class="btn btn-primary float-middle" class="links" > Do you want to order more items item?  </a>

    </div>

@endsection