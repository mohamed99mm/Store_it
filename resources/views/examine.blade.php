@extends('layout')
@section('title')
    Examine
@endsection
@section('img')
    url('img1/portfolio/fullsize/6.jpg')
@endsection
@section('head')
    Examine Form
@endsection
@section('subhead')
    Hello
@endsection
@section('content')
    <form action="{{url('/create')}}" method="post" style="margin: auto">
        {{csrf_field()}}
        <div class="div"> Committee name
            <input type="text" name="cname" class="form-control"  placeholder="Enter Name">
        </div>
        <div class="div"> committee type
            <input type="text"  name="ctype" class="form-control"   placeholder="Enter Type">
        </div>
        <div class="div"> Commitee email
            <input type="email"  name="cemail" class="form-control"  placeholder="Enter Email">
        </div>
        <div class="div"> Commitee opinion
            <input type="text"  name="opinion" class="form-control"  placeholder="Enter opinion">
        </div>
        <div class="div"> Item  Name
            <input type="text"  name="itemname" class="form-control"  placeholder="Enter Item Name ">
        </div>
        <div class="div">
            <input type="submit" class="btn btn-primary btn-block" value="Add">
        </div>
    </form>
@endsection
