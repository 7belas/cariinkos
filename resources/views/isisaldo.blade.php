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
                            <label><input type="radio" name="optradio" checked>Bank BRI</label>
                            </div></td>
                            
                            <th scope ="row"> <td> <div class="radio">
                            <label><input type="radio" name="optradio" checked>Bank BNI</label>
                            </div></td></th>   

                            <td> <div class="radio">
                            <label><input type="radio" name="optradio" checked>Bank BCA</label>
                            </div></td>

                            <td> <div class="radio">
                            <label><input type="radio" name="optradio" checked>Bank Mandiri</label>
                            </div></td>


                        </tr>
                        <tr>


@endsection