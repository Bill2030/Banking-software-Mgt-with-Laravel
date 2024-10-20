<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountManagement;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class,'index'])->name('index');
    Route::get('/admin/account', [AdminController::class,'account'])->name('account');
    Route::get('/admin/count', [AdminController::class,'count'])->name('count');
    Route::get('admin/summary', [AdminController::class,'summary'])->name('summary');
    Route::resource('/user', UserController::class);
    Route::resource('/accounts', AccountManagement::class);
    Route::get('/transactions', [TransactionController::class,'index'])->name('get.transactions');
    Route::post('/transactions', [TransactionController::class, 'postTransaction'])->name('post.transaction');
    Route::get('/transactions/deposit', [TransactionController::class,'deposit'])->name('deposit.transaction');
    Route::get('/transactions/withdraw', [TransactionController::class,'withdraw'])->name('withdraw.transaction');
    Route::resource('/customers', CustomerController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
