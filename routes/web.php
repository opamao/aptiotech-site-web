<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about.about');
});
Route::get('teams', function () {
    return view('teams.teams');
});
Route::get('carrier', function () {
    return view('carrier.carrier');
});
Route::get('carrier-detail', function () {
    return view('carrier.carrier-detail');
});
Route::get('projects', function () {
    return view('project.project');
});
Route::get('contact', function () {
    return view('contact.contact');
});


// Admin

Route::get('aptiotech', function () {
    return view('admin.auth.login');
});
Route::get('reset', function () {
    return view('admin.auth.reset');
});
