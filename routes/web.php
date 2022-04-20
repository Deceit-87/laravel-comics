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
    $team =[
        [
            'name'=> 'marco'
        ],
        [
            'name'=> 'giulio'
        ],
        [
            'name'=> 'porco'
        ],
    ];
    return view('pages.home',[
        'team'=> $team
    ]);
});
Route::get('/contatti', function () {
    return view('pages.contatti');
});
