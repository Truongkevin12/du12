<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\productController;
use PHPUnit\TextUI\XmlConfiguration\Groups;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CategoiesController;
use App\Http\Controllers\Auth\LogoutController;

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
    return view('client/index');
});

Route::get('/product/{id_category}',[productController::class,'products']);
Route::get('/product/details/{id}',[productController::class,'details']);
Route::get('/product-by-category', function () {
    return view('client/categories/list');
});
//cart
Route::get('/thucu', function () {
    return view('client/thucudoimoi');
});
Route::middleware([checkAdmin::class])->group(function () {
    //loai
    Route::get('admin/loai/add',[adminController::class,'add']);
    Route::post('admin/loai/add',[adminController::class,'add_'])->name('add');
    Route::get('admin/loai/list',[adminController::class,'danhsach']);
    Route::get('admin/loai/delete/{id}',[adminController::class,'delete']);
    Route::get('admin/loai/edit/{id}',[adminController::class,'edit']);
    Route::post('admin/loai/edit/{id}',[adminController::class,'edit_']);
    //sản phẩm
    Route::get('admin/sanpham/add',[adminController::class,'addsanpham']);
    Route::post('admin/sanpham/add',[adminController::class,'addsanpham_'])->name('addsanphams');
    Route::get('admin/sanpham/list',[adminController::class,'listsanpham']);
    Route::get('admin/sanpham/delete/{id}',[adminController::class,'deletesanpham']);
    Route::get('admin/sanpham/edit/{id}',[adminController::class,'editsanpham']);
    Route::post('admin/sanpham/edit/{id}',[adminController::class,'editsanpham_']);
});
//đơn hàng
Route::get('admin/donhang/list',[adminController::class,'listdonhang']);
Route::get('admin/donhang/detals',[adminController::class,'detailsDonHang']);

//danh sách khách hàng
Route::get('admin/khachhang/list',[adminController::class,'listkhachhang'])->middleware('auth');;

Route::get('/checkout', function () {
    return view('client.checkout');
});


// Route::get('/admin', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
Route::group(['prefix'=>'cart'], function(){
    Route::get('view',[CartController::class,'view'])->name('cart.view');
    Route::get('add/{id}',[CartController::class,'add'])->name('cart.add');

    Route::get('remove/{id}',[CartController::class,'remove'])->name('cart.remove');
    Route::get('update/{id}/{quantity}',[CartController::class,'update'])->name('cart.update');
    Route::get('clear',[CartController::class,'clear'])->name('cart.clear');
});
Route::group(['prefix'=>'checkout'], function(){
    Route::get('/{id}',[CartController::class,'form'])->name('chekout');
    Route::get('/',[CartController::class,'getCheckOut'])->name('chekout');
    Route::post('/',[OrderController::class,'store'])->name('chekout');

});
Route::group(['prefix'=>'order'], function(){
    Route::get('/',[OrderController::class,'index'])->name('order');

});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
