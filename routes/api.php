<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// oldschool ways

//// get all members
//Route::get( '/members', 'MemberController@index' );
//
//// save new member
//Route::post( '/members', 'MemberController@store' );
//
//// show given member
//Route::get( '/members/{member}', 'MemberController@show' );
//
//// update given member - request not working
//Route::patch( '/members/{member}', 'MemberController@update' );
//
//// delete given member
//Route::delete( '/members/{member}', 'MemberController@destroy' );

// new approach for typical CRUD controllers
Route::resource('members', 'MemberController');
