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
Route::get('campaign','CampaignController@index')->name('campaign');
Route::get('showcampaign','CampaignController@show')->name('show');
Route::post('campaign','CampaignController@store');
Route::get('edit/{id}','CampaignController@edit')->name('edit');
Route::put('edit/{id}','CampaignController@update')->name('update');
Route::delete('delete/{id}','CampaignController@delete')->name('delete');

