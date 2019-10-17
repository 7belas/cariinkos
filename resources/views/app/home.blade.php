@extends('layouts.app')

@section('title', 'Home')

@section('heads')
<link rel="stylesheet" href="{{ url('/assets/css/home.css') }}">
@endsection

@section('content')
<div class="container">
    <!-- Header -->
     
            
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
</div>
@endsection
