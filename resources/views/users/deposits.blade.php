@extends('layouts.users.app', ['title' => 'Deposits'])

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <!-- /.col -->
     @foreach ($deposits as $deposit)
     <div class="info-box mb-3 text-success">
      <span class="info-box-icon"><i class="fas fa-exchange-alt"></i></span>
  
      <div class="info-box-content">
        <span class="info-box-text">Deposit</span>
        <span class="info-box-number">$ {{ $deposit->amount }}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
     @endforeach
  </div>
</div>
<div class="row justify-content-center">
  {{ $deposits->links() }}
</div>
@endsection