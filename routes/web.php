<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\frontviewController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\ImageUrlController;

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
    return redirect()->route('home');
});
Route::get('/category_page',[frontviewController::class,'categoryPage'])->name('category_page');
Route::get('/contact_page',[frontviewController::class,'contactPage'])->name('contact_page');
Route::post('/contact_post',[frontviewController::class,'contactPost'])->name('contact_post');
Route::get('/home',[frontviewController::class,'Home'])->name('home');
Route::get('/category_newses/{id}',[frontviewController::class,'CategoryNews'])->name('category_newses');
Route::get('/details/{id}',[frontviewController::class,'Details'])->name('details');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {return view('admin.home.home');})->name('dashboard');

    //Category module
    Route::get('/add_category',[CategoryController::class,'addCategory'])->name('add_category');
    Route::post('/new_category',[CategoryController::class,'newCategory'])->name('new_category');
    Route::get('/manage_category',[CategoryController::class,'manageCategory'])->name('manage_category');
    Route::get('/category_status_change/{id}',[CategoryController::class,'categoryStatusChange'])->name('category_status_change');
    Route::get('/edit_category/{id}',[CategoryController::class,'editCategory'])->name('edit_category');
    Route::post('/update_category/{id}',[CategoryController::class,'updateCategory'])->name('update_category');
    Route::get('/delete_category/{id}',[CategoryController::class,'deleteCategory'])->name('delete_category');

//sub Category module
    Route::get('/add_sub_category',[SubCategoryController::class,'addSubCategory'])->name('add_sub_category');
    Route::post('/new_sub_category',[SubCategoryController::class,'newSubCategory'])->name('new_sub_category');
    Route::get('/manage_sub_category',[SubCategoryController::class,'manageSubCategory'])->name('manage_sub_category');
    Route::get('/sub_category_status_change/{id}',[SubCategoryController::class,'SubcategoryStatusChange'])->name('sub_category_status_change');
    Route::get('/edit_sub_category/{id}',[SubCategoryController::class,'editSubCategory'])->name('edit_sub_category');
    Route::post('/update_sub_category/{id}',[SubCategoryController::class,'updateSubCategory'])->name('update_sub_category');
    Route::get('/delete_sub_category/{id}',[SubCategoryController::class,'deleteSubCategory'])->name('delete_sub_category');

//News module
    Route::get('/add_news',[NewsController::class,'addNews'])->name('add_news');
    Route::post('/new_news',[NewsController::class,'newNews'])->name('new_news');
    Route::get('/manage_news',[NewsController::class,'manageNews'])->name('manage_news');
    Route::get('/news_status_change/{id}',[NewsController::class,'NewsStatusChange'])->name('news_status_change');
    Route::get('/edit_news/{id}',[NewsController::class,'editNews'])->name('edit_news');
    Route::post('/update_news/{id}',[NewsController::class,'updateNews'])->name('update_news');
    Route::get('/delete_news/{id}',[NewsController::class,'deleteNews'])->name('delete_news');

//Footer module
    Route::get('/add_footer',[FooterController::class,'addfooter'])->name('add_footer');
    Route::post('/new_footer',[FooterController::class,'newfooter'])->name('new_footer');
    Route::get('/manage_footer',[FooterController::class,'managefooter'])->name('manage_footer');
    Route::get('/footer_status_change/{id}',[FooterController::class,'footerStatusChange'])->name('footer_status_change');
    Route::get('/edit_footer/{id}',[FooterController::class,'editfooter'])->name('edit_footer');
    Route::post('/update_footer/{id}',[FooterController::class,'updatefooter'])->name('update_footer');
    Route::get('/delete_footer/{id}',[FooterController::class,'deletefooter'])->name('delete_footer');

//Logo module
    Route::get('/add_logo',[LogoController::class,'addlogo'])->name('add_logo');
    Route::post('/new_logo',[LogoController::class,'newlogo'])->name('new_logo');
    Route::get('/manage_logo',[LogoController::class,'managelogo'])->name('manage_logo');
    Route::get('/logo_status_change/{id}',[LogoController::class,'logoStatusChange'])->name('logo_status_change');
    Route::get('/edit_logo/{id}',[LogoController::class,'editlogo'])->name('edit_logo');
    Route::post('/update_logo/{id}',[LogoController::class,'updatelogo'])->name('update_logo');
    Route::get('/delete_logo/{id}',[LogoController::class,'deletelogo'])->name('delete_logo');

//imageurl module
    Route::get('/add_imageurl',[ImageUrlController::class,'addimageurl'])->name('add_imageurl');
    Route::post('/new_imageurl',[ImageUrlController::class,'newimageurl'])->name('new_imageurl');
    Route::get('/manage_imageurl',[ImageUrlController::class,'manageimageurl'])->name('manage_imageurl');
    Route::get('/imageurl_status_change/{id}',[ImageUrlController::class,'imageurlStatusChange'])->name('imageurl_status_change');
    Route::get('/edit_imageurl/{id}',[ImageUrlController::class,'editimageurl'])->name('edit_imageurl');
    Route::post('/update_imageurl/{id}',[ImageUrlController::class,'updateimageurl'])->name('update_imageurl');
    Route::get('/delete_imageurl/{id}',[ImageUrlController::class,'deleteimageurl'])->name('delete_imageurl');

});
