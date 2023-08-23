<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminContact;
use App\Http\Controllers\AuthUsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientAboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomePageController::class, 'index']);
Route::get('/about', [ClientAboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/message-send', [ContactController::class, 'postMessage']);
Route::get('/post-content/{id}', [HomePageController::class, 'blogDetail']);

// post controller
// Route::get('/post', function () {
//     return view('client.post');
// });

Route::get('/admin-hakkimda', [AboutController::class, 'index']);
Route::get('/admin-hakkimda-update', [AboutController::class, 'aboutUpdate']);

Route::get('/admin-add-post-action', [BlogController::class, 'addPostAction']);
Route::get('/admin-edit-post-action', [BlogController::class, 'editPostAction']);
Route::get('/admin-edit-post/{id?}', [BlogController::class, 'editPostPage']);
Route::get('/admin-delete-post/{id?}', [BlogController::class, 'deletePost']);
Route::get('/admin-blog-yaz', [BlogController::class, 'index']);

Route::get('/admin-contact', [AdminContact::class, 'index']);

Route::get('/admin', [AuthUsersController::class, 'checkUserLogin']);
Route::get('/authlogin', [AuthUsersController::class, 'loginUser']);
Route::get('/logout', [AuthUsersController::class, 'logOutUser']);
