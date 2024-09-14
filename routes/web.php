<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\investigationcontroller;
use App\Http\Controllers\logoutcontroller;
use App\Http\Controllers\Usertestscontroller;
use App\Models\investigation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});
Route::get('/tests list', function () {
    return view('tests list',[
        'tests'=>Investigation::all(),
       'tests' =>Investigation::orderBy('created_at', 'asc')->simplepaginate(3)
]);
});