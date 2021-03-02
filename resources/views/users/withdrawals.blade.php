@extends('layouts.users.app', ['title' => 'Withdrawals'])

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="row mb-4 justify-content-end">
        <button class="btn btn-success btn-sm">New</button>
      </div>
      <!-- /.col -->
       @foreach ($withdrawals as $withdrawal)
       <div class="info-box mb-3 text-danger">
        <span class="info-box-icon"><i class="fas fa-exchange-alt"></i></span>
    
        <div class="info-box-content">
          <div class="row justify-content-between">
            <span class="info-box-text">
              Withdrawal
            </span>
            <span class="text-sm">{{ $withdrawal->created_at->format('d M Y, H:i:s') }}</span>
          </div>
          <div class="row justify-content-between">
            <span class="info-box-number">$ {{ $withdrawal->amount }}</span>
            <span class="info-box-text">{{ $withdrawal->status }}</span>
          </div>
          @if ($withdrawal->status === "processing")
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
    {{ $withdrawals->links() }}
  </div>
@endsection