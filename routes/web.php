<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

URL::forceScheme('https');

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
    return view('home');
});

Route::get('/about-us', function () {return view('about_us');});
Route::get('/how-to-play', function () {return view('how_to_play');});
Route::get('/terms-condition', function () {return view('terms_condition');});
Route::get('/fantasy-points-system', function () {return view('fantasy_point_system');});
Route::get('/legality', function () {return view('legality');});
Route::get('/faq', function () {return view('faq');});
Route::get('/privacy-policy', function () {return view('privacy_policy');});
Route::get('/refund-policy', function () {return view('refund_policy');});
Route::get('/apk-download', [HomeController::class,'apkDownlaod']);
Route::get('/contact', function () {return view('contact');});
Route::post('/contact', [HomeController::class,'sendmail']);

