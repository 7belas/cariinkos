<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function profil(){
        $users = DB::table('users')->get();
        $payments = DB::table('payments')->get();
        

        return view('home')->with('users',$users)->with('payments', $payments);
    }
    public function isisaldo(){
        return view('isisaldo');
    }
}
