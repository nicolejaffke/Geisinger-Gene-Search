<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
    // Get the search value from the request
    $search = $request->input('search');
    dd($search);

    // Search in the name column from the data table
    $data = data::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the results compacted
    return view('welcome', compact('data'));
}
}
