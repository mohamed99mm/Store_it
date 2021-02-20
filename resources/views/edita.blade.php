@extends('layout1')

@section('content')
    <form action="{{url('/a/update',$item->id)}}" method="post" style="margin: auto">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="div"> item name
            <input type="text" name="name" class="form-control"  placeholder="enter name"value="{{$item->name}}">
        </div>
        <div class="div"> item quantity
            <input type="text" class="form-control"  name="quantity" placeholder="enter quantity"value="{{$item->quantity}}">
        </div>
        <div class="div"> item price
            <input type="text" class="form-control"  name="price" placeholder="enter price"value="{{$item->price}}">
        </div>
        <div class="div"> item discription
            <input type="text" class="form-control"  name="discription" placeholder="enter discription"value="{{$item->discription}}">
        </div>
        <div class="div"> item status
            <input type="text" class="form-control"  name="status" placeholder="enter status"value="{{$item->status}}">
        </div>
        <div class="div">
            <input type="submit" class="btn btn-primary btn-block" value="Update">
        </div>
</form>
@endsection
