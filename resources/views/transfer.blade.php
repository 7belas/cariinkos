@extends('layouts.app')
@section ('title','Transfer')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Isi Saldo</div>

                <div class="card-body">
                                <table class="table">
                    <tbody>
                        <tr>
                        
                        <tr>
                        <th>Total Pembayaran</th>
                            <td> Rp.1000000</td>
                            
                        </tr>
                        <tr>
                        <tr>
                        <th>Bank BRI</th>
                            <td>87891723891723 </td>
                        </tr>
                        </tbody>
                </table>
                         <a href="{{route('payment.create')  }}" class="btn btn-primary" role="button">Konfirmasi </a>
                        
                        </tr>                       
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
