<?php
    session_start();
    if(!isset($_SESSION['giohang'])){
        $_SESSION['giohang']=[];
    }
    require_once "App\Config\DatabaseConfig.php";
    require_once "vendor/autoload.php";


    use App\Route\Route;
    // Define routes
    Route::add('/', 'HomeController@index');
    Route::add('/index', 'HomeController@index');
    Route::add('/product', 'ProductController@index');
    Route::add('/product/detail/(\d+)', 'ProductController@detail');
    Route::add('/product/idcatalog/(\d+)', 'ProductController@index');
    Route::add('/product/search/(\w+)', 'ProductController@index');
    Route::add('/product/sotrang/(\d+)', 'ProductController@index');
    Route::add('/productstyle', 'ProductController@productstyle');
    Route::add('/cart', 'CartController@index');
    Route::add('/viewcart', 'CartController@index');
    Route::add('/addcart', 'CartController@addcart');
    Route::add('/deletecart', 'CartController@deletecart');
    Route::add('/deleteproduct/(\d+)', 'CartController@deleteproduct');
    Route::add('/checkout', 'CartController@checkout');
    Route::add('/profile', 'UserController@profile');
    Route::add('/taikhoancuatoi', 'UserController@profile');
    Route::add('/licsumuahang', 'UserController@profile');
    Route::add('/binhluancuatoi', 'UserController@profile');
    Route::add('/login', 'UserController@index');
    Route::add('/logout', 'UserController@logout');
    Route::add('/signin', 'UserController@signin');


    Route::add('/admin', 'AdminController@index');
    Route::add('/admin/dashboard', 'AdminController@index');
    Route::add('/admin/category', 'AdminController@categoryadmin');
    Route::add('/admin/product', 'AdminController@productadmin');
    Route::add('/admin/bill', 'AdminController@billadmin');
    Route::add('/admin/addcatalogform', 'AdminController@addcatalogform');
    Route::add('/admin/addcatalog', 'AdminController@addcatalog');
    Route::add('/admin/addproductform', 'AdminController@addproductform');
    Route::add('/admin/addproduct', 'AdminController@addproduct');
    Route::add('/admin/loginform', 'AdminController@loginform');
    Route::add('/admin/login', 'AdminController@login');
    Route::add('/admin/logout', 'AdminController@logout');
    

    $uri = isset($_GET['url']) ? "/".rtrim($_GET['url'], '/') : '/index';
    Route::dispatch($uri);

