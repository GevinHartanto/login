<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
    //return view('welcome')
	$user = Auth::user();
	if($user->isAdmin()){
		echo "this user is an administrator";
	}
	
	//if(Auth::check()){
	//	return "the user is logged in";
	//}
	
	
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/admin/user/roles', ['middleware'=>'role', function(){
	
	return "Middleware role";
}]);

Route::get('/admin', 'AdminController@index');








