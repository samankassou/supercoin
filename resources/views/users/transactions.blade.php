@extends('layouts.users.app', ['title' => 'Transactions'])

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <!-- /.col -->
     @foreach ($transactions as $transaction)
     <div class="info-box mb-3 {{ $transaction->type == 'deposit' ? 'text-success' : 'text-danger'}}">
      <span class="info-box-icon"><i class="fas fa-exchange-alt"></i></span>
  
      <div class="info-box-content">
        <div class="row justify-content-between">
          <span class="info-box-text">
            {{ $transaction->type === 'deposit'? 'Deposit': 'Withdrawal' }}
          </span>
          <span class="text-sm">{{ $transaction->created_at->format('d M Y, H:i:s') }}</span>
        </div>
        <div class="row justify-content-between">
          <span class="info-box-number">$ {{ $transaction->amount }}</span>
          <span class="info-box-text">{{ $transaction->status }}</span>
        </div>
        @if ($transaction->status === "processing")
            <div class="row justify-content-end">
              <a class="btn btn-danger btn-xs" href="#">Cancel</a>
            </div>
        @endif
        
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