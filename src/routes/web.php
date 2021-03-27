<?php

use Illuminate\Support\Facades\Route;
//use App\Notifications\Telegram;
//use Illuminate\Support\Facades\Notification;

Route::get('/', function () {
    return view('welcome');
})->name('home-page');

Route::post('/submit', 'App\Http\Controllers\ModalWController@submit')->name('submit-form');
Route::post('/contact', 'App\Http\Controllers\ContactController@submit')->name('contact-form');

//Notification::route('telegram', '708121661')->notify(new Telegram);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


