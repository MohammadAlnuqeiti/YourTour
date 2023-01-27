<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CatregoryController;
use App\Http\Controllers\Admin\TripController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\User\PublicUserController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\PackageDetailsController;
use App\Http\Controllers\User\TripsDetailsController;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\User\ProfileUserController;

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

Route::middleware(['auth','verified','admin'])->name('admin.')->prefix('admin')->group(function()
{
Route::get('/',[AdminController::class,'index'])->name('index');
Route::resource('/users',UserController::class);
Route::resource('/categories',CatregoryController::class);
Route::resource('/trips',TripController::class);
Route::resource('/reservation',ReservationController::class);
});

//---------------------------------------

//  route user


Route::prefix('user')->name('user.')->group(function () {



Route::get('/',[PublicUserController::class,'index'])->name('index');

Route::get('/about',function(){
    return view('publicUser.about');
})->name('about');

Route::get('/contact',function(){
    return view('publicUser.contact');
})->name('contact');

// Route::get('/login',function(){
//     return view('publicUser.login');
// });

Route::resource('/signup',RegisterUserController::class);

Route::get('/login',[LoginUserController::class,'index'])->name('login');
Route::get('/login/check',[LoginUserController::class,'LoginPost'])->name('login.check');
Route::get('/login/destroy',[LoginUserController::class,'destroy'])->name('login.destroy');

Route::resource('/profile',ProfileUserController::class);

Route::get('/package_details',[PackageDetailsController::class,'index'])->name('package.details');

Route::get('/trip_details/{id}',[TripsDetailsController::class,'index'])->name('trip.details');
Route::get('/booking/{id}',[BookController::class,'index'])->name('book');

// Route::get('/book',function(){
//     return view('publicUser.book');
// });

// Route::get('/details',function(){
//     return view('publicUser.details');
// });
});
require __DIR__.'/auth.php';
