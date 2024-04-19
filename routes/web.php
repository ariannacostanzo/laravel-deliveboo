<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DishController as AdminDishController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RestaurantController;

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

Route::get('/', [RestaurantController::class, 'show']);

Route::get('/dashboard', function () {
    // $user_id = Auth::id();
    // $user = User::whereId($user_id)->get();
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function () {
    Route::patch('/dishes/{dish}/visible', [AdminDishController::class, 'toggleVisible'])->name('dishes.visible');
    Route::resource('/dishes', AdminDishController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/dishes', AdminDishController::class);
});
require __DIR__ . '/auth.php';
