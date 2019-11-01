<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller {

    public function profilPage(Request $req) {
        $pelanggan = Pelanggan::find($req->session()->get('login')['id']);
        return view('app.userprofile', [
            'user' => $pelanggan
        ]);
    }

    public function saldoPage(Request $req) {
      $loginSession = $req->session()->get('login');
      $pelangganId = $loginSession['id'];
      $pelanggan = Pelanggan::find($req->session()->get('login')['id']);

      $transaksi = Transaksi::where('transaksi_pelanggan',$pelangganId)->where('transaksi_deskripsi','top up')->
      where(function ($query) {
      $query->where('transaksi_bayar','Belum Dibayar')->orWhere('transaksi_bayar','Tidak Valid');
    })->first();

      if($transaksi){
        return view('app.confTopUp',['transaksi' => $transaksi,'user' => $pelanggan]);
      }else{

        return view('app.usersaldo', [
            'user' => $pelanggan
        ]);
      }


    }

    public function pesananPage(Request $req) {
        $loginSession = $req->session()->get('login');
        $pelangganId = $loginSession['id'];
        $pelanggan = Pelanggan::find($req->session()->get('login')['id']);
  
        $transaksi = Transaksi::where('transaksi_pelanggan',$pelangganId)->where('transaksi_deskripsi','top up')->
        where(function ($query) {
        $query->where('transaksi_bayar','Belum Dibayar')->orWhere('transaksi_bayar','Tidak Valid');
      })->first();
  
        if($transaksi){
          return view('app.confTopUp',['transaksi' => $transaksi,'user' => $pelanggan]);
        }else{
  
          return view('app.pesananuser', [
              'user' => $pelanggan
          ]);
        }
  
  
      }

    public function register(Request $req) {
        try {
            $pelanggan = new Pelanggan();
            $pelanggan->pelanggan_email = trim($req->email);
            $pelanggan->pelanggan_password = Hash::make($req->password);
            $pelanggan->pelanggan_nama = trim($req->nama);
            $pelanggan->pelanggan_kontak = trim($req->kontak);
            $pelanggan->pelanggan_alamat = trim($req->alamat);
            $pelanggan->save();
            $req->session()->flash('msg', [
                'success' => true,
                'msg' => 'Register Berhasil, Silahkan Login dengan akun anda!'
            ]);
            return redirect('/login');
        } catch (QueryException $ex) {
            if ((int) $ex->getCode() === 23000) {
                $req->session()->flash('msg', [
                    'success' => false,
                    'msg' => "Email '{$req->email}' sudah digunakan!"
                ]);
            } else throw new Exception($ex->getMessage());
        } catch (Exception $ex) {
            $req->session()->flash('msg', [
                'success' => false,
                'msg' => "Register Gagal, {$ex->getMessage()}"
            ]);
        }
        return redirect('/register');
    }


    public function buangProdukDariKeranjang(Request $req, $id) {
        try {
          $a=Keranjang::find($id);
          Keranjang::find($id)->delete();
          $p = Produk::find($a->keranjang_produk);
          $p->produk_stok += $a->keranjang_jumlah;
          $p->save();
            // Keranjang::destroy($id);
            $req->session()->flash('msg', [
                'success' => true,
                'msg' => 'Berhasil menghapus produk dari keranjang'


            ]);
        } catch (Exception $ex) {
            $req->session()->flash('msg', [
                'success' => false,
                'msg' => 'Terjadi error.. Gagal menghapus produk dari keranjang'
            ]);
        }
        return redirect()->back();
    }

    public function simpanProdukKeKeranjang(Request $req, $id) {
        try {
            $loginSession = $req->session()->get('login');
            $pelangganId = $loginSession['id'];

            $checkProduk = Keranjang::where('keranjang_pelanggan',$pelangganId)->where('keranjang_produk',$id)->first();
            // jika sudah ada produk ini dalam keranjang,
            // maka update keranjang_jumlah berdasarkan $req->keranjang_jumlah
            if($checkProduk) {
                $checkProduk->keranjang_jumlah += $req->keranjang_jumlah;
                $checkProduk->save();

            } else {
                $k = new Keranjang();
                $k->keranjang_produk = $id;
                $k->keranjang_pelanggan = $pelangganId;
                $k->keranjang_jumlah = $req->keranjang_jumlah;
                $k->save();
            }

            $p = Produk::find($id);
            $p->produk_stok -= $req->keranjang_jumlah;
            $p->save();

            $req->session()->flash('msg', [
                'success' => true,
                'msg' => 'Berhasil menambahkan produk ke keranjang'
            ]);
        }catch(Exception $ex) {
            $req->session()->flash('msg', [
                'success' => false,
                'msg' => 'Terjadi error.. Gagal menambahkan produk ke keranjang'
            ]);
        }

        return redirect()->back();

    }

    public function keranjang(Request $req){
        $loginSession = $req->session()->get('login');
        if ($loginSession['pelanggan']) {
            $totalProduk = 0; $totalHarga = 0;
            $pelangganId = $loginSession['id'];
            $productsInCart = Keranjang::productInCarts($pelangganId);
            foreach ($productsInCart->toArray() as $p) {
                $totalHarga += $p->produk_harga * $p->keranjang_jumlah;
                $totalProduk++;
            }
            return \view("app.cart",[
                'produk' => sizeof($productsInCart) > 0 ? $productsInCart : false,
                'totalharga' => $totalHarga,
                'totalproduk' => $totalProduk
            ]);
        }
        return redirect('/login');
    }

    public function deleteAccountPage(Request $req) {
        return view('app.deleteaccount');
    }

    private function loginSession(Request $req, $dataPelanggan){
        $req->session()->put('login',[
            'pelanggan' => true,
            'id' => $dataPelanggan->pelanggan_id,
            'nama' => $dataPelanggan->pelanggan_nama,
            'email' => $dataPelanggan->pelanggan_email
        ]);
    }

    public function update(Request $req, $id){
        try {
            $pelanggan = Pelanggan::find($id);
            $pelanggan->pelanggan_nama = trim($req->nama);
            $pelanggan->pelanggan_kontak = trim($req->kontak);
            $pelanggan->pelanggan_alamat = trim($req->alamat);
            $pelanggan->pelanggan_email = trim($req->email);

            if ($req->password)
                $pelanggan->pelanggan_password = Hash::make($req->password);

            $pelanggan->save();

            $req->session()->flash('msg', [
                'success' => true,
                'msg' => $req->fromadmin ? 'Update data Pelanggan berhasil!' : 'Update profil berhasil!'
            ]);

        } catch (QueryException $ex) {
            if ((int) $ex->getCode() === 23000) {
                $req->session()->flash('msg', [
                    'success' => false,
                    'msg' => "Email '{$req->email}' sudah digunakan!"
                ]);
            } else throw new Exception($ex->getMessage());
        } catch(Exception $ex){
            $req->session()->flash('msg', [
                'success' => false,
                'msg' => $req->fromadmin ? "Terjadi kesalahan, update data pelanggan gagal, {$ex->getMessage()}" : 'Terjadi kesalahan, Update profil gagal!'
            ]);
        }

        return redirect()->back();
    }

    public function delete(Request $req, $id){
        try {
            Pelanggan::find($id)->delete();
            DB::table('keranjang')->where('keranjang_pelanggan',$id)->delete();

            if (!$req->fromadmin) {
                $req->session()->flush();
                $req->session()->flash('msg',[
                    'success' => true,
                    'msg' => 'Hapus akun berhasil'
                ]);
                return redirect('/login');
            } else {
                $req->session()->flash('msg',[
                    'success' => true,
                    'msg' => 'Delete Pelanggan berhasil'
                ]);
            }
        } catch (Exception $ex) {
            $req->session()->flash('msg',[
                'success' => false,
                'msg' => $req->fromadmin ? "Terjadi error, delete Pelanggan Gagal: {$ex->getMessage()}" : 'Terjadi kesalahan, Hapus akun gagal!'
            ]);
        }
        return redirect()->back();
    }

    public function auth(Request $req) {
        try{
            $dataPelanggan = Pelanggan::check($req->email);
            if($dataPelanggan && Hash::check($req->password , $dataPelanggan->pelanggan_password)) {
                $this->loginSession($req , $dataPelanggan);
                return redirect('/');
            }
            throw new Exception("Password atau Username salah");
        }catch(Exception $ex){
            $req->session()->flash('msg',[
                'success'=>false,
                'msg'=>$ex->getMessage()
            ]);
            return redirect('/login');
        }
    }

}
