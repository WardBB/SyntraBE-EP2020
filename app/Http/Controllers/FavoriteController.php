<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FavoriteController extends Controller
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
        $user = \Auth::user();
        $festivals = $user->festivals;
        // dd($festivals);

        return view('festivals.favorites', [
            'username' => $user->name, 
            'festivals' => $festivals
            ]);
    }

}
