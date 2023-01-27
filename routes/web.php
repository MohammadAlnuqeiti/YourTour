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
use App\Http\Controllers\User\Search;

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

Route::get('/admin/table', function () {
    return view('admin.table');
});

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');

})->middleware(['auth', 'verified','admin'])->name('dashboard');


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
    // Route::get('/search', 'SearchController@search')->name('search');
  
Route::prefix('user')->name('user.')->group(function () {



Route::get('/',[PublicUserController::class,'index'])->name('index');
Route::get('/categories/{id}',[PublicUserController::class,'show'])->name('categories.show');

Route::get('/about',function(){
    return view('publicUser.about');
})->name('about');

Route::get('/contact',function(){
    return view('publicUser.contact');
})->name('contact');

Route::resource('/signup',RegisterUserController::class);
Route::post('/search' , [Search::class , 'search'])->name('search');
Route::get('/login',[LoginUserController::class,'index'])->name('login');
Route::get('/login/check',[LoginUserController::class,'LoginPost'])->name('login.check');
Route::get('/login/destroy',[LoginUserController::class,'destroy'])->name('login.destroy');

Route::resource('/profile',ProfileUserController::class);

Route::get('/package_details/{id}',[PackageDetailsController::class,'index'])->name('package.details');

Route::get('/trip_details/{id}',[TripsDetailsController::class,'index'])->name('trip.details');
Route::get('/booking/{id}',[BookController::class,'index'])->name('book');
Route::get('/booking/create/{id}',[BookController::class,'create'])->name('book.create');

});
require __DIR__.'/auth.php';
