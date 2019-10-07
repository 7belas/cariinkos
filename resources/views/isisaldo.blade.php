@extends('layouts.app')
@section ('title','Isi Saldo')
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
                        <th>Pilih Bank</th>
                            <td> <div class="radio">
                            <label><input type="radio" name="1" checked>Bank BRI</label>
                            </div></td>
                            
                            <th scope ="row"> <td> <div class="radio">
                            <label><input type="radio" name="2" checked>Bank BNI</label>
                            </div></td></th>   

                            <td> <div class="radio">
                            <label><input type="radio" name="3" checked>Bank BCA</label>
                            </div></td>

                            <td> <div class="radio">
                            <label><input type="radio" name="4" checked>Bank Mandiri</label>
                            </div></td>
                        
                        </tr>
                        </tr>
                        </tbody>
                        </table>

                        <form action="/isisaldo/transfer" method="post">
                        {{ csrf_field() }}
                        Masukkan jumlah saldo <input type="number" name="saldo" required="required"> <br/>
                        <input type="submit" value="Transfer">
                    </form>

                        

                        </div>
                        </div>
                        </div>


@endsection