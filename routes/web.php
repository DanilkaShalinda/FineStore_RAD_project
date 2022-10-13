<?php

use App\Http\Controllers\admin_auth;
use App\Http\Controllers\FE_Controller;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/dashboard',function() {
    return view('dashboard_home');
});
Route::get('/products',function(){

    return view('dashboard_products');

});

Route::get('/sales',function(){
    return view('dashboard_sales');
});

Route::get('/changepassword',function(){
    return view('changepassword');
});

// Route::view('/login', 'loggin');

Route::post("/user",[admin_auth::class,'adminlogin']);

Route::get('/login',function(){
    if(session()->has('user'))
    {
        return redirect('dashboard');
    }

    return view('login');
});

Route::get('/logout',function(){
    if(session()->has('user'))
    {
        session()->pull('dashboard');
    }

    return view('loggin');
});





Route::post('/productadded','App\Http\Controllers\FE_Controller@store_products');

Route::get('/products','App\Http\Controllers\FE_Controller@allproductdetails');

Route::get('/deleteproduct/{id}','App\Http\Controllers\FE_Controller@deleteproduct');

Route::get('/editproduct/{id}','App\Http\Controllers\FE_Controller@editproduct_function');

Route::get('/sales/{id}','App\Http\Controllers\FE_Controller@editproduct_function');

Route::post('/sales', [FE_Controller::class, 'get_product'])->name('get_product');

Route::post('/update_product',[FE_Controller::class,'update']);

Route::get('/dashboard',[FE_Controller::class,'summary']);

