
    <form action="{{url('/update',$checkcommites->id)}}" method="post" style="margin: auto">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="div"> Committee name
            <input type="text" name="cname" class="form-control"  placeholder="Enter Name" value="{{$checkcommites->cname}}">
        </div>
        <div class="div"> committee type
            <input type="text"  name="ctype" class="form-control"   placeholder="Enter Type"value="{{$checkcommites->ctype}}">
        </div>
        <div class="div"> Commitee email
            <input type="email"  name="cemail" class="form-control"  placeholder="Enter Email" value="{{$checkcommites->cemail}}">
        </div>
        <div class="div"> Commitee opinion
            <input type="text"  name="opinion" class="form-control"  placeholder="Enter opinion" value="{{$checkcommites->opnion}}">
        </div>
        <div class="div"> Item  Name
            <input type="text"  name="itemname" class="form-control"  placeholder="Enter Item Name " value="{{$checkcommites->itemname}}">
        </div>
        <div class="div">
            <input type="submit" class="btn btn-primary btn-block" value="Update">
        </div>
    </form>
