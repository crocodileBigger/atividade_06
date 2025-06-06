<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\PublishersController;

Route::resource('publishers', PublishersController::class);
Route::resource('Author', AuthorsController::class);
Route::resource('categories', CategoryController::class);
