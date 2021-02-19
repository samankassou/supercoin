@extends('layouts.users.app', ['title' => 'Dashboard'])
@section('content')
    <!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
        <div class="inner">
            <h3>$ {{ auth()->user()->balance }}</h3>

            <p>balance</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
 </div>
    <!-- /.row -->
@endsection