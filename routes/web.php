<?php

use Illuminate\Support\Facades\Route;

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

Route::get('profile',function (){
    return view('front\profile')->with([
        'name' => 'Atef Isa Abdulla Hussain',
        'age' => 34
    ]);
});

Route::get('about',function(){
    return view('about');
});

Route::get('landing',function (){
    return view('landing');
});


Route::get('/test',function (){
    return 'السلام عليكم ايها ال';
});

Route::get('/testa/{id}',function ($id){
    return 'Welcome '.$id;
})->name('a');


Route::get('foo',function (){
    return 'Hi Foo';
});

//Route::get('second','front\SecondController@show');

Route::group(['namespace' => 'front'],function(){
    Route::get('front/second','SecondController@show');
});

Route::resource('news','NewsController');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
