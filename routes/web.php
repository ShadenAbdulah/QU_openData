<?php

use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\DatasetsController;
use App\Http\Controllers\ProvisionServer;
use Illuminate\Support\Facades\Route;

Route::get('/', ProvisionServer::class);
Route::resource('/dataset', DatasetsController::class);
Route::get('/datasets/tags/{tag}', [DatasetsController::class, 'index'])->name('landing.tags.index');

Route::middleware('admin')->prefix('admin/')->group(function () {
    Route::resource('datasets', Admin\DatasetsController::class);
    Route::resource('tags', Admin\TagsController::class);
    Route::resource('datasets_tags', Admin\DatasetsTagsController::class);
    Route::get('datasets/tags/{tag}', [Admin\DatasetsController::class, 'index'])->name('datasets.tags');
    Route::post('datasets/{dataset}/tags', [Admin\DatasetsTagsController::class, 'store'])->name('datasets.tags.store');
    Route::delete('datasets/{dataset}/tags/{tag}', [Admin\DatasetsTagsController::class, 'destroy'])->name('datasets.tags.destroy');
    Route::resource('users', Admin\UsersController::class);
});

require __DIR__ . '/auth.php';
