<?php

use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class,'home'])->name('home');
Route::get('/categoria/{category}',[PublicController::class,'categoryShow'])->name('categoryShow');
Route::get('/dettaglio/annuncio/{announcement}',[AnnouncementController::class,'showAnnouncement'])->name('announcements.show');
Route::get('/annunci/create', [AnnouncementController::class,'create'])->middleware('auth')->name('create');
Route::get('/tutti/annunci',[AnnouncementController::class,'index'])->name('announcements.index');
Route::get('/profile', [PublicController::class, 'index'])->name('profile.profile');
Route::delete('/profile/delete',[PublicController::class, 'destroy'])->name('profile.delete');
Route::get('/revisor/home', [RevisorController::class, 'index'])->name('revisor.index');
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject');

