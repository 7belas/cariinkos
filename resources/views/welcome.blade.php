@extends ('layouts.app')
@section ('title','Cari-in Kos')
@section ('content')

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><img src="{{url('img/cariinkos.jpg')}}">Cari-In Kos</title>

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
    

            <header class="masthead text-white text-center">
            
            <div class="overlay"></div>
            <div class="container">
            <div class="row">
            <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">Tempat untuk cari kos-kosan dan bisa langsung bayar </h1>
            </div>

                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form>
                    <div class="form-row">
                    <div class="col-12 col-md-9 mb-2 mb-md-0">
                        <input type="email" class="form-control form-control-lg" placeholder="Cari nama tempat atau alamat...">
                    </div>
                    <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">Cari</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </header>
            
            <!-- Campus Area -->
            <section class="features-icons bg-light text-center">
                <div class="container">
                <div class="row">
                            <div class="col-lg-12">
                                <div class="section-top text-center">
                                    <h2>Cari kos kosan terdekat sekitar kampus</h2>
                                    <p>Anda dapat mencari kos kosan yang terdekat dengan kampus anda.</p>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5">
                        <div class="category-info mb-3 mx-auto mb-lg-3">
                        <a href= "{{url('/unej')}}">
                        <img src="{{url('img/icon/unej.png')}}" height="100" width="100"  />
                        </div>
                        </a>
                        <h3>Universitas Jember</h3>
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5">
                        <div class="category-info mb-3 mx-auto mb-lg-3">
                        <a href= "{{url('/ub')}}">
                        <img src="{{url('img/icon/ub.png')}}" height="100" width="100"  />
                        </div>
                        </a>
                        <h3>Universitas Brawijaya</h3>
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5">
                        <div class="category-info mb-3 mx-auto mb-lg-3">
                        <a href= "{{url('/its')}}">
                        <img src="{{url('img/icon/its.png')}}" height="100" width="100"  />
                        </div>
                        </a>
                        <h3>Institut Teknologi Surabaya</h3>
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5">
                        <div class="category-info mb-3 mx-auto mb-lg-3">
                        <a href= "{{url('/ui')}}">
                        <img src="{{url('img/icon/ui.png')}}" height="100" width="200"  />
                        </div>
                        </a>
                        <h3>Universitas Indonesia</h3>
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5">
                        <div class="category-info mb-3 mx-auto mb-lg-3">
                        <a href= "{{url('/ugm')}}">
                        <img src="{{url('img/icon/ugm.jpg')}}" height="100" width="100"  />
                        </div>
                        </a>
                        <h3>Universitas Gajah Mada</h3>
                    </div>
                    </div>

                    <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5">
                        <div class="category-info mb-3 mx-auto mb-lg-3">
                        <a href= "{{url('/ipb')}}">
                        <img src="{{url('img/icon/ipb.png')}}" height="100" width="100"  />
                        </div>
                        </a>
                        <h3>Institut Pertanian Bogor</h3>
                    </div>
                    </div>

                </div>
                </div>
            </section>

            <!-- Category -->
            <section class="features-icons bg-light text-center">
                <div class="container">
                <div class="row">
                            <div class="col-lg-12">
                                <div class="section-top text-center">
                                    <h2>Cari kos kosan berdasarkan kategori</h2>
                                    <p>Anda dapat mencari kos kosan yang anda inginkan berdasarkan kategori dibawah.</p>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                       
                        <div class="features-icons-icon d-flex">
                        <i class="fas fa-wifi m-auto text-primary"></i>
                        </div>
                        </a>
                        <h3>Wifi</h3>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                        <i class="fas fa-shower m-auto text-primary"></i>
                        </div>
                        <h3>Kamar Mandi dalam</h3>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                        <i class="fas fa-bed m-auto text-primary"></i>
                        </div>
                        <h3>Kasur</h3>
                    </div>
                    </div>
                </div>
                </div>
            </section>
  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; Cari-in Kos 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
    </body>
</html>
@endsection
