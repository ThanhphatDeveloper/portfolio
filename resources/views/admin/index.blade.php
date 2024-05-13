<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- start linking  -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/css/app.css') }}">
  <!-- icon -->
  <link rel="icon" href="{{ asset('assets/backend/img/log.png') }}">
  <!-- end linking -->
  <title>NutFlix - admin</title>
</head>
<body>
<!-- start admin -->
<section id="admin">
  <!-- start sidebar -->
  @include('layouts.sidebar')
  <!-- end sidebar -->
  <!-- start content -->
  <div class="content">
    <!-- start content head -->
    <div class="head">
      <!-- head top -->
      <div class="top">
        <div class="left">
          <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
          <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-home"></i>Back Home</button>
        </div>
        <div class="right">
          <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</button>
            <form class="dropdown-menu" aria-labelledby="userDropdown">
              @csrf
             <a class="dropdown-item" action="{{ route('logout') }}" method="POST" href="{{ route('index') }}">log out</a>
           </form>
          </div>
        </div>
      </div>
      <!-- end head top -->
      <!-- start head bottom -->
      <div class="bottom">
        <div class="left">
          <h1>dashboard</h1>
        </div>
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->
    <!-- start with the real content -->
    
    <!-- end the real content -->
  </div>
  <!-- end content -->
</section>
<!-- end admin -->
<!-- start screpting -->
<script src="assets/backend/js/jquery.min.js"></script>
<script src="assets/backend/js/tether.min.js"></script>
<script src="assets/backend/js/bootstrap.min.js"></script>
<script src="assets/backend/js/highcharts.js"></script>
<script src="assets/backend/js/chart.js"></script>
<script src="assets/backend/js/app.js"></script>
<!-- end screpting -->
</body>
</html>
