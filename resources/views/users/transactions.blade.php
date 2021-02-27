@extends('layouts.users.app', ['title' => 'Transactions'])

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <!-- /.col -->
     @foreach ($transactions as $transaction)
     <div class="info-box mb-3 {{ $transaction->type == 'deposit' ? 'text-success' : 'text-danger'}}">
      <span class="info-box-icon"><i class="fas fa-exchange-alt"></i></span>
  
      <div class="info-box-content">
        <span class="info-box-text">{{ $transaction->type === 'deposit'? 'Deposit': 'Withdrawal' }}</span>
        <span class="info-box-number">$ {{ $transaction->amount }}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
     @endforeach
  </div>
</div>
<div class="row justify-content-center">
  {{ $transactions->links() }}
</div>
@endsection