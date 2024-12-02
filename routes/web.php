<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/', [WebController::class, 'product'])->name('product');
Route::get('/', [WebController::class, 'addtocart'])->name('addtocart');
Route::get('/', [WebController::class, 'contact'])->name('contact');
Route::get('/', [WebController::class, 'about'])->name('about');
Route::get('/', [WebController::class, 'form'])->name('form');
Route::get('/', [WebController::class, 'description'])->name('description');
Route::get('/login', [WebController::class, 'login'])->name('login');
Route::get('/register', [WebController::class, 'register'])->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/index', function () {
    return view('web.index');
})->name('index');



Route::get('/form', function () {
    return view('web.form');
})->name('form');

Route::get('/about', function () {
    return view('web.about');
})->name('about');

Route::get('/contact', function () {
    return view('web.contact');
})->name('contact');

Route::get('/addtocart', function () {
    return view('web.addtocart');
})->name('addtocart');

Route::get('/product', function () {
    return view('web.product');
})->name('product');

Route::get('/create',[ProductController::class,'create'])->name('web.create');
Route::get('/admin',[ProductController::class,'admin'])->name('web.admin');
Route::post('/store',[ProductController::class,'store'])->name('web.store');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('web.edit');
Route::put('/products/{product}',[ProductController::class,'update'])->name('web.update');

Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('web.destroy');

require __DIR__.'/auth.php';
