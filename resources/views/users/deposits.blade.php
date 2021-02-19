@extends('layouts.users.app', ['title' => 'Deposits'])

@section('content')
<div class="col-md-4">
  <!-- /.col -->
   @foreach ($deposits as $deposit)
   <div class="info-box mb-3 bg-success">
    <span class="info-box-icon"><i class="far fa-upload"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Deposit</span>
      <span class="info-box-number">$ {{ $deposit->amount }}</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
   @endforeach
</div>
@endsection