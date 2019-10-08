@extends('layouts.app')
@section ('title','Profil')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil Saya</div>

                <div class="card-body">
                                <table class="table">
                    <tbody>
                        <tr>
                        
                        <tr>
                        <th>Nama</th>
                            <td> {{ Auth::user()->name }}</td>
                            
                        </tr>
                        <tr>
                        <th>No Telepon</th>
                        @if (Auth::user()->nohp === 0)
                            <td>Masukkan no hp anda</td>
                        @else
                            <td>{{ Auth::user()->nohp }} </td>
                        @endif
                        </tr>
                        <tr>
                        <th>Email</th>
                            <td> {{ Auth::user()->email }}</td>
                        </tr>
                        <th>Saldo</th>
                        @foreach($payments as $p)
                        @if($p->verifikasi === 'Ya')
                        
                            <td> {{$p->saldo}}</td>
                        @else
                            
                        @endif
                        @endforeach
                            <td> <a href="{{url('/profil/isisaldo')  }}" class="btn btn-primary" role="button">Isi Saldo </a>
                            </td>
                        </tr>                       
                    </tbody>
                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
