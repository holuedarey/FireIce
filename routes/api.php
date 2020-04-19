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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'Auth\AuthController@login')->name('login');
    Route::post('register', 'Auth\AuthController@register');
    Route::post('signup', 'Auth\AuthController@signup');


    Route::group(['middleware' => 'auth:api'], function() {

        Route::get('logout', 'Auth\AuthController@logout');
        Route::get('user', 'Auth\AuthController@user');

    });
});
Route::group(['prefix' => 'external-books'], function () {
    Route::get('/', 'ApiController@getAllBooks')->name('get-allBook');
    Route::get('/{id}', 'ApiController@showBook')->name('single-book');
});


Route::group(['prefix' => 'v1'], function () {
    Route::post('/books', 'BookController@create')->name('postBook');
    Route::get('/books', 'BookController@allBooks')->name('getBook');
    Route::patch('/books/{id}', 'BookController@updateBook')->name('updateBook');
    Route::get('/books/{id}', 'BookController@singleBook')->name('singleBook');
    Route::delete('/books/{id}', 'BookController@deleteBook')->name('deleteBook');
});