@extends('layouts.admins.app', ['title' => 'User'])

@section('content')
<div class="row">
    <div class="col-md-12 cc_cursor">
      <!-- Widget: user widget style 2 -->
      <div class="card card-widget widget-user-2 shadow-sm">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-warning cc_cursor">
          <div class="widget-user-image">
            <img class="img-circle elevation-2" src="{{ asset('templates/dashboard/dist/img/user7-128x128.jpg') }}" alt="User Avatar">
          </div>
          <!-- /.widget-user-image -->
          <h3 class="widget-user-username">{{ $user->name }}</h3>
          <h5 class="widget-user-desc">{{ $user->role }}</h5>
        </div>
        <div class="card-footer p-0">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="#" class="nav-link">
                Projects <span class="float-right badge bg-primary">31</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                Tasks <span class="float-right badge bg-info">5</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                Completed Projects <span class="float-right badge bg-success">12</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                Followers <span class="float-right badge bg-danger">842</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- /.widget-user -->
    </div>
  </div>
@endsection