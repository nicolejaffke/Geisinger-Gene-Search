<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Controller;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\SearchController;

Route::get('/data', [SiteController::class, 'index']);
   
Route::get('/search', 'SearchController@search')->name('search');
    
//Route::get('/', function () {
    // $results = file_get_contents("http://ftp.ebi.ac.uk/pub/databases/genenames/hgnc/json/locus_groups/protein-coding_gene.json");
    // $data = json_decode($results, true);



    //return view('welcome', compact('data'));
//});

//attempt to insert decoded data into MySQL database table 

Route::get('/insert-json-file-to-database-table', function(){
	$json = file_get_contents(storage_path('geisingerDB.json'));
	$data = json_decode($json,true);
	foreach ($data as $data)  {
		foreach ($data as $key => $value) {
			$insertArr[str_slug($key,'_')] = $value;
		}
		DB::table('geisingernew')->insert($insertArr);
	}
    return view('welcome', compact('data'));
});
