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

        return view('festivals.favorites', [
            'username' => $user->name, 
            'festivals' => $festivals
        ]);
    }

    /**
     * Attaches user(id) and festival(id) in pivot table
     * 
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function add($id){
        $user = \Auth::user();
        $user->festivals()->syncWithoutDetaching($id);

        return redirect('/favorites');
    }

    /**
     * Detaches user(id) and festival(id) in pivot table
     * 
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function remove($id){
        $user = \Auth::user();
        $user->festivals()->detach($id);

        return redirect('/favorites');
    }

}
