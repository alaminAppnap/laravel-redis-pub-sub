<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
 Redis::publish('slackchannel', json_encode([
        'name' => 'Adam Wathan',
        'phone' => "0175884529",
        'message' => "Your message sccessflly send"
    ]));
    return view('welcome');
});
