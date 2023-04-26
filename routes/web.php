<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\User\IndexController::class, 'index']);
Route::get('/posts/{id}', [App\Http\Controllers\User\PostController::class, 'show']);



//'middleware' => ['admin', 'auth']
Route::group(['prefix' => 'boomee', ], function(){
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');

//    Route::post('/posts/preview', [\App\Http\Controllers\Admin\PostController::class, 'preview'])->name('admin.post.preview');

    Route::resources([
        'categories' => \App\Http\Controllers\Admin\CategoryController::class,
        'tags' => \App\Http\Controllers\Admin\TagController::class,
        'users' => \App\Http\Controllers\Admin\UserController::class,
        'posts' => \App\Http\Controllers\Admin\PostController::class,
    ]);
});

Auth::routes();

