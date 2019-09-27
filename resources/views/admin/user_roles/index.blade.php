@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
        <div class="box">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">User Role</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="data-table" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th># ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <ul>
                                @foreach($user->userRoles as $role)
                                    <li>{{ $role->role_name }}</li>
                                @endforeach
                                </ul>
                            </td>
                            <td><a href="{{ route('admin.user-roles.edit', ['id' => $user->id]) }}" class="btn btn-info">Edit</a> </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
@endsection

@push('push-head')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@2.4.10/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@push('push-footer')

    <!-- DataTables -->
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@2.4.10/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@2.4.10/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
                    <script>
                        $(function () {
                            $('#data-table').DataTable({
                                // 'paging'      : true,
                                // 'lengthChange': true,
                                // 'searching'   : true,
                                // 'ordering'    : true,
                                // 'info'        : true,
                                // 'autoWidth'   : true
                                'pageLength'    : 5
                            })
                        })
                    </script>
@endpush
