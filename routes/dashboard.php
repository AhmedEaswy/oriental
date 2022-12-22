<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Setting;

Route::group(['namespace' => 'App\Http\Controllers\Admin',], function () {
    Auth::routes([
        'register' => false,
        'confirm' => false,
        'verify' => false,
        'reset' => false,
    ]);
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('project', ProjectController::class)->except(['show']);
        Route::resource('user', UserController::class)->except(['show']);
        Route::resource('contact', ContactController::class)->except(['show']);
        Route::get('settings', [SettingController::class,'index'])->name('settings');
        Route::post('settings/{setting}', [SettingController::class,'update'])->name('setting.update');
        Route::post('settings/clear/cache', [SettingController::class,'forceRefreshCache'])->name('clear.cache');
    });
});
