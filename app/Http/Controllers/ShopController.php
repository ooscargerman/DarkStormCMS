<?php
/**
 * Created by PhpStorm.
 * User: oscargerman
 * Date: 03/05/18
 * Time: 00:14
 */



namespace DarkStorm\Http\Controllers;

use DarkStorm\shop;
use DarkStorm\User;
use DarkStorm\users_items;
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
        $ships = shop::where('type', 1)->orderBy('id')->paginate(12);
        $ships_total = shop::where('type', 1)->count();
        $drones_total = shop::where('type', 2)->count();

        return view('shop', ['ships' => $ships, 'ships_total' => $ships_total, 'drones_total' => $drones_total]);
    }
    public function drones()
    {
        $drones = shop::where('type', 2)->orderBy('id')->paginate(12);
        $ships_total = shop::where('type', 1)->count();
        $drones_total = shop::where('type', 2)->count();
        return view('drones', ['drones' => $drones, 'ships_total' => $ships_total, 'drones_total' => $drones_total]);
    }
    public function buy(Request $request){

        // check price

        $price = shop::where('loot_id', $request->id)->value('price');
        $uridium = User::where('id', Auth::id())->value('uridium');
        $item = shop::where('loot_id', $request->id)->value('name');
        $items = users_items::where('user_id', Auth::id())->where('loot_id', $request->id)->count();
        if($uridium < $price){
            return back()->with("status", "Error: You don't have the enough uridium");
        }
        if($items){
            return back()->with("status", "Error: You already have ".$item);
        }
        //return back()->with("status", "Error:xd ".$items);
        User::where('id', Auth::id())->decrement('uridium', $price);
        $user_item = new users_items();
        $user_item->user_id = Auth::id();
        $user_item->loot_id = $request->id;
        if($user_item->save()){
            return back()->with("success", "Success: you bought a ".$item);
        }


    }


}