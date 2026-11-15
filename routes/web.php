<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});
// ==========================================
// RUTE UNTUK LATEE PUTRA
// ==========================================
Route::name('latee.')->group(function () {
    Route::view('programs/latee/pendidikan', 'programs.latee.pendidikan')->name('programs.pendidikan');
    Route::view('programs/latee/peribadatan', 'programs.latee.peribadatan')->name('programs.peribadatan');
    Route::view('programs/latee/peminatan', 'programs.latee.peminatan')->name('programs.peminatan');
    Route::view('programs/latee/publikasi', 'programs.latee.publikasi')->name('programs.publikasi');
    Route::view('programs/latee/kesehatan', 'programs.latee.kesehatan')->name('programs.kesehatan');
    Route::view('programs/latee/ketertiban', 'programs.latee.ketertiban')->name('programs.ketertiban');
    Route::view('programs/latee/infrastruktur', 'programs.latee.infrastruktur')->name('programs.infrastruktur');
    Route::view('programs/latee/unit', 'programs.latee.unit')->name('programs.unit');
});
Route::name('lateei.')->group(function () {
    Route::view('programs/lateei/pendidikan', 'programs.lateei.pendidikan')->name('programs.pendidikan');
    Route::view('programs/lateei/peribadatan', 'programs.lateei.peribadatan')->name('programs.peribadatan');
    Route::view('programs/lateei/peminatan', 'programs.lateei.peminatan')->name('programs.peminatan');
    Route::view('programs/lateei/publikasi', 'programs.lateei.publikasi')->name('programs.publikasi');
    Route::view('programs/lateei/kesehatan', 'programs.lateei.kesehatan')->name('programs.kesehatan');
    Route::view('programs/lateei/ketertiban', 'programs.lateei.ketertiban')->name('programs.ketertiban');
    Route::view('programs/lateei/infrastruktur', 'programs.lateei.infrastruktur')->name('programs.infrastruktur');
    Route::view('programs/lateei/unit', 'programs.lateei.unit')->name('programs.unit');
});
Route::name('lateeii.')->group(function () {
    Route::view('programs/lateeii/pendidikan', 'programs.lateeii.pendidikan')->name('programs.pendidikan');
    Route::view('programs/lateeii/peribadatan', 'programs.lateeii.peribadatan')->name('programs.peribadatan');
    Route::view('programs/lateeii/peminatan', 'programs.lateeii.peminatan')->name('programs.peminatan');
    Route::view('programs/lateeii/publikasi', 'programs.lateeii.publikasi')->name('programs.publikasi');
    Route::view('programs/lateeii/kesehatan', 'programs.lateeii.kesehatan')->name('programs.kesehatan');
    Route::view('programs/lateeii/ketertiban', 'programs.lateeii.ketertiban')->name('programs.ketertiban');
    Route::view('programs/lateeii/infrastruktur', 'programs.lateeii.infrastruktur')->name('programs.infrastruktur');
    Route::view('programs/lateeii/tata-busana', 'programs.lateeii.tata-busana')->name('programs.tata-busana');
    Route::view('programs/lateeii/unit', 'programs.lateeii.unit')->name('programs.unit');
});
Route::view('profile', 'profile')->name('profile');
Route::view('pendaftaran', 'pendaftaran')->name('pendaftaran');
Route::view('contact', 'contact')->name('contact');
Route::view('blogs/show', 'blogs.show')->name('blogs.show');
Route::view('blogs/index', 'blogs.index')->name('blogs.index');

Route::middleware(['role:admin'])->group(function () {
    Route::livewire('admin/manage-roles', 'admin.manage-roles')->name('admin.manage-roles');
    Route::livewire('admin/manage-users', 'admin.manage-users')->name('admin.manage-users');
});

require __DIR__.'/settings.php';
