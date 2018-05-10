<?php

namespace DarkStorm\Http\Controllers;

use Illuminate\Http\Request;
use DarkStorm\news;

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
        $news = news::orderBy('id', 'DESC' )->limit(5)->get();
        $last = news::max('id');
        return view('home', ['news' => $news, 'last' => $last]);
    }

}
