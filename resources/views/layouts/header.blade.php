<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cari-In Kos</title>

  <!-- Bootstrap core CSS -->
  <link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{url('css/landing-page.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{url('img/cariinkos.jpg')}}" width="50" height="50" alt="">Cari-In Kos</a>


          <div class="flex-center position-ref full-height">
                  <div class="top-right links">
                          <a class="btn btn-primary" href="#">Masuk</a>
                          <a class="btn btn-primary" href="#">Daftar</a>
                        
                  </div>
    </div>
  </nav>
  @yield('content')
