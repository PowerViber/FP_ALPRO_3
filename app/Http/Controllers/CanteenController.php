<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CanteenController extends Controller
{
    public function index(){
        return view('Canteen');
    }

    public function login(){
        return view('login');
    }

    public function checkout(){
        return view('checkout');
    }

    public function payment(){
        return view('payment');
    }

    public function pembayaran(){
        return view('pembayaran');
    }
}
