<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/',function(){
    return redirect()->route('admin.dashboard');
});
use Illuminate\Foundation\Application;

use App\Http\Controllers\Admin\{
    AuthenticationController,
    BlogController,
    QuestionsController,
    GalleryController,
    BillBoardController
};
// use App\Http\Controllers\Admin\BlogController;
// use App\Http\Controllers\Admin\QuestionsController;
// use App\Http\Controllers\Admin\GalleryController;
// use App\Http\Controllers\Admin\BillBoardController;


Route::get('login',[AuthenticationController::class,'create'])->name('admin.login');
Route::post('login',[AuthenticationController::class,'store'])->name('admin.login.post');

Route::group(['middleware' => 'admin'],function(){
    Route::get('dashboard',[AuthenticationController::class,'index'])->name('admin.dashboard');
    Route::get('logout',[AuthenticationController::class,'logout'])->name('admin.logout');
    // Route::get('blogs',[AuthenticationController::class,'index'])->name('admin.dashboard');
    Route::group(['prefix' => 'blogs'],function(){
        Route::get('/', [BlogController::class,'index'])->name('admin.blog');
        Route::get('create', [BlogController::class,'create'])->name('admin.blog.create');
        Route::post('store', [BlogController::class,'store'])->name('admin.blog.store');
        Route::get('/{id}/edit', [BlogController::class,'edit'])->name('admin.blog.edit');
        Route::get('/{id}/featured', [BlogController::class,'featured'])->name('admin.blog.featured');
        Route::post('/{id}/update', [BlogController::class,'update'])->name('admin.blog.update');
        Route::get('/{id}/delete', [BlogController::class,'destroy'])->name('admin.blog.delete');
    });
    Route::group(['prefix' => 'questions'],function(){
        Route::get('/', [QuestionsController::class,'index'])->name('admin.question');
        Route::get('create', [QuestionsController::class,'create'])->name('admin.question.create');
        Route::post('store', [QuestionsController::class,'store'])->name('admin.question.store');
        Route::get('/{id}/edit', [QuestionsController::class,'edit'])->name('admin.question.edit');
        Route::post('/{id}/update', [QuestionsController::class,'update'])->name('admin.question.update');
        Route::get('/{id}/delete', [QuestionsController::class,'destroy'])->name('admin.question.delete');
        Route::get('/{id}/status', [QuestionsController::class,'status'])->name('admin.question.status');

        Route::get('/{id}/contributers', [QuestionsController::class,'contributers'])->name('admin.question.contributers');
        Route::get('/{id}/contributers/{cid}/view', [QuestionsController::class,'contributerView'])->name('admin.question.contributerView');
        Route::get('/{id}/contributers/{cid}/status', [QuestionsController::class,'contributerStatus'])->name('admin.question.contributerStatus');
    });
    Route::group(['prefix' => 'gallery'],function(){
        Route::get('/', [GalleryController::class,'index'])->name('admin.gallery');
        Route::get('create', [GalleryController::class,'create'])->name('admin.gallery.create');
        Route::post('store', [GalleryController::class,'store'])->name('admin.gallery.store');
        Route::get('/{id}/edit', [GalleryController::class,'edit'])->name('admin.gallery.edit');
        Route::post('/{id}/update', [GalleryController::class,'update'])->name('admin.gallery.update');
        Route::get('/{id}/delete', [GalleryController::class,'destroy'])->name('admin.gallery.delete');
    });

    Route::group(['prefix' => 'bill-board'],function(){
        Route::get('/', [BillBoardController::class,'index'])->name('admin.bill');
        Route::get('html', [BillBoardController::class,'html'])->name('admin.bill.sub.html');
        Route::get('create', [BillBoardController::class,'create'])->name('admin.bill.create');
        Route::post('store', [BillBoardController::class,'store'])->name('admin.bill.store');
        Route::get('/{id}/edit', [BillBoardController::class,'edit'])->name('admin.bill.edit');
        Route::post('/{id}/update', [BillBoardController::class,'update'])->name('admin.bill.update');
        Route::get('/{id}/delete', [BillBoardController::class,'destroy'])->name('admin.bill.delete');
    });
    
});