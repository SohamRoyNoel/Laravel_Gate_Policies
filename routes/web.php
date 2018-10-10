<?php


use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/subs', function () {

    if (Gate::allows('subs', Auth::user())) {
        return view('subscriber');
    }
//    if (Gate::denies('subs', Auth::user())) {
//        return "fuck off, candy ass";
//
//    }

    else {
        return "fuck off, candy ass";
    }

});