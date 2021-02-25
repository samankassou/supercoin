@extends('layouts.users.app', ['title' => 'Transactions'])

@section('content')
<div class="col-md-4">
  <!-- /.col -->
   @foreach ($transactions as $transaction)
   <div class="info-box mb-3 {{ $transaction->type == 'deposit' ? 'bg-success' : 'bg-danger'}}">
    <span class="info-box-icon"><i class="fas fa-exchange-alt"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Transaction</span>
      <span class="info-box-number">$ {{ $transaction->amount }}</span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
   @endforeach
</div>
@endsection