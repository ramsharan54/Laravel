<?php

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
    return view('tests.home');
});
Route::get('/about','PageController@about');
Route::get('/contact','PageController@contact');
Route::group(['middleware' => ['web']],function(){
	Route::get('login/facebook','Auth\AuthController@RedirectToFacebook');
	Route::get('login/facebook/callback','Auth\AuthController@getFacebookCallback');
});




Route::get('/getdata', function(){
  return response()->json(['website'=>'AppDividend']);
});

//Route::get('/home','PageController@home');


/*Route::resource('shows','ShowsController');
Route::get('forms','FormsController@create');
Route::post('forms','FormsController@store');
Route::get('show/{id}','FormsController@index');*/

// forms for pdf
/*Route::get('/forms','UserDetailsController@create');
Route::post('submitForm','UserDetailsController@store');
Route::get('/index','UserDetailsController@index');
Route::get('/downloadPDF/{id}','UserDetailsController@downloadPDF');*/



Auth::routes();
//facbook login route
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


