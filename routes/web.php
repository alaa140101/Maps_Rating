<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CategoryController,
    ContactController,
    PlaceController,
    ReviewController,
    LikeController,
    SearchController,
    };
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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/search', [SearchController::class, 'autoComplete'])->name('auto-complete');
Route::post('/search', [SearchController::class, 'show'])->name('search');

Route::get('/{category:slug}', [CategoryController::class, 'show'])->name('category.show');

Route::resource('report', ContactController::class, ['only' => ['create', 'store']]);

Route::get('/place/create', [PlaceController::class, 'create'])->name('place.create');

Route::get('/', [PlaceController::class, 'index'])->name('home');

Route::get('/{place}/{slug}', [PlaceController::class, 'show'])->name('place.show');

Route::post('review', [ReviewController::class, 'store'])->name('review.store');
Route::post('like', [LikeController::class, 'store'])->name('like.store');

