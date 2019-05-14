<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="{{url('assets/img/brand/favicon.png')}}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}" rel="stylesheet">
  <!-- Icons -->
  <link href="{{url('assets/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{url('assets/css/argon.css?v=1.0.0')}}" rel="stylesheet">
</head>

<body>

  <!-- Main content -->
  @yield('content')
  <!-- Argon Scripts -->

  <!-- Core -->
  <script src="{{url('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Optional JS -->
  <script src="{{url('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{url('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{url('assets/js/argon.js?v=1.0.0')}}"></script>
</body>

</html>