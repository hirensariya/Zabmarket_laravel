<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\admin;

Route::get('/', 'admindetails@home');

Route::get('/product/{cat}', 'admindetails@index');

Route::get('/product-detail/{id}', 'admindetails@product');

Route::post('/register', 'admindetails@r');

Route::post('/login', 'admindetails@login');

Route::get('/logout', 'admindetails@logout');

Route::get('/addcart', 'admindetails@addcart');

Route::get('/addwhis', 'admindetails@addwhis');

Route::get('/cart', 'admindetails@cart');

Route::get('/uptcart', 'admindetails@uptcart');

Route::get('/whishlist', 'admindetails@whislist');

Route::get('/checkout', 'admindetails@checkout');

Route::post('/placeorder', 'admindetails@placeorder');

Route::get('/thank', 'admindetails@thank');

Route::get('/deletecart/{id}', 'admindetails@deletecart');

Route::get('/deletewhis/{id}', 'admindetails@deletewhis');

Route::get('/editprof', 'admindetails@editprof');

Route::post('/editprof', 'admindetails@upprof');

Route::get('/vieworder', 'admindetails@vieworder');

Route::get('/register', function () {
    return view('register');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/admin/', 'admindetails@adminlogin');

Route::get('/admin/', function () {
    return view('admin/index');
});

Route::get('/admin/dashbord', 'admindetails@admindashbord');

Route::post('/admin/product', 'admindetails@adminaddproduct');

Route::get('/admin/product', function () {
    return view('admin/addproduct');
});


Route::get('/admin/order', 'admindetails@adminorder');

Route::get('/admin/custmer', 'admindetails@admincustmer');

Route::get('/admin/logout', 'admindetails@adminlogout');

Route::get('/admin/editproduct/{id}', 'admindetails@admineditproduct');

Route::post('/admin/editproduct/{id}', 'admindetails@admindetailproduct');

Route::get('/admin/deletproduct/{id}', 'admindetails@admindeletproduct');




// Route::get('/text','admindetails@home');