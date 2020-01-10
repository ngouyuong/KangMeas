@extends('layouts.master')
@section('title','Dashboard')

@section('content')
    <div class="card ">
        @include('pages.face.nav')
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade  " id="request" role="tabpanel" aria-labelledby="request-tab">
                    @include('pages.face.request')
                </div>
                <div class="tab-pane fade show active" id="register" role="tabpanel" aria-labelledby="register-tab">
                    @include('pages.face.register')
                </div>
                <div class="tab-pane fade" id="status" role="tabpanel" aria-labelledby="status-tab">
                    c
                </div>
                <div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report-tab">
                    d
                </div>
                <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab">
                    e
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('.img-input').on('click', function () {
            $('.image').trigger('click')
        })
        $('[data-toggle="datepicker"]').datepicker();
    </script>

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

