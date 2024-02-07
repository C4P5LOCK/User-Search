<?php
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PdfController;
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

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/', [UserInfoController::class, 'index']);
 Route::post('/search', [UserInfoController::class, 'search']);
 Route::get('/verify', [UserInfoController::class, 'verify'])->name('verify');
 Route::get('/pdf', [PdfController::class, 'print'])->name('pdf');
//  Route::get('/login', function(){
// return view ('')
//  })


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/create', [AdminController::class, 'createUserForm']);
    Route::post('/admin/store', [AdminController::class, 'storeUser']);
    Route::get('/admin/users', [AdminController::class, 'AllUsers'])->name('viewusers');
    Route::get('/admin/show/{user}', [AdminController::class, 'show'])->name('show');

    // Route::get('/admin/create', 'AdminController@createUserForm');
    // Route::post('/admin/store', 'AdminController@storeUser');
});
