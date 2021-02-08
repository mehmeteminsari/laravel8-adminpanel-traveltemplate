<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home.index');
});

// 20.video
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/home',[HomeController::class,'index'])->name('homepage');
Route::get('/aboutus',[HomeController::class,'aboutus'])->name('aboutus');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/userprofile',[HomeController::class,'userprofile'])->name('userprofile');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/sendmessage',[HomeController::class,'sendmessage'])->name('sendmessage');
Route::get('/product/{id}/{city}',[HomeController::class,'product'])->name('product');
Route::get('/categoryproducts/{id}/{city}',[HomeController::class,'categoryproducts'])->name('categoryproducts');
Route::get('/addtocart/{id}',[HomeController::class,'addtocart'])->name('addtocart');
//Route::get('/test/{id}/{name}',[HomeController::class,'test'])->whereNumber('id')->name('test');
Route::post('/getproduct',[HomeController::class,'getproduct'])->name('getproduct');
Route::get('/productlist/{search}',[HomeController::class,'productlist'])->name('productlist');



Route::get('/home', [HomeController::class, 'index']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);


//ADMIN
Route::middleware('auth')->prefix('admin')->group(function() {

    Route::middleware('admin')->group(function() {

        Route::get('/',[\App\Http\Controllers\admin\HomeController::class,'index'])->name('admin_home');

        Route::get('category',[\App\Http\Controllers\admin\CategoryController::class,'index'])->name('admin_category');
        Route::get('category/add',[\App\Http\Controllers\admin\CategoryController::class,'add'])->name('admin_category_add');
        Route::post('category/create',[\App\Http\Controllers\admin\CategoryController::class,'create'])->name('admin_category_create');
        Route::get('category/edit/{id}',[\App\Http\Controllers\admin\CategoryController::class,'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}',[\App\Http\Controllers\admin\CategoryController::class,'update'])->name('admin_category_update');
        Route::get('category/delete/{id}',[\App\Http\Controllers\admin\CategoryController::class,'destroy'])->name('admin_category_delete');
        Route::get('category/show',[\App\Http\Controllers\admin\CategoryController::class,'show'])->name('admin_category_show');
//PRODUCT
        Route::prefix('product')->group(function (){
            Route::get('/',[\App\Http\Controllers\admin\ProductController::class,'index'])->name('admin_products');
            Route::get('/create',[\App\Http\Controllers\admin\ProductController::class,'create'])->name('admin_product_add');
            Route::post('store',[\App\Http\Controllers\admin\ProductController::class,'store'])->name('admin_product_store');
            Route::get('edit/{id}',[\App\Http\Controllers\admin\ProductController::class,'edit'])->name('admin_product_edit');
            Route::post('update/{id}',[\App\Http\Controllers\admin\ProductController::class,'update'])->name('admin_product_update');
            Route::get('delete/{id}',[\App\Http\Controllers\admin\ProductController::class,'destroy'])->name('admin_product_delete');
            Route::get('show',[\App\Http\Controllers\admin\ProductController::class,'show'])->name('admin_product_show');
        });
//MESSAGE
        Route::prefix('messages')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
            Route::get('edit/{id}',[\App\Http\Controllers\admin\MessageController::class,'edit'])->name('admin_message_edit');
            Route::post('update/{id}',[\App\Http\Controllers\admin\MessageController::class,'update'])->name('admin_message_update');
            Route::get('delete/{id}',[\App\Http\Controllers\admin\MessageController::class,'destroy'])->name('admin_message_delete');
            Route::get('show',[\App\Http\Controllers\admin\MessageController::class,'show'])->name('admin_message_show');
        });


        #product images gallery
        Route::prefix('images')->group(function (){
            Route::get('/create/{product_id}',[\App\Http\Controllers\admin\ImageController::class,'create'])->name('admin_image_add');
            Route::post('/store/{product_id}',[\App\Http\Controllers\admin\ImageController::class,'store'])->name('admin_image_store');
            Route::get('/delete/{id}/{product_id}',[\App\Http\Controllers\admin\ImageController::class,'destroy'])->name('admin_image_delete');
            Route::get('/show',[\App\Http\Controllers\admin\ImageController::class,'show'])->name('admin_image_show');
        });
        #review
        Route::prefix('review')->group(function (){

            Route::get('/',[\App\Http\Controllers\Admin\ReviewController::class,'index'])->name('admin_review');
            Route::post('update/{id}',[\App\Http\Controllers\admin\ReviewController::class,'update'])->name('admin_review_update');
            Route::get('delete/{id}',[\App\Http\Controllers\admin\ReviewController::class,'destroy'])->name('admin_review_delete');
            Route::get('show/{id}',[\App\Http\Controllers\admin\ReviewController::class,'show'])->name('admin_review_show');
        });

        #setting
        Route::get('setting',[\App\Http\Controllers\admin\SettingController::class,'index'])->name('admin_setting');
        Route::post('setting/update',[\App\Http\Controllers\admin\SettingController::class,'update'])->name('admin_setting_update');

        Route::prefix('faq')->group(function () {

            Route::get('/', [App\Http\Controllers\Admin\FaqController::class, 'index'])->name("admin_faq");
            Route::get('/create', [App\Http\Controllers\Admin\FaqController::class, 'create'])->name("admin_faq_add");
            Route::post('/store', [App\Http\Controllers\Admin\FaqController::class, 'store'])->name("admin_faq_store");
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\FaqController::class, 'edit'])->name("admin_faq_edit");
            Route::post('/update/{id}', [App\Http\Controllers\Admin\FaqController::class, 'update'])->name("admin_faq_update");
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name("admin_faq_delete");
            Route::get('/show', [App\Http\Controllers\Admin\FaqController::class, 'show'])->name("admin_faq_show");
        });
    });
});


//user kismi
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('myprofile');
    Route::get('/myreviews',[UserController::class,'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}',[UserController::class,'destroymyreview'])->name('user_review_delete');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');

    Route::prefix('product')->group(function () {

        Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name("user_products");
        Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name("user_product_add");
        Route::post('/store', [App\Http\Controllers\ProductController::class, 'store'])->name("user_product_store");
        Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name("user_product_edit");
        Route::post('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name("user_product_update");
        Route::get('/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name("user_product_delete");
        Route::get('/show', [App\Http\Controllers\ProductController::class, 'show'])->name("user_product_show");
    });

    Route::prefix('image')->group(function () {
        Route::get('/create/{product_id}', [App\Http\Controllers\ImageController::class, 'create'])->name("user_image_add");
        Route::post('/store/{product_id}', [App\Http\Controllers\ImageController::class, 'store'])->name("user_image_store");
        Route::get('/delete/{id}/{product_id}', [App\Http\Controllers\ImageController::class, 'destroy'])->name("user_image_delete");
        Route::get('/show', [App\Http\Controllers\ImageController::class, 'show'])->name("user_image_show");
    });

});





Route::get('/admin/login',[HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');


})->name('dashboard');
