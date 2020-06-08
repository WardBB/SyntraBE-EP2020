<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Festival;

class FestivalController extends Controller
{
    /**
     * This function makes a variable to GET all items in the "festival" table
     * Render the festival.list view with the $festivals variable
     */
    public function show(Request $request) {
        
        $search = $request->get('search');

        if ($search) {
            $festivals = Festival::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->orWhere('country', 'LIKE', "%{$search}%")
                ->orWhere('city', 'LIKE', "%{$search}%")
                ->orWhere('music', 'LIKE', "%{$search}%")
                ->orderBy('name', 'asc')
                ->get();
        } else {
            $festivals = Festival::all(); 
        }
        
        return view('festivals.list', ['festivals' => $festivals]);

    }

     public function item($id) {
        $festival = Festival::find($id);
        return view('festivals.detail', ['festival' => $festival]);
    }


}