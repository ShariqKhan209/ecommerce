<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']);

route::get('view_category', [AdminController::class, 'view_category']);

route::post('add_category', [AdminController::class, 'add_category']);

route::get('delete_category/{id}', [AdminController::class, 'delete_category']);

route::get('show_product', [AdminController::class, 'show_product']);

route::get('add_product', [AdminController::class, 'add_product']);

route::post('save_product', [AdminController::class, 'save_product']);

route::get('delete_product/{id}', [AdminController::class, 'delete_product']);

route::get('edit_product/{id}', [AdminController::class, 'edit_product']);

route::post('update_product/{id}', [AdminController::class, 'update_product']);

route::get('view_orders', [AdminController::class, 'view_orders']);

route::get('single_order/{id}', [AdminController::class, 'single_order']);

route::get('delivered/{id}', [AdminController::class, 'delivered']);

route::get('search', [AdminController::class, 'search']);


route::get('product_details/{id}', [HomeController::class, 'product_details']);

route::post('add_to_cart/{id}', [HomeController::class, 'add_to_cart']);

route::get('show_cart', [HomeController::class, 'show_cart']);

route::get('remove_cart_product/{id}', [HomeController::class, 'remove_cart_product']);

route::post('proceed_order', [HomeController::class, 'proceed_order']);

route::get('show_order', [HomeController::class, 'show_order']);

route::get('remove_order_product/{id}', [HomeController::class, 'remove_order_product']);

route::get('all_products', [HomeController::class, 'all_products']);

route::get('search_product', [HomeController::class, 'search_product']);

route::get('contact', [HomeController::class, 'contact']);

route::get('about', [HomeController::class, 'about']);

route::get('blog', [HomeController::class, 'blog']);

route::get('checkout', [HomeController::class, 'checkout']);