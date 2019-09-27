@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
        <div class="box">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">User Detail</h3>
                </div>
            </div>
            <div class="box-body">
                <table class="table stripe">
                    <tr>
                        <td>User ID</td>
                        <td>:</td>
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>

    <div class="col-md-6">
        <div class="box">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add Role</h3>
                </div>
            </div>
            <div class="box-body">
                <form action="{{ route('admin.user-roles.update', ['id' => $user->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <select class="form-control" name="role">
                            @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="box">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Role User</h3>
                </div>
            </div>
            <div class="box-body">
                <table class="table stripe">
                    @foreach($user->userRoles as $role)
                        <tr>
                            <td>{{ $role->role_name }}</td>
                            <td>
                                <form action="{{ route('admin.user-roles.destroy', [
                                'id' => $user->id,
                                 'role' => $role
                                 ]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-block">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

@push('push-footer')
<script>
    $(document).ready(function(){
        // $("form").on('click', function(e){
        //     e.preventDefault();
        //     Swal.fire({
        //         title: 'Peringatan ?',
        //         text: "Apakah anda benar ingin melakukan ini, setelah menjalankan aksi ini maka data tidak bisa di kembalikan.",
        //         type: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Submit'
        //     }).then((result) => {
        //         if (!result.value) {
        //             Swal.fire(
        //                 'Dibatalkan',
        //                 'Anda telah membatalkan aksi ini.',
        //             )
        //         } else {
        //             $(this).closest('form').submit();
        //         }
        //     })
        // });
    });
</script>

@endpush