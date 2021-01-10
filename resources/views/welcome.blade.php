@extends('layout')
@section('title')
    welcome
@endsection
@section('img')url('img1/bg-masthead.jpg')@endsection
@section('head')
   Store it system!!!
@endsection
@section('subhead')
    Oh yeah
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                           hello new User Welcome in store it System
                        </h2>
                        <h3 class="post-subtitle">
                            the system contain some functions
                        </h3>
                    </a>
                <hr>
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                         functions
                        </h2>
                        <h3 class="post-subtitle">
                            Add items
                        </h3>
                        <h3 class="post-subtitle">
                            Check Committee opnions
                        </h3>
                        <h3 class="post-subtitle">
                            and other Functions
                        </h3>
                    </a>

                </div>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                functions realated to Items
                            </h2>
                <!-- Pager -->
                    <div class="clearfix">
                        <a class="btn btn-primary float-middle" href="{{url('/s')}}">Add Items &rarr;</a>
                    </div>
                    <br>
                    <div class="clearfix">
                        <a class="btn btn-primary float-lg-left" href="{{url('/a/show')}}">Show Item &rarr;</a>
                    </div>
                        </a>
                    </div>
                    <br>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                functions realated to opinion
                            </h2>
                    <div class="clearfix">
                        <a class="btn btn-primary float-middle" href="{{url('/examine')}}">Add opinion &rarr;</a>
                    </div>
                    <br>
                    <div class="clearfix">
                        <a class="btn btn-primary float-middle" href="{{url('/show')}}">Show opinions &rarr;</a>
                    </div>
                        </a>
                        </div>
                    <br>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                functions realated to  Borrowed Items
                            </h2>
                    <div class="clearfix">
                        <a class="btn btn-primary float-middle" href="{{url('/borrow')}}">Borrow Items &rarr;</a>
                    </div>
                    <br>
                    <div class="clearfix">
                        <a class="btn btn-primary float-middle" href="{{url('/borrow/output')}}"> Show Borrowed Items &rarr;</a>
                    </div>
                        </a>
                    </div>
                    <br>
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">
                                functions realated to Orderd Items
                            </h2>
                    <div class="clearfix">
                        <a class="btn btn-primary float-middle" href="{{url('/suply')}}">Order Items &rarr;</a>
                    </div>
                    <br>
                    <div class="clearfix">
                        <a class="btn btn-primary float-middle" href="{{url('/order/record')}}"> Show Orderd  Items &rarr;</a>
                    </div>
                        </a>
                    </div>

            </div>
        </div>
    </div>

    <hr>
@endsection

