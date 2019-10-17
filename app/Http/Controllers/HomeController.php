<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller {

    public function index() {
        return view('app.home');
    }

    public function produkPage() {
        $idKategori = Input::get('kategori');
        $search = Input::get('search-key');
        $kategories = Kategori::getAll();
        $produk = Produk::with(['kategori', 'kemasan'])->orderBy('produk_id', 'DESC');
        $result = [
            'input' => '',
            'kategories' => $kategories,
            'prices' => [
                'max' => Produk::max('produk_harga'),
                'min' => Produk::min('produk_harga')
            ]
        ];

        if ($idKategori) {
            $result['input'] = "&kategori={$idKategori}";
            $result['produks'] = $produk->where('produk_kategori', '=', $idKategori)->simplePaginate(12);
        } else if ($search) {
            $result['input'] = "&search-key={$search}";
            $result['produks'] = $produk->where('produk_nama', 'LIKE', "%{$search}%")->simplePaginate(12);
        } else {
            $result['produks'] = $produk->simplePaginate(12);
        }

        return view('app.produk', $result);
    }

    public function kontakPage() {
        return view('app.contact');
    }

    public function login() {
        return view('app.login');
    }

    public function register() {
        return view('app.register');
    }
}
