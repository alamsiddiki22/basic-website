<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BusinessController extends Controller
{
//    public function index() {
//        return view('front-end.home.home');
//    }
    public function admin() {
        return view('admin.home.home');
    }
}

