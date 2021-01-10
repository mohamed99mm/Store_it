@extends('layout')
@section('title')
    edit
@endsection
@section('heading')
    Edit Order item
@endsection
@section('content')
    <form action="{{url('/order/update',$order->id)}}" method="post" style="margin: auto">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="div"> item name
            <input type="text" name="name" class="form-control"  placeholder="enter name"value="{{$order->itemname}}">
        </div>
        <div class="div"> item quantity
            <input type="text" class="form-control"  name="quantity" placeholder="enter quantity"value="{{$order->itemquantity}}">
        </div>
        <div class="div"> item unit
            <input type="text" class="form-control"  name="itemunit" placeholder="enter item unit"value="{{$order->itemunit}}">
        </div>
        <div class="div"> item price
            <input type="text" class="form-control"  name="itemprice" placeholder="enter item price"value="{{$order->itemprice}}">
        </div>
        <div class="div"> company name
            <input type="text" class="form-control"  name="companyname" placeholder="enter company name"value="{{$order->companyname}}">
        </div>
        <div class="div"> location
            <input type="text" class="form-control"  name="location" placeholder="enter location"value="{{$order->location}}">
        </div>
        <div class="div"> duration
            <input type="text" class="form-control"  name="duration" placeholder="enter duration"value="{{$order->duration}}">
        </div>
        <div class="div">
            <input type="submit" class="btn btn-primary btn-block" value="Edit">
        </div>
@endsection
