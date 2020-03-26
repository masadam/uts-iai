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
    return redirect('jobs');
});

 Route::resource('/jobs', 'JobsController')->middleware('auth');
 Route::resource('/employees', 'EmployeesController')->middleware('auth');
 Route::get('/info','InfoController@show');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login',function($name = "loremipsum"){

    $data = [
        "response" => [
            "status" => 200
        ],
        "message" => "Hello World!!",
        "name" => $name
        
    ];
    
    return response()->json($data);
});

