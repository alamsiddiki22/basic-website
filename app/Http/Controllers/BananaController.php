<?php

namespace App\Http\Controllers;

use App\Models\Banana;
use Illuminate\Http\Request;

class BananaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('front-end.home.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banana  $banana
     * @return \Illuminate\Http\Response
     */
    public function show(Banana $banana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banana  $banana
     * @return \Illuminate\Http\Response
     */
    public function edit(Banana $banana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banana  $banana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banana $banana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banana  $banana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banana $banana)
    {
        //
    }
}
