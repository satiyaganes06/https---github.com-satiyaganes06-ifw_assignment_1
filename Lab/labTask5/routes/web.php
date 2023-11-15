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


Route::get('/', function(){
    return view('welcome');
});


Route::get('secondtab', function () {
    return view('myprofilepage');
});


Route::get('thirdtab', function () {
    return redirect()->away('https://www.linkedin.com/in/satiya-ganes-b0a315209/');
});



















Route::get('/companyProfile/{companyName}/{companyLogo}/{visi}/{misi}', function ($companyName, $companyLogo, $visi, $misi) {
    return view('companyProfilePage', [
        'companyName' => $companyName,
        'companyLogo' => $companyLogo,
        'visi' => $visi,
        'misi' => $misi
    ]);
});

Route::get('/about-us/{name}/{homeCity}', function ($name, $homeCity) {
    return view('aboutUsPage', [
        'name' => $name,
        'homeCity' => $homeCity
    ]);
});

Route::get('/productList', function () {
    return view('productList');
});

Route::get('/contactUs', function () {
    return view('contactForm');
});
