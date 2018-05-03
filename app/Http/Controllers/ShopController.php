<?php
/**
 * Created by PhpStorm.
 * User: oscargerman
 * Date: 03/05/18
 * Time: 00:14
 */



namespace DarkStorm\Http\Controllers;

use DarkStorm\clans;
use DarkStorm\shop;
use DarkStorm\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
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
        $ships = shop::where('type', 1)->orderBy('id')->take(10)->get();
        return view('shop', ['ships' => $ships]);
    }


}