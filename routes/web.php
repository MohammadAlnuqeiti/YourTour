<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/table', function () {
    return view('admin.table');
});
Route::get('/', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');

})->middleware(['auth', 'verified','admin'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function()
{
Route::get('/',[AdminController::class,'index'])->name('index');
});



require __DIR__.'/auth.php';
