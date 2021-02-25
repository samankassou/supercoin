@extends('layouts.users.app', ['title' => 'Withdrawals'])

@section('content')
<div class="col-md-4">
  <!-- /.col -->
   @foreach ($withdrawals as $withdrawal)
   <div class="info-box mb-3 bg-danger">
    <span class="info-box-icon"><i class="far fa-exchange-alt"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Withdrawal</span>
      <span class="info-box-number">$ {{ $withdrawal->amount }}</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
   @endforeach
</div>
@endsection