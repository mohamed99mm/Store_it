@extends('layout1')

@section('content')

    <form action="{{url('/borrow/update',$borrow->id)}}" method="post" style="margin: auto">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="div"> item name
            <input type="text" name="name" class="form-control"  placeholder="enter name"value="{{$borrow->itemname}}">
        </div>
        <div class="div"> item quantity
            <input type="text" class="form-control"  name="quantity" placeholder="enter quantity"value="{{$borrow->itemquantity}}">
        </div>
        <div class="div"> Person name
            <input type="text" class="form-control"  name="pname" placeholder="enter person name"value="{{$borrow->personname}}">
        </div>
        <div class="div"> Person type
            <input type="text" class="form-control"  name="ptype" placeholder="enter person type"value="{{$borrow->persontype}}">
        </div>
        <div class="div">
            <input type="submit" class="btn btn-primary btn-block" value="Edit">
        </div>
    </form>
@endsection
