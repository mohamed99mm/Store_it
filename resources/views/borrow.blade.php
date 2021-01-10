@extends('layout')
@section('title')
    Borrow
@endsection
@section('img')
    url('img1/borrow.jpg')
@endsection
@section('head')
    Borrow Form
@endsection
@section('subhead')
    Read the Form First
@endsection
@section('content')
    <form action="{{url('/borrow/create')}}" method="post" style="margin: auto">
        {{csrf_field()}}
        <div class="div"> item name
            <input type="text" name="name" class="form-control"  placeholder="enter name">
        </div>
        <div class="div"> item quantity
            <input type="text" class="form-control"  name="quantity" placeholder="enter quantity">
        </div>
        <div class="div"> Person name
            <input type="text" class="form-control"  name="pname" placeholder="enter person name">
        </div>
        <div class="div"> Person type
            <input type="text" class="form-control"  name="ptype" placeholder="enter person type">
        </div>
        <div class="div">
            <input type="submit" class="btn btn-primary btn-block" value="Borrow">
        </div>
    </form>
    @endsection