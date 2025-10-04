<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController as AdminLoginController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\CategoryController;


// Route::get('/', function () {
//     return view('welcome');
// });

// guest middleware user
// guest middleware user
// guest middleware user 

Route::group(['prefix' => 'account'],function(){
Route::get('login',[LoginController::class,'index'])->name('account.login');
Route::get('register',[LoginController::class,'register'])->name('account.register');
Route::post('process-register',[LoginController::class,'processRegister'])->name('account.processRegister');
Route::post('authenticate',[LoginController::class,'authenticate'])->name('account.authenticate');
});

// authenticate midleware user
// authenticate midleware user
// authenticate midleware user


Route::group(['prefix' => '/'],function(){
Route::get('logout',[LoginController::class,'logout'])->name('account.logout');


route::get('',[ThemeController::class,'home'])->name('home');

//home form
route::post('index_form_post',[ThemeController::class,'index_form_post'])->name('index_form_post');
route::post('contact_form_post',[ThemeController::class,'contact_form_post'])->name('contact_form_post');

Route::get('about',[ThemeController::class,'about'])->name('about');
route::get('packages',[ThemeController::class,'packages'])->name('packages');
route::get('blog',[ThemeController::class,'blog'])->name('blog');
route::get('contact',[ThemeController::class,'contact'])->name('contact');
route::get('services{id}',[ThemeController::class,'services'])->name('services');
Route::get('/products/{id}', [ThemeController::class, 'products'])->name('products');
route::get('blog_details/{id}',[ThemeController::class,'blog_details'])->name('blog_details');
});




// guest middleware for admin
// guest middleware for admin
// guest middleware for admin

Route::group(['prefix' => 'admin', 'middleware' => 'admin.guest'], function() {
    Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
});

// authenticate midleware for admin
// authenticate midleware for admin
// authenticate midleware for admin

Route::group(['prefix' => 'admin', 'middleware' => 'admin.auth'], function(){
    // Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');



    Route::get('index',[AdminController::class,'admin_index'])->name('admin_index');

Route::get('lock_screen',[AdminController::class,'lock_screen'])->name('lock_screen');
Route::get('form_element',[AdminController::class,'form_element'])->name('form_element');
   
//admin crousel
route::get('slider',[SliderController::class,'slider'])->name('slider');
Route::post('slider_post', [SliderController::class, 'slider_post'])->name('slider_post');
route::get('slider_delete{id}',[SliderController::class,'slider_delete'])->name('slider_delete');
route::get('/slider_update',[SliderController::class,'slider_update'])->name('slider_update');
route::post('slider_update_post',[SliderController::class,'slider_update_post'])->name('slider_update_post');



// admin category
route::get('admin_category',[CategoryController::class,'admin_category'])->name('admin_category');
route::get('category_create',[CategoryController::class,'category_create'])->name('category_create');
route::post('category_create_post',[CategoryController::class,'category_create_post'])->name('category_create_post');
route::get('category_delete{id}',[CategoryController::class,'category_delete'])->name('category_delete');
Route::get('category_update/{id}', [CategoryController::class, 'category_update'])->name('category_update');
Route::post('category_update_post', [CategoryController::class, 'category_update_post'])->name('category_update_post');

Route::get('/sub_category_product/{id}',[CategoryController::class,'sub_category_product'])->name('sub_category_product');
Route::get('/sub_category_create/{id}', [CategoryController::class, 'sub_category_create'])->name('sub_category_create');
Route::post('/sub_category_post',[CategoryController::class,'sub_category_post'])->name('sub_category_post');
route::get('sub_category_product_delete{id}',[CategoryController::class,'sub_category_product_delete'])->name('sub_category_product_delete');
Route::get('sub_category_update/{id}', [CategoryController::class, 'sub_category_update'])->name('sub_category_update');
Route::post('sub_category_product_update_post', [CategoryController::class, 'sub_category_product_update_post'])->name('sub_category_product_update_post');



// admin services
route::get('admin_services',[ServiceController::class,'admin_services'])->name('admin_services');
route::get('service_create',[ServiceController::class,'service_create'])->name('service_create');
route::post('service_create_post',[ServiceController::class,'service_create_post'])->name('service_create_post');
route::get('service_delete{id}',[ServiceController::class,'service_delete'])->name('service_delete');
Route::get('service_update/{id}', [ServiceController::class, 'service_update'])->name('service_update');
Route::post('service_update_post', [ServiceController::class, 'service_update_post'])->name('service_update_post');


//admin about
route::get('admin_about',[AboutController::class,'admin_about'])->name('admin_about');
route::get('about_create',[AboutController::class,'about_create'])->name('about_create');
route::post('about_create_post',[AboutController::class,'about_create_post'])->name('about_create_post');
route::get('about_delete{id}',[AboutController::class,'about_delete'])->name('about_delete');
Route::get('about_update/{id}', [AboutController::class, 'about_update'])->name('about_update');
Route::post('about_update_post', [AboutController::class, 'about_update_post'])->name('about_update_post');

//admin package
route::get('admin_package',[PackageController::class,'admin_package'])->name('admin_package');
route::get('package_create',[PackageController::class,'package_create'])->name('package_create');
route::post('package_create_post',[PackageController::class,'package_create_post'])->name('package_create_post');
route::get('package_delete{id}',[PackageController::class,'package_delete'])->name('package_delete');
Route::get('package_update/{id}', [PackageController::class, 'package_update'])->name('package_update');
Route::post('package_update_post', [PackageController::class, 'package_update_post'])->name('package_update_post');


//admin blog
route::get('admin_blog',[BlogController::class,'admin_blog'])->name('admin_blog');
route::get('blog_create',[BlogController::class,'blog_create'])->name('blog_create');
route::post('blog_create_post',[BlogController::class,'blog_create_post'])->name('blog_create_post');
route::get('blog_delete{id}',[BlogController::class,'blog_delete'])->name('blog_delete');
Route::get('blog_update/{id}', [BlogController::class, 'blog_update'])->name('blog_update');
Route::post('blog_update_post', [BlogController::class, 'blog_update_post'])->name('blog_update_post');


// admin tour
route::get('admin_tour',[TourController::class,'admin_tour'])->name('admin_tour');
route::get('tour_create',[TourController::class,'tour_create'])->name('tour_create');
route::post('tour_create_post',[TourController::class,'tour_create_post'])->name('tour_create_post');
route::get('tour_delete{id}',[TourController::class,'tour_delete'])->name('tour_delete');
Route::get('tour_update/{id}', [TourController::class, 'tour_update'])->name('tour_update');
Route::post('tour_update_post', [TourController::class, 'tour_update_post'])->name('tour_update_post');

//admin tour deals form
route::get('tour_deals',[ThemeController::class,'tour_deals'])->name('tour_deals');
route::get('tour_deals_delete{id}',[ThemeController::class,'tour_deals_delete'])->name('tour_deals_delete');
route::get('tourdeals_thanks',[ThemeController::class,'tourdeals_thanks'])->name('tourdeals_thanks');



//admin Contact Details form
route::get('contact_details',[ThemeController::class,'contact_details'])->name('contact_details');
route::get('contact_details_delete{id}',[ThemeController::class,'contact_details_delete'])->name('contact_details_delete');
route::get('contact_thanks',[ThemeController::class,'contact_thanks'])->name('contact_thanks');



// Clent
route::get('client',[ClientController::class,'client'])->name('client');
route::get('client_create',[ClientController::class,'client_create'])->name('client_create');
route::post('client_create_post',[ClientController::class,'client_create_post'])->name('client_create_post');
route::get('client_delete{id}',[ClientController::class,'client_delete'])->name('client_delete');
route::get('client_update{id}',[ClientController::class,'client_update'])->name('client_update');
route::post('client_update_post',[ClientController::class,'client_update_post'])->name('client_update_post');


// for multiple images delete routes 
Route::get('/deleteabout-image/{id}/{key}', [AboutController::class, 'deleteaboutImage'])->name('deleteabout-image');

Route::get('/deleteservice-image/{id}/{key}', [ServiceController::class, 'deleteserviceImage'])->name('deleteservice-image');

Route::get('/delete-image/{id}/{key}', [CategoryController::class, 'deleteImage'])->name('delete.image');




// for soft active
Route::get('softpackages_active/{id}',[PackageController::class,'softpackages_active']);
Route::get('softabout_active/{id}',[AboutController::class,'softabout_active']);
Route::get('softblog_active/{id}',[BlogController::class,'softblog_active']);
Route::get('softclient_active/{id}',[ClientController::class,'softclient_active']);
Route::get('softservice_active/{id}',[ServiceController::class,'softservice_active']);
Route::get('softslider_active/{id}',[SliderController::class,'softslider_active'])->name('softslider_active');
Route::get('softcategory_active/{id}',[CategoryController::class,'softcategory_active']);
Route::get('softsubcategory_active/{id}',[CategoryController::class,'softsubcategory_active']);

// for soft unactive 
Route::get('softpackages_unactive/{id}',[PackageController::class,'softpackages_unactive']);
Route::get('softabout_unactive/{id}',[AboutController::class,'softabout_unactive']);
Route::get('softblog_unactive/{id}',[BlogController::class,'softblog_unactive']);
Route::get('softclient_unactive/{id}',[ClientController::class,'softclient_unactive']);
Route::get('softservice_unactive/{id}',[ServiceController::class,'softservice_unactive']);
Route::get('softslider_unactive/{id}',[SliderController::class,'softslider_unactive'])->name('softslider_unactive');
Route::get('softcategory_unactive/{id}',[CategoryController::class,'softcategory_unactive']);
Route::get('softsubcategory_unactive/{id}',[CategoryController::class,'softsubcategory_unactive']);



});