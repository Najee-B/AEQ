<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/our_company', function () {
    return view('our_company');
})->name('our-company');

Route::get('/aerial-rocket', function () {
    return view('aerial-rocket');
})->name('aerial-rocket');

Route::get('/ammonium', function () {
    return view('ammonium');
})->name('ammonium');

Route::get('/bomb-live-unit', function () {
    return view('bomb_live_unit');
})->name('bomb-live-unit');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/fmu', function () {
    return view('fmu');
})->name('fmu');

Route::get('/general-purpose-bombs', function () {
    return view('general-purpose-bombs');
})->name('general-purpose-bombs');

Route::get('/M904-M905', function () {
    return view('M904-M905');
})->name('M904-M905');

Route::get('/pre-fragmented-bombs', function () {
    return view('pre-fragmented-bombs');
})->name('pre-fragmented-bombs');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/program-standards', function () {
    return view('programs-standards');
})->name('programs-standards');

Route::get('/SAM1400', function () {
    return view('SAM1400');
})->name('SAM1400');

Route::get('/suppliers', function () {
    return view('suppliers');
})->name('suppliers');

Route::get('/terms-and-condition', function () {
    return view('terms-and-condition');
})->name('terms-and-condition');

Route::get('/training-bombs', function () {
    return view('training-bombs');
})->name('training-bombs');

Route::post('/contact-submit',[ContactController::class,'store'])->name('contact-submit');