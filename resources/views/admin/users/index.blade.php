@extends('layouts.admins.app', ['title' => 'Users'])
@section('content')
    <!-- Small boxes (Stat box) -->
<div class="row">
    <table class="table table-striped data-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex">
                        <a href="javascript:void(0)" class="view btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                        <a href="javascript:void(0)" class="edit btn btn-warning btn-xs"><i class="fas fa-pen"></i></a>
                        <a href="javascript:void(0)" class="edit btn btn-danger btn-xs"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
 </div>
    <!-- /.row -->
@endsection
@section('scripts')
<script type="text/javascript">
    $(function () {
      
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('admins.users.index') }}",
          columns: [
              {data: 'name', name: 'name'},
              {data: 'username', name: 'username'},
              {data: 'email', name: 'email'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
      
    });
  </script>
@endsection