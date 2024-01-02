<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendCmsController;
use App\Http\Controllers\Weddininfo;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/', [FrontendCmsController::class, 'staticContent']);
Route::get('/sample-2', [FrontendCmsController::class, 'sampleTwo']);
Route::get('/sample-3', [FrontendCmsController::class, 'sampleThree']);

// authentication
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('/dashboard', [AuthController::class, 'dashboard']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/add-wedding-info', [Weddininfo::class, 'getWeddingInfo']);
Route::get('/add-pre-wedding-info', [Weddininfo::class, 'addPreWeddingInfo']);
Route::post('/addWeddingInfo', [Weddininfo::class, 'store']);
Route::get('/get-info', [FrontendCmsController::class, 'getInfoFromClinet']);
// Route::get('/{uuid}', [FrontendCmsController::class, 'index']);
