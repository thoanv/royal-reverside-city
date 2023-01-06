<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DasboadController;
use App\Http\Controllers\Admin\TypePermissionController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AboutUController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Ajax\AjaxController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BannerDetailController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\RoomController;
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
Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');

Route::middleware('auth:admin')->group(function (){
    Route::get('/', [DasboadController::class, 'index'])->name('dashboard');
    Route::get('/thay-doi-mat-khau',[DasboadController::class, 'showChangePasswordGet'])->name('changePasswordGet');
    Route::post('/changePassword',[DasboadController::class, 'changePasswordPost'])->name('changePasswordPost');
    Route::get('menus/{menu}/setup', [MenuController::class, 'setup'])->name('menus.setup');
    Route::post('menus/{menu}/setup', [MenuController::class, 'setupStore'])->name('menus.setup-store');
    Route::resources([
        'type-permissions'  => TypePermissionController::class,
        'permissions'       => PermissionController::class,
        'categories'        => CategoryController::class,
        'aboutUs'           => AboutUController::class,
        'contacts'          => ContactController::class,
        'employees'         => EmployeeController::class,
        'posts'             => PostController::class,
        'slides'            => SlideController::class,
        'banners'           => BannerController::class,
        'menus'             => MenuController::class,
        'rooms'             => RoomController::class,
    ]);
    Route::get('/posts/{post}/{type}',[PostController::class, 'show'])->name('posts.showDetail');
    Route::post('/post/change/published',[PostController::class, 'changePublished'])->name('post.change.published');
    //Phân quyền cho nhân viên
    Route::get('/role/authorization/{employee_id}', [RoleController::class, 'authorization'])->name('authorization-employee');
    Route::post('/role/authorization-post', [RoleController::class, 'authorizationPost'])->name('authorization-employee-post');
    Route::get('/role/authorization-update/{employee_id}/{role_id}', [RoleController::class, 'authorizationUpdate'])->name('authorization-employee-role');
    Route::post('/role/authorization-update-post', [RoleController::class, 'authorizationUpdatePost'])->name('authorization-employee-role-update-post');
    //Ajax
    Route::post('enable-column', [AjaxController::class, 'enableColumn'])->name('enable-column');
    Route::post('enable-column-text', [AjaxController::class, 'enableColumnText'])->name('enable-column-text');

    //Banner Detail
    Route::get('/banners-detail/{banner}', [BannerDetailController::class, 'index'])->name('banners_detail_list');
    Route::get('/banners-detail/create/{banner}', [BannerDetailController::class, 'create'])->name('banners_detail_create');
    Route::post('/banners-detail/create', [BannerDetailController::class, 'store'])->name('banners_detail_store');
//    Route::any('/ckfinder/connector', 'CKSource\CKFinderBridge\Controller\CKFinderController@requestAction') ->name('ckfinder_connector');
//    Route::any('/ckfinder/browser', 'CKSource\CKFinderBridge\Controller\CKFinderController@browserAction') ->name('ckfinder_browser');
});

