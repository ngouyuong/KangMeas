@extends('layouts.master')
@section('title','Dashboard')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="">
                                @can('create')
                                    <a href='{{ route('users.create') }}' class="btn btn-sm btn-primary">
                                        <i class="nav-icon fas fa-user-plus"></i>
                                        Add User
                                    </a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user['name'] }}</td>
                                    <td>{{ $user['email'] }}</td>
                                    <td>{{ $user['created_at'] }}</td>
                                    <td>{{ $user['updated_at'] }}</td>
                                    <td>
                                        {{--                                        <a href="{{ route('test', [$user['id'], $user['name'],$user['email']]) }}">--}}
                                        {{--                                            <i class="fas fa-edit"></i>--}}
                                        {{--                                        </a>--}}

                                        {{--                                        <a href='{{ route('users.update', $user['id']) }}' class="btn btn-sm btn-primary">--}}
                                        {{--                                            <i class="far fa-edit"></i>--}}
                                        {{--                                        </a>--}}
                                        <form action="{{ route('users.delete', $user['id']) }}" method="POST"
                                              onsubmit="return confirm('Are you sure?');">
                                            @method('DELETE')
                                            @csrf
                                            @can('edit')
                                                <a href='{{ route('users.edit', $user['id']) }}'
                                                   class="btn btn-sm btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            @endcan
                                            @can('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            @endcan
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
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
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
