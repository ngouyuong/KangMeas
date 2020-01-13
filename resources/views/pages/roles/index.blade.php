@extends('layouts.master')

@section('title','Roles')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h3 class="m-0 text-dark">
                                Roles
                            </h3>
                        </div>
                        <div class="float-right">

                            <a href='{{ route('roles.create') }}' class="btn btn-sm btn-primary">
                                <i class="nav-icon fas fas fa-user-tag"></i>
                                Add New Role
                            </a>

                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Guard_name</th>
                                <th>Permission</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>


                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role['name'] }}</td>
                                    <td>{{ $role['guard_name'] }}</td>
                                    <td>
                                        @foreach($role['permissions'] as $permission)
                                            <span class="badge badge-pill badge-success">{{ $permission->name }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $role['created_at'] }}</td>
                                    <td>{{ $role['updated_at'] }}</td>
                                    <td>
                                        <form action="{{ route('roles.delete', $role['id']) }}" method="POST"
                                              onsubmit="return confirm('Are you sure?');">
                                            @method('DELETE')
                                            @csrf
                                            <a href='{{ route('roles.edit', $role['id']) }}'
                                               class="btn btn-sm btn-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-danger delete_user">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Guard_name</th>
                                <th>Permission</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('script')

    <script>
        $(function () {
            $("#example1").DataTable({
                "paging": true,
                "lengthMenu": [25, 50, 75, 100],
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection

