<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/products', function(){ 
    return json_encode(
        array(
            "slackUsername" => "merit10",
            "backend" => true,
            "age" => 27,
            "bio" => "Msc student in UI, PHP(Laravel) Developer"
        )
    );
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
