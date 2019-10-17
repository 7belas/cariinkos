@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="sidebar-categories">
                    <div class="head">Profil Saya</div>
                    <ul class="main-categories">
                        <li class="main-nav-list">
                            <a href="{{ url('/produk') }}">List Produk</a>
                        </li>
                        <li class="main-nav-list">
                            <a href="{{ url('/user/produkku') }}">Produkku</a>
                        </li>
                        <li class="main-nav-list">
                            <a href="{{ url('/user/keranjang') }}">Keranjang Saya</a>
                        </li>
                        <li class="main-nav-list">
                            <a href="{{ url('/user/pesanan') }}">Pesanan Saya</a>
                        </li>
                        <li class="main-nav-list">
                            <a style="color: crimson" href="{{ url('/user/delete') }}">Hapus Akun</a>
                        </li>
                        <li class="main-nav-list">
                            <a href="{{ redirect()->getUrlGenerator()->previous() }}">Kembali</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                <div class="login_form_inner py-4">
                    <h3>Setting Profil</h3>
                    @if(session('msg'))
                        <div class="alert alert-@if(session('msg')['success']){{ 'success' }}@else{{ 'danger' }}@endif">
                            {{ session('msg')['msg'] }}
                        </div>
                    @endif
                    <form class="row login_form" style="max-width: 450px" action="{{ url('/user/'.$user->pelanggan_id) }}" method="POST" id="contactForm">
                        @method('PUT')
                        @csrf
                        <div class="col-md-12 form-group">
                            <input required type="text" value="{{ $user->pelanggan_nama }}" class="form-control" id="nama" name="nama" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input required type="email" value="{{ $user->pelanggan_email }}" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input required type="number" value="{{ $user->pelanggan_kontak }}" class="form-control" id="kontak" name="kontak" placeholder="Nomor Kontak" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Kontak'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input required type="text" value="{{ $user->pelanggan_alamat }}" class="form-control" id="alamat" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ganti Password (Kosongkan jika tidak ingin mengganti)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ganti Password (Kosongkan jika tidak ingin mengganti)'">
                        </div>
                        <div class="col-md-12 form-group pb-5">
                            <button type="submit" value="submit" class="primary-btn">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
