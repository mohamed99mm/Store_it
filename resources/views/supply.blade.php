@extends('layout')
@section('title')
    Order
@endsection
@section('img')
    url('img1/order3.jpg')
@endsection
@section('head')
    Order(Supply) Form
@endsection
@section('subhead')
    Hello user
@endsection
@section('content')
    <form action="{{url('/order/create')}}" method="post" style="margin: auto">
        {{csrf_field()}}
        <div class="div"> item name
            <input type="text" name="name" class="form-control"  placeholder="enter name">
        </div>
        <div class="div"> item quantity
            <input type="text" class="form-control"  name="quantity" placeholder="enter quantity">
        </div>
        <div class="div"> item unit
            <input type="text" class="form-control"  name="itemunit" placeholder="enter item unit">
        </div>
        <div class="div"> item price
            <input type="text" class="form-control"  name="itemprice" placeholder="enter item price">
        </div>
        <div class="div"> company name
            <input type="text" class="form-control"  name="companyname" placeholder="enter company name">
        </div>
        <div class="div"> location
            <input type="text" class="form-control"  name="location" placeholder="enter location">
        </div>
        <div class="div"> duration
            <input type="text" class="form-control"  name="duration" placeholder="enter duration">
        </div>
        <div class="div">
            <input type="submit" class="btn btn-primary btn-block" value="Order">
        </div>
    </form>
@endsection