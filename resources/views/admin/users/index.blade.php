@extends('layouts.admins.app', ['title' => 'Users'])
@section('styles')
<link rel="stylesheet" href="{{ asset('templates/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('templates/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('templates/dashboard/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<link rel="stylesheet" href="{{ asset('templates/dashboard/plugins/toastr/toastr.min.css') }}">
@endsection
@section('content')
<div class="panel">
    <div class="panel-heading d-flex justify-content-end align-items-center mb-4">
        <a href="{{ route('admins.users.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> 
            Add User
        </a>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table table-striped data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
     </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('templates/dashboard/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('templates/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('templates/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('templates/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('templates/dashboard/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('templates/dashboard/plugins/toastr/toastr.min.js') }}"></script>
<script type="text/javascript">
   function deleteUser(id)
   {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "DELETE",
                url: "/admin/users/destroy/"+id,
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id
                },
                success: function (data) {
                    $('.data-table').DataTable().ajax.reload();
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        timer: 5000,
                        showConfirmButton: false,
                        icon: 'success',
                        title: data.message
                    })
                }         
            });
        }
        })
   }

    $(function () {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          responsive: true,
          ajax: "{{ route('admins.users.list') }}",
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