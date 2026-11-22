<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ==========================================
// RUTE UNTUK LATEE PUTRA
// ==========================================
Route::name('latee.')->group(function () {
    Route::get('programs/latee/pendidikan', [ProgramController::class, 'lateePendidikan'])->name('programs.pendidikan');
    Route::get('programs/latee/peribadatan', [ProgramController::class, 'lateePeribadatan'])->name('programs.peribadatan');
    Route::get('programs/latee/peminatan', [ProgramController::class, 'lateePeminatan'])->name('programs.peminatan');
    Route::get('programs/latee/publikasi', [ProgramController::class, 'lateePublikasi'])->name('programs.publikasi');
    Route::get('programs/latee/kesehatan', [ProgramController::class, 'lateeKesehatan'])->name('programs.kesehatan');
    Route::get('programs/latee/ketertiban', [ProgramController::class, 'lateeKetertiban'])->name('programs.ketertiban');
    Route::get('programs/latee/infrastruktur', [ProgramController::class, 'lateeInfrastruktur'])->name('programs.infrastruktur');
    Route::get('programs/latee/unit', [ProgramController::class, 'lateeUnit'])->name('programs.unit');
});

// ==========================================
// RUTE UNTUK LATEE I PUTRI
// ==========================================
Route::name('lateei.')->group(function () {
    Route::get('programs/lateei/pendidikan', [ProgramController::class, 'lateeiPendidikan'])->name('programs.pendidikan');
    Route::get('programs/lateei/peribadatan', [ProgramController::class, 'lateeiPeribadatan'])->name('programs.peribadatan');
    Route::get('programs/lateei/peminatan', [ProgramController::class, 'lateeiPeminatan'])->name('programs.peminatan');
    Route::get('programs/lateei/publikasi', [ProgramController::class, 'lateeiPublikasi'])->name('programs.publikasi');
    Route::get('programs/lateei/kesehatan', [ProgramController::class, 'lateeiKesehatan'])->name('programs.kesehatan');
    Route::get('programs/lateei/ketertiban', [ProgramController::class, 'lateeiKetertiban'])->name('programs.ketertiban');
    Route::get('programs/lateei/infrastruktur', [ProgramController::class, 'lateeiInfrastruktur'])->name('programs.infrastruktur');
    Route::get('programs/lateei/unit', [ProgramController::class, 'lateeiUnit'])->name('programs.unit');
});

// ==========================================
// RUTE UNTUK LATEE II PUTRI
// ==========================================
Route::name('lateeii.')->group(function () {
    Route::get('programs/lateeii/pendidikan', [ProgramController::class, 'lateeiiPendidikan'])->name('programs.pendidikan');
    Route::get('programs/lateeii/peribadatan', [ProgramController::class, 'lateeiiPeribadatan'])->name('programs.peribadatan');
    Route::get('programs/lateeii/peminatan', [ProgramController::class, 'lateeiiPeminatan'])->name('programs.peminatan');
    Route::get('programs/lateeii/publikasi', [ProgramController::class, 'lateeiiPublikasi'])->name('programs.publikasi');
    Route::get('programs/lateeii/kesehatan', [ProgramController::class, 'lateeiiKesehatan'])->name('programs.kesehatan');
    Route::get('programs/lateeii/ketertiban', [ProgramController::class, 'lateeiiKetertiban'])->name('programs.ketertiban');
    Route::get('programs/lateeii/infrastruktur', [ProgramController::class, 'lateeiiInfrastruktur'])->name('programs.infrastruktur');
    Route::get('programs/lateeii/tata-busana', [ProgramController::class, 'lateeiiTataBusana'])->name('programs.tata-busana');
    Route::get('programs/lateeii/unit', [ProgramController::class, 'lateeiiUnit'])->name('programs.unit');
});

Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::get('pendaftaran', [RegistrationController::class, 'index'])->name('pendaftaran');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::view('blogs/show', 'blogs.show')->name('blogs.show');
Route::view('blogs/index', 'blogs.index')->name('blogs.index');

Route::middleware(['role:admin'])->group(function () {
    Route::livewire('admin/manage-roles', 'admin.manage-roles')->name('admin.manage-roles');
    Route::livewire('admin/manage-users', 'admin.manage-users')->name('admin.manage-users');
    Route::livewire('admin/manage-settings', 'admin.manage-settings')->name('admin.manage-settings');

    Route::livewire('admin/manage-posts', 'admin.manage-posts')->name('admin.manage-posts');
    Route::livewire('admin/posts/create', 'admin.posts.create')->name('admin.posts.create');
    Route::livewire('admin/posts/{post}/edit', 'admin.posts.edit')->name('admin.posts.edit');
});

require __DIR__.'/settings.php';
