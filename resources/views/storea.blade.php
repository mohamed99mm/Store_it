@extends('layout')
@section('title')
     ADD
@endsection
@section('img')
    url('img1/store1.jpg')
@endsection
@section('head')
    Add Item Form
@endsection
@section('subhead')
    Hello
@endsection
@section('content')
    <form action="{{url('/a/create')}}" method="post" style="margin: auto">
        {{csrf_field()}}
        <div class="div"> item name
            <input type="text" name="name" class="form-control"  placeholder="enter name">
        </div>
        <div class="div"> item quantity
            <input type="text" class="form-control"  name="quantity" placeholder="enter quantity">
        </div>
        <div class="div"> item price
            <input type="text" class="form-control"  name="price" placeholder="enter price">
        </div>
        <div class="div"> item discription
            <input type="text" class="form-control"  name="discription" placeholder="enter discription">
        </div>
        <div class="div"> item status
            <input type="text" class="form-control"  name="status" placeholder="enter status">
        </div>
        <div class="div">
            <input type="submit" class="btn btn-primary btn-block" value="Add">
        </div>
    </form>
@endsection
