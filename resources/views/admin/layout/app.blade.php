<!DOCTYPE html>
<html lang="en">
<head>
    @php
        $title = 'Danam';
    @endphp
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="{{$title}}">
    <link rel="stylesheet" href="{{asset('admin/dist/css/overlayscrollbars/overlayscrollbars.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/dist/css/bootstrap-icons/bootstrap-icons.min.css')}}" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.css')}}">
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('admin.include.header')
        @include('admin.include.sidebar')
        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </main>
        @include('admin.include.footer')
    </div>
    @include('admin.include.main-js')
</body>

</html>