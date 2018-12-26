<?php

use App\Url;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {

	$url = request('url');

	$data = ['url' => $url];

	Validator::make($data, ['url' => 'required|url' ])->validate();


	$record = Url::whereUrl($url)->first();

	if($record) {
		return view('result')->withShortened($record->shortened);
	}

	

	$row = Url::create([
	 	'url' => request('url'),
	 	'shortened' => Url::getUniqueShortUrl()
		
	]);

	if($row){
		return view('result')->withShortened($row->shortened);
	}
	// dd(request('url'));
});

Route::get('/{shortened}', function ($shortened) {
	// reurn View::make('welcome');
	$url = Url::whereShortened( $shortened)->first();

	if(! $url) {
		return redirect('/');
	}
	
	return redirect($url->url);
});