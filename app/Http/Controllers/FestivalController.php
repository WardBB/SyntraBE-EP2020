<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Festival;

class FestivalController extends Controller
{

    /**
     * Gets all the festivals. Filtered by the query term in the request if present.
     * Returns festivals view with all found festivals (based on search term).
     * 
     * @param Request $request
     * 
     * @return \Illuminate\Contracts\Support\Renderable
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



     /**
      * This gets the id of one festival and returns the variable to the festival.detail blade
      * returns the id to the festival.detail blade
      * The variable can then be used in the blade to call specific festival details
      * 
      * @param string $id
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
     public function item($id) {
        $festival = Festival::find($id);
        return view('festivals.detail', ['festival' => $festival]);
    }

}