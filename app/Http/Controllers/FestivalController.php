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
    public function show() {
        $festivals = Festival::all();
        

        return view('festivals.list', ['festivals' => $festivals]);
    }

    public function getFestivalDetail($id) {
        $detailFestival = Festival::find($id);

        return view('festivals.list', ['detailFestival' => $detailFestival]);
    }


    public function item($id) {
        $festival = Festival::find($id);
        // return response()->json($festival);
        return view('festivals.detail', ['festival' => $festival]);
    }

}