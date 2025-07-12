<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ 'public/assets/img/apple-icon.png' }}">
    <link rel="icon" type="image/png" href="{{ 'public/assets/img/favicon.png' }}">
    <title>
      Tugas Crud Sisdat
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="public/css/nucleo-icons.css" rel="stylesheet" />
    <link href="public/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    {{-- <link id="pagestyle" href="{{asset('../public/assets/css/material-dashboard.css')}}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/material-dashboard.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="g-sidenav-show bg-gray-100">
    @yield('index')
</body>

</html>
