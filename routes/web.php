<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomesController;
use App\Http\Controllers\Back\LoginController;
use App\Http\Controllers\Back\HomeController;
use App\Http\Controllers\Back\SponsorController;
use App\Http\Controllers\Back\BlogController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\IletisimController;
use App\Http\Controllers\Back\VideoController;
use App\Http\Controllers\Back\ProductionController;


Route::get('/detail', function () {
    return view('fronts.detail');
});


    Route::get('/',[HomesController::class,'index'])->name('home');
    Route::get('/contact',[HomesController::class,'iletisim'])->name('iletisim');
    Route::post('/contact',[HomesController::class,'iletisimpost'])->name('iletisim.post');
    Route::get('/blog',[HomesController::class,'blogs'])->name('blog');
    Route::get('/video',[HomesController::class,'video'])->name('publising');
    Route::get('/production',[HomesController::class,'production'])->name('production');
    Route::get('/publishing',[HomesController::class,'yayıncılık'])->name('yayıncılık');
    Route::get('/invesment',[HomesController::class,'yatırım'])->name('yatırım');
    Route::get('/design',[HomesController::class,'sponsorlar'])->name('sponsorlar');
    Route::get('/about',[HomesController::class,'about'])->name('about');
    Route::get('/lang',[HomesController::class,'lang'])->name('lang');




Route::prefix('admin')->middleware('isLogin')->group(function () {
    Route::get('login',[LoginController::class,'index'])->name('login');
    Route::post('login',[LoginController::class,'login'])->name('login.post');
});


Route::prefix('admin')->middleware('isAdmin')->group(function (){
    Route::get('home',[HomeController::class,'index'])->name('back.home');
    //sponsorlar
    Route::get('sponsorlar',[SponsorController::class,'index'])->name('back.sponsorlar');
    Route::get('sponsor/ekle',[SponsorController::class,'create'])->name('back.create.sponsor');
    Route::post('sponsorlar',[SponsorController::class,'store'])->name('back.sponsorlar.post');
    Route::get('sponsor/delete/{id}',[SponsorController::class,'delete'])->name('back.sponsor.delete');
    //bloglar
    Route::get('blog',[BlogController::class,'index'])->name('back.blog');
    Route::post('blog',[BlogController::class,'store'])->name('back.blog.post');
    Route::get('bloglar',[BlogController::class,'blogs'])->name('back.blogs');
    Route::resource('blogs', BlogController::class);
    Route::get('switch/blog',[BlogController::class,'switch'])->name('back.blog.switch');
    Route::get('delete/{id}',[BlogController::class,'delete'])->name('back.blog.delete');
    Route::get('trashed',[BlogController::class,'trashed'])->name('back.blog.trashed');
    Route::get('recover/{id}',[BlogController::class,'recover'])->name('back.blog.recover');
    Route::get('forcedelete/{id}',[BlogController::class,'forcedelete'])->name('back.blog.forcedelete');
    //categoriler
    Route::get('categoriler',[CategoryController::class,'index'])->name('back.category');
    Route::post('categoriler',[CategoryController::class,'store'])->name('back.category.post');
    Route::get('switch/kategori',[CategoryController::class,'switch'])->name('back.category.switch');
    Route::get('categori/{id}',[CategoryController::class,'delete'])->name('back.category.delete');

    //mesajlar
    Route::get('contact',[IletisimController::class,'index'])->name('back.iletisim');
    Route::get('contact/{id}',[IletisimController::class,'deletemessage'])->name('back.iletisim.delete');

    //Akademi videolar
    Route::get('egitim',[VideoController::class,'index'] )->name('back.videolar');
    Route::post('egitim/post',[VideoController::class,'vidpost'] )->name('back.vid.post');
    Route::get('egitimler',[VideoController::class,'eklenenvid'])->name('back.adds.vid');
    Route::get('switch/vid',[VideoController::class,'switch'])->name('back.vid.switch');
    Route::get('egitim/{id}',[VideoController::class,'delete'])->name('back.vid.delete');

    //Prodactions
    Route::resource('prods', ProductionController::class);
    Route::get('productions',[ProductionController::class,'index'])->name('back.productions');
    Route::get('production',[ProductionController::class,'showadd'])->name('back.production');
    Route::post('production/add',[ProductionController::class,'add'])->name('back.productions.post');
    Route::get('switch/prod',[ProductionController::class,'switch'])->name('back.prod.switch');
    Route::get('prod/delete/{id}',[ProductionController::class,'delete'])->name('back.prod.delete');

    //admin settings
    Route::get('create/user',[LoginController::class,'create'])->name('back.store.user');
    Route::post('create/user',[LoginController::class,'add'])->name('back.add.user');
    Route::get('users', [LoginController::class,'users'])->name('back.users');

    Route::get('cikis',[LoginController::class,'logout'])->name('cikis');



});

