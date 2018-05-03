<?php

namespace DarkStorm\Http\Controllers;

use DarkStorm\clans;
use DarkStorm\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClanController extends Controller
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
        return view('clan');
    }
    public function clans() {
        $clans = clans::where('active', 1)->orderBy('id')->take(10)->get();
        return view('clan', ['clans' => $clans]);
    }
    public function createClan(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:50|unique:clans',
            'tag' => 'required|max:4|unique:clans',
            'description' => 'required|min:5',
        ]);


        $clan = new clans();
        $clan->name = $request->name;
        $clan->tag = $request->tag;
        $clan->description = $request->description;
        $clan->leader_id = Auth::user()->id;
        $clan->save();
        return view('clan');
    }
}
