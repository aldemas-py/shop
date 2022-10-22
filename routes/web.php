<?php

use App\Models\Listing;
use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\listing_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|
//Common Resourses Routes

// index - show all listings
// show - show single listings
// create  - shows form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listings
// destroy - Delete listing--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function ()
// {
//     return response('hello wold!');
// });

// Route::get('/post/{id}', function ($id) {
// //    debugging
//     // dd($id);
//     // ddd($id);
//     return response('post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
// dd($request->name .' ' . $request->citi);
// });

// development started
//   All listings

Route::get('/ls', function () {
    Artisan::call('storage:link');
});

Route::get('/', [ListingController::class, 'index']);

// show create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// store Listing

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Update Listing

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Mange Listings

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
// Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User

Route::post('/users', [UserController::class, 'store']);

// Log User Out

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Show Login Form

Route::get('/admin', [UserController::class, 'admin'])->name('admin')->middleware('guest');

//Login User

Route::post('/users/authenticate', [UserController::class, 'authenticate']);