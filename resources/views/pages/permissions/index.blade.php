@extends('layouts.master')

@section('title','Permission')

@section('content')
    <section class="content">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-12">
                   <div class="card">
                       <div class="card-header">
                           <div class="float-left">
                               <h3 class="m-0 text-dark">
                                   Permission
                               </h3>
                           </div>
                       </div>
                       <!-- /.card-header -->

                       <div class="card-body">
                           <table id="example1" class="table table-bordered table-striped">
                               <thead>
                               <tr>
                                   <th>Name</th>
                                   <th>Guard_name</th>
                                   <th>Created At</th>
                                   <th>Updated At</th>

                               </tr>
                               </thead>
                               <tbody>
                               @foreach($permissions as $permission)
                                   <tr>
                                       <td>{{ $permission['name'] }}</td>
                                       <td>{{ $permission['guard_name'] }}</td>
                                       <td>{{ $permission['created_at'] }}</td>
                                       <td>{{ $permission['updated_at'] }}</td>
                                   </tr>
                               @endforeach
                               </tbody>
                               <tfoot>
                               <tr>
                                   <th>Name</th>
                                   <th>Email</th>
                                   <th>Created At</th>
                                   <th>Updated At</th>
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
       </div>
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

