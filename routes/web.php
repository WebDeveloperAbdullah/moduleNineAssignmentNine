<?php

use App\Http\Controllers\PortfolioViewController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'portfolio'],function(){
    Route::get('/',[PortfolioViewController::class,'home'])->name('home');
    Route::get('/aboutMe',[PortfolioViewController::class,'aboutMe'])->name('aboutMe');
    Route::get('/projects',[PortfolioViewController::class,'projects'])->name('projects');
    Route::get('/contact',[PortfolioViewController::class,'contact'])->name('contact');
});