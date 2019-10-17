<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\Pesanan;
use App\Models\Keranjang;
use App\Models\Produk;

class PesananController extends Controller {
    public function addPesanan(Request $req) {
        dd($req->keranjangProduk);
    }
}
