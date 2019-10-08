@extends('layouts.app')
@section ('title','Isi Saldo')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Isi Saldo</div>

                <div class="card-body">

                <form action="/profil/isisaldo/store" method="post">
                        {{ csrf_field() }}
                <table class="table">
                
                    <tbody>
                        <tr>
                        
                        <tr>
                        <th>Pilih Bank</th>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="bank" value="Bank BRI">Bank BRI</label>
                        </div> </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="bank" value="Bank BNI"> Bank BNI</label>
                        </div></td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="bank " value="Bank BCA" >Bank BCA</label>
                        </div></td>
                        <td> 
                        <div class="radio">
                        <label><input type="radio" name="bank" value="Bank Mandiri" >Bank Mandiri</label>
                        </div> </td> 
                        
                        </tr>
                        </tr>
                        </tbody>
                        </table>
                        

                        <input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
                        Masukkan jumlah saldo <input type="number" name="saldo" required="required"> <br/>
                        <input type="submit" name ="submit" value="Transfer">
                    </form>

                        

                        </div>
                        </div>
                        </div>


@endsection