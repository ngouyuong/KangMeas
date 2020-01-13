<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin | @yield('title')</title>
    @include('partials.css')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    @include('partials.navbar')

    @include('partials.sidebar')
    <br>
    <div class="content-wrapper">
{{--                <div class="content-header">--}}
{{--                    <div class="container-fluid">--}}
{{--                        <div class="row mb-2">--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <h1 class="m-0 text-dark">Dashboard v2</h1>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <ol class="breadcrumb float-sm-right">--}}
{{--                                    <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                                    <li class="breadcrumb-item active">Dashboard v2</li>--}}
{{--                                </ol>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
        @yield('content')
        @include('partials.footer')
    </div>
</div>
@include('partials.script')
@yield('script')
</body>
</html>
