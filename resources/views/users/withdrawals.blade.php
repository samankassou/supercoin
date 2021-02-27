@extends('layouts.users.app', ['title' => 'Withdrawals'])

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <!-- /.col -->
     @foreach ($withdrawals as $withdrawal)
     <div class="info-box mb-3 text-danger">
      <span class="info-box-icon"><i class="fas fa-exchange-alt"></i></span>
  
      <div class="info-box-content">
        <span class="info-box-text">Withdrawal</span>
        <span class="info-box-number">$ {{ $withdrawal->amount }}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
     @endforeach
  </div>
</div>
<div class="row justify-content-center">
  {{ $withdrawals->links() }}
</div>
@endsection