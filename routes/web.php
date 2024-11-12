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
Route::get('dashboard', function () {
    return view('admin.dashboard.dash');
});
Route::get('footer', function () {
    return view('admin.footer.footer');
});
Route::get('candidature', function () {
    return view('admin.candidature.candidature');
});
Route::get('equipes', function () {
    return view('admin.equipe.equipe');
});
Route::get('clients', function () {
    return view('admin.clients.clients');
});
Route::get('slide', function () {
    return view('admin.accueil.slide');
});
Route::get('contacts', function () {
    return view('admin.contacts.contact');
});
Route::get('messages', function () {
    return view('admin.contacts.message');
});
