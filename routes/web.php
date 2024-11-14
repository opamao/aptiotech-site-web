<?php

use App\Http\Controllers\CandidaturesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\EquipesController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\SlidesController;
use App\Models\Candidatures;
use App\Models\Clients;
use App\Models\Contacts;
use App\Models\Equipes;
use App\Models\Messages;
use App\Models\Projets;
use App\Models\Slides;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $slide = Slides::latest()->first();
    $client = Clients::all();
    return view('welcome', compact('slide', 'client'));
});
Route::get('about', function () {
    return view('about.about');
});
Route::get('teams', function () {
    $equipe = Equipes::all();
    return view('teams.teams', compact('equipe'));
});
Route::get('carrier', function () {
    return view('carrier.carrier');
});
Route::get('carrier-detail', function () {
    return view('carrier.carrier-detail');
});
Route::get('projects', function () {
    $projet = Projets::all();
    return view('project.project', compact('projet'));
});
Route::get('contact', function () {
    $contact = Contacts::latest()->first();
    return view('contact.contact', compact('contact'));
});


// Admin
Route::get('aptiotech', function () {
    return view('admin.auth.login');
});
Route::get('reset', function () {
    return view('admin.auth.reset');
});
Route::get('dashboard', function () {

    $projet = Projets::count();
    $client = Clients::count();
    $candidat = Candidatures::count();
    $message = Messages::count();
    $equipe = Equipes::count();

    return view('admin.dashboard.dash', compact('projet', 'client', 'candidat', 'message', 'equipe'));
});

Route::resource('slide', SlidesController::class);
Route::resource('contacts', ContactsController::class);
Route::resource('messages', MessagesController::class);
Route::resource('clients', ClientsController::class);
Route::resource('membres', EquipesController::class);
Route::resource('candidature', CandidaturesController::class);
Route::resource('footer', FooterController::class);
Route::resource('realisation', ProjetsController::class);
