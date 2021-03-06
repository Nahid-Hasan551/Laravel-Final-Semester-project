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
Route::get('homepage',function(){
    return view('homepage');
});
Route::get('index',function(){
    return view('index');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('about',function(){
    return view('about');
});
Route::get('login',function(){
    return view('login');
});
Route::get('registration',function(){
    return view('registration');
});

Route::get('freequiz',function(){
    return view('freequiz');
});
Route::get('classicquiz',function(){
    return view('classicquiz');
});
Route::get('level',function(){
    return view('level');
});
Route::get('dashboard',function(){
    return view('dashboard');
});
Route::get('create-quiz',function(){
    return view('create-quiz');
});
Route::get('manage-quiz',function(){
    return view('manage-quiz');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('homepage',function(){
    return view('homepage');
});
