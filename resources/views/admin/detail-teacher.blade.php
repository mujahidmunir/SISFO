@extends('layouts.admin-master')
@section('title')
Detail teacher
@endsection
@section('header-name')
Detail Teacher
@endsection


@section('content')
<div class="row">
    <div class="col-lg-4 col-md-12 col-xs-12 border  p-2 text-center">
   <img src="{{URL::to('images/teacher.jpg')}}" class="" alt="...">
    </div>
    <div class="col-lg-8 col-md-12 col-xs-12 border  p-2">.col-6<br>
        <div class="row justify-content-md-center">
            <div class="col col-lg-2 bg-light p-2">Nama</div>
            <div class="col-md-auto bg-light p-2">:</div>
            <div class="col col-lg-2 bg-light p-2">Mujahid Munir</div>
        </div>




    </div>
</div>

@endsection