<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MedShop') }}</title>

    @include('include.sheets')
</head>
<body id="page-top">
    @include('include.navbar')
    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
               @include('include.messages')
                <!-- Page Content -->
                @yield('content')
            </div>
        </div>
    
        <!-- Sticky Footer -->
        @include('include.footer')   
    </div>
    <!-- /.content-wrapper -->
    
    @include('include.logoutModel')
</body>
</html>
