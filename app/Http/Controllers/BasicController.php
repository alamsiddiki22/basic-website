<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index() {
        return view('front-end.home.home');
    }
    public function categoryProduct() {
        return view('front-end.category.category-content');
    }
    public function categoryAbout() {
        return view('front-end.about.about');
    }
    public function categoryPrivate() {
        return view('front-end.privacy.privacy');
    }
    public function categoryPost() {
        return view('front-end.post.post');
    }
    public function categoryContuct() {
        return view('front-end.contuct.contuct');
    }
//    public function admin() {
//        return view('admin.home.home');
//    }
}

