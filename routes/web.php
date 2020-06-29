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

## Don't forget to change redirect('/home') in Middleware/RedirectifAuthenticate.php



// HomeController
Route::get('/', 'HomeController@index')->name('home');

//AuthController
Route::get('/login', 'AuthController@loginView')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@login')->middleware('guest');
Route::get('/registration', 'AuthController@registrationView')->middleware('guest')->name('registration');
Route::post('/registration', 'AuthController@registration')->middleware('guest');
Route::get('/logout', 'AuthController@logout')->name('logout');

// AutoController
Route::get('/auto', 'AutoController@index')->middleware('auth')->name('auto.index');


// // Showing the Alert in the Home Page
// Route::get('/alert', function() {
//     return redirect()->route('home')->with('info', 'Info Message');
// });