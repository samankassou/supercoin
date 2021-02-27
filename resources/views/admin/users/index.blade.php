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
                <tr id="{{ $user->id }}">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="d-flex">
                        <a href="{{ route('admins.users.show', $user->id) }}" class="view btn btn-primary btn-xs"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('admins.users.edit', $user->id) }}" class="edit btn btn-warning btn-xs"><i class="fas fa-pen"></i></a>
                        <button href="" onclick="deleteUser({{ $user->id }})" class="edit btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
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
    function deleteUser(id)
    {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $.ajax(
            {
                url: "users/delete/"+id,
                type: 'delete', // replaced from put
                dataType: "JSON",
                data: {
                    "id": id // method and token not needed in data
                },
                success: function (response)
                {
                    //$('.alert').removeClass('hide');
                    
                    
                    $("#"+id).fadeOut(500);
                    console.log(response); // see the reponse sent

                    // Swal.fire(
                    // 'Remind!',
                    // 'Company deleted successfully!',
                    // 'success'
                    // )
                },
                error: function(xhr) {
                console.log(xhr.responseText); // this line will save you tons of hours while debugging
                // do something here because of error
            }
        });
    }

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