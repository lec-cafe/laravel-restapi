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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return [
        "message" => "hello"
    ];
});

Route::get('/sample2', function () {
    return \Illuminate\Http\JsonResponse::create([
        "message" => "hello"
    ],200,[
        "X-APP-HEADER" => "LECCAFE_SAMPLE"
    ]);
});

Route::get('/sample2',[
    "middleware" => \App\Http\Middleware\JsonResponse::class,
    function(){
        return [
            "message" => "hello"
        ];
    }
]);

