<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Yajra\DataTables\DataTables;
use Mockery\Exception;
use App\Models\Admin;
use App\Models\Pelanggan;
use App\Models\Transaksi;

class AdminController extends Controller
{

    public function index() {
        return view('admin.dashboard');
    }

    public function list() {
        return view('admin.dataadmin');
    }

    public function register() {
        return view('admin.registeradmin');
    }

    public function settings(Request $req) {
        return view('admin.settings', [
            'currentdata' => Admin::find($req->session()->get('login')['id'])
        ]);
    }

    public function listPelanggan(Request $req) {
        return view('admin.datapelanggan');
    }


    public function listTopUp(Request $req) {
      $transaksi = Transaksi::where('transaksi_deskripsi','top up')->get();

        return view('admin.datatopup',['transaksi'=>$transaksi]);
    }

    public function detailPelanggan(Request $req) {
        return "Hello World";
    }

    public function delete(Request $req, $id) {
        try {
            Admin::find($id)->delete();
            $req->session()->flash('msg', [
                'success' => true,
                'msg' => 'Delete Admin berhasil!'
            ]);
        } catch (Exception $ex) {
            $req->session()->flash('msg', [
                'success' => false,
                'msg' => "Terjadi Error, delete Admin gagal: {$ex->getMessage()}"
            ]);
        }
        return redirect('/admin/dataadmin');
    }

    public function update(Request $req, $id) {
        try {
            $admin = Admin::find($id);
            if ($req->fromadmin)
                $admin->admin_level = (int) $req->level;
            if ($req->password)
                $admin->admin_password = Hash::make($req->password);
            $admin->admin_username = trim($req->username);
            $admin->admin_nama = trim($req->nama);
            $admin->admin_kontak = trim($req->kontak);
            $admin->save();

            if ($req->session()->get('login')['id'] === $admin->admin_id)
                $this->loginSession($req, $admin);
            $req->session()->flash('msg', [
                'success' => true,
                'msg' => 'Update data Admin berhasil!'
            ]);
        } catch (QueryException $ex) {
            if ((int) $ex->getCode() === 23000) {
                $req->session()->flash('msg', [
                    'success' => false,
                    'msg' => "Username '{$req->username}' sudah digunakan!"
                ]);
            } else throw new Exception($ex->getMessage());
        } catch (Exception $ex) {
            $req->session()->flash('msg', [
                'success' => false,
                'msg' => "Terjadi error.. Update data admin gagal, {$ex->getMessage()}"
            ]);
        }
        return redirect()->back();
    }

    public function datatables() {
        return Datatables::of(Admin::getAll())
            ->addColumn('action', function($data) {
                return '
                    <button
                        type="button"
                        class="btn btn-sm btn-primary"
                        onclick="openAction('.str_replace('"', '\'', json_encode($data)).')"
                    >
                        <i class="fa fa-eye"></i>
                    </button>
                ';
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function datatablesPelanggan() {
        return Datatables::of(Pelanggan::all())
            ->addColumn('action', function($data) {
                return '
                    <button
                        type="button"
                        class="btn btn-sm btn-primary"
                        onclick="openAction('.str_replace('"', '\'', json_encode($data)).')"
                    >
                        <i class="fa fa-eye"></i>
                    </button>
                ';
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function auth(Request $req) {
        try {
            $data = Admin::check($req->username);
            if ($data && Hash::check($req->password, $data->admin_password)) {
                $this->loginSession($req, $data);
                return redirect('/admin');
            }
            throw new Exception('Password atau Username salah');
        } catch (Exception $ex) {
            $req->session()->flash('msg', [
                'success' => false,
                'msg' => $ex->getMessage()
            ]);
            return redirect('/admin/login');
        }
    }

    public function add(Request $req) {
        try {
            $admin = new Admin();
            $admin->admin_username = trim($req->username);
            $admin->admin_nama = trim($req->nama);
            $admin->admin_kontak = trim($req->kontak);
            $admin->admin_level = (int) $req->level;
            $admin->admin_password = Hash::make($req->password);
            $admin->save();
            $req->session()->flash('msg', [
                'success' => true,
                'msg' => 'Admin berhasil ditambahkan'
            ]);
        } catch (QueryException $ex) {
            if ((int) $ex->getCode() === 23000) {
                $req->session()->flash('msg', [
                    'success' => false,
                    'msg' => "Username '{$req->username}' sudah digunakan!"
                ]);
            } else throw new Exception($ex->getMessage());
        } catch (Exception $ex) {
            $req->session()->flash('msg', [
                'success' => false,
                'msg' => "Register Admin gagal, {$ex->getMessage()}"
            ]);
        }
        return redirect('/admin/registeradmin');
    }

    public function login(Request $req) {
        if ($req->session()->get('login')['admin'])
            return redirect('/admin');
        return view('admin.login');
    }

    private function loginSession(Request $req, $data) {
        $req->session()->put('login', [
            'admin' => true,
            'id' => $data->admin_id,
            'nama' => $data->admin_nama,
            'level' => $data->admin_level
        ]);
    }

    public function konfTopUp($id) {
        return view('admin.conftopup', [
            'transaksi' => Transaksi::find($id)
        ]);
    }
}
