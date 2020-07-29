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

Route::group([
    'middleware' => 'auth:api'
], function () {
    Route::get('my_events', 'EventManagerController@index');
    Route::get('document_events/{document_type}/{document_id}', 'EventManagerController@indexByDocument');
    Route::get('event/{event_id}', 'EventManagerController@show');
});
