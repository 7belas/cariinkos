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
                        
                        @foreach($payments as $p)
                        <tr>
                        <th>Total Pembayaran</th>
                            <td> {{$p->saldo}} </td>
                            
                        </tr>
                        <tr>
                        <tr>
                        <th>{{$p->bank}}</th>
                            <td>87891723891723 </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>

                <form action="/konfirmasi/store" method="post" enctype="multipart/form-data"> 
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Masukkan Bukti transfer</label>
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <input type="submit" class="btn btn-primary" role="button" name ="submit" value="Konfirmasi">
                    </form>
                    
                         
                        
                        </tr>                       
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
