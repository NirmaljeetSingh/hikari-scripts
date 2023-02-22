<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    HomeController,
    BlogController
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('test',function(){
    return route_list();
});
Route::get('profile',function(){
    return view('pages.user.profile');
})->name('profile');
Route::get('profile/edit',function(){
    return view('pages.user.profile-edit');
})->name('profile-edit');
// Route::get('/login', function () {
//     return view('pages.login');
// })->name('login');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('blog/{id}/{name}',[BlogController::class,'show'])->name('blog.show');
Route::post('blog/like/{id}',[BlogController::class,'like'])->name('blog.like');

Route::group(['middleware' => 'auth'],function(){
    Route::resource('profile',UserController::class);
});
// Route::get('questionnaire',)