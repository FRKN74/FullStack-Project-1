<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\adminController;


use App\Http\Controllers\Back\backController;
use App\Http\Controllers\Back\personController;
use App\Http\Controllers\Back\productController;
use App\Http\Controllers\Back\SliderController;


use App\Http\Controllers\Front\frontController;

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


Route::middleware('isLogin')->group(function () {

    Route::get('/giris',[adminController::class,'login'])->name('login');
    Route::post('/giris',[adminController::class,'loginPost'])->name('loginPost');
});



Route::middleware('isAdmin')->name('admin.')->group(function () {

    Route::get('admin/panel',[backController::class,'dashboard'])->name('dashboard');

        //Product
        Route::get('/product',[productController::class,'product'])->name('product');
        Route::post('/product',[productController::class,'productPost'])->name('productPost');
        Route::get('/product/update/{id}',[productController::class,'update'])->name('productUpdate');
        Route::post('/product/update/{id}',[productController::class,'updatePost'])->name('productUpdatePost');
        Route::get('/product/delete/{id}',[productController::class,'productDelete'])->name('productDelete');


        //Person
        Route::get('/profession',[personController::class,'profession'])->name('profession');
        Route::post('/profession',[personController::class,'professionCreate'])->name('professionCreate');
        Route::get('/profession/update/{id}',[personController::class,'professionUpdate'])->name('professionUpdate');
        Route::post('/profession/update/{id}',[personController::class,'professionUpdatePost'])->name('professionUpdatePost');
        Route::get('/profession/delete/{id}',[personController::class,'professionDelete'])->name('professionDelete');


        //Slider
        Route::get('/sliders',[SliderController::class,'slider'])->name('slider');
        Route::post('/sliders',[SliderController::class,'sliderCreate'])->name('sliderCreate');
        Route::get('/update/{id}',[SliderController::class,'update'])->name('sliderUpdate');
        Route::post('/update/{id}',[SliderController::class,'updatePost'])->name('sliderUpdatePost');
        Route::get('/delete/{id}',[SliderController::class,'delete'])->name('sliderDelete');

        Route::get('switch',[SliderController::class,'switch'])->name('switch');




    Route::get('logout',[adminController::class,'logout'])->name('logout');

});






//Front
Route::get('/',[frontController::class,'index'])->name('index');

Route::get('/allviews',[frontController::class,'allview'])->name('allview');