@extends('layouts.app')

@section('title', 'Register')

@section('content')
<section class="login_box_area section_gap" style="padding: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="{{ url('/assets/img/login.JPG') }}" alt="">
                    <div class="hover">
                        <h4>Sudah punya akun?</h4>
                        <p>Silahkan login disini</p>
                        <a class="primary-btn" href="{{ url('/login') }}">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner py-2">
                    <h3>Buat Akun</h3>
                    @if(session('msg'))
                        <div class="alert alert-@if(session('msg')['success']){{ 'success' }}@else{{ 'danger' }}@endif">
                            {{ session('msg')['msg'] }}
                        </div>
                    @endif
                    <form class="row login_form" action="{{ url('/user/register') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="col-md-12 form-group">
                            <input required type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Anda'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input required type="email" class="form-control" id="email" name="email" placeholder="Email Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Anda'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input required type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input required type="number" class="form-control" id="kontak" name="kontak" placeholder="Nomor Kontak" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Kontak'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input required type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Anda'">
                        </div>
                        <div class="col-md-12 form-group pb-5">
                            <button type="submit" value="submit" class="primary-btn">Buat Akun</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
