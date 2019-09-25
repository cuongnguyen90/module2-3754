<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function getform()
    {
        return view('layouts/product');
    }

    public function postform(Request $request)
    {
        $result = $request->price *  $request->percent * 0.1;


        return view('layouts/display',compact('result'));
    }
}
