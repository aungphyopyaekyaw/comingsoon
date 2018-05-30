<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub = Subscriber::select('name','email')->paginate(20);
        return view('doc', compact('sub'));
    }
}
