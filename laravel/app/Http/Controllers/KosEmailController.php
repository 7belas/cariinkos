<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KosEmailController extends Controller
{
    //
    public function index(){
    Mail::to("fmarzuki20@gmail")->send(new KosEmail());
 
    return "Email telah dikirim";
    }
}
