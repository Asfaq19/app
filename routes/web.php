<?php

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// --------------------------------------------
// Route::get('/my_route', function () {
//     return "<h1>From Middleware</h1>";
// });
// --------------------------------------------
Route::resource('/my_route','My_AdminController');
// --------------------------------------------



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/user/roles',['middleware' => ['role','auth'], function(){
    return "Middleware role";
}]);

Route::get('/admin','AdminController@index');

Route::get('/one', ['middleware' => ['R_OneMiddleware'], function(){

        return "OneMiddleware";
}]);

Route::get('/one/other',function(){

    $user = Auth::user();
    
    if($user->one_role()){
        return "<h1>Othersss</h1>";
    }
    return view('not_admin');

    // return "OneMiddleware";
    // return "OneMiddleware";
});


Route::get('/posts','PostController@index');
Route::post('/posts','PostController@store');
Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}/edit','PostController@edit');
Route::put('/posts/{post}','PostController@update');
Route::delete('/posts/{post}','PostController@destroy');

Route::get('/sum','SumController@index');
Route::get('/sum/new','SumController@new');
Route::post('/sum','SumController@store');
Route::get('/sum/create','SumController@create');

Route::get('/add','AddingController@index');
Route::post('/add','AddingController@store');
Route::get('/add/create','AddingController@create');
Route::delete('/add/{data}', 'AddingController@destroy');

// ==========================================================

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});

// Route::get('customers', function () {
//     return view('internals.customers');
// });

// ==============================================
// Route::get('customers', function () {

    // $customers = [
    //     'John Doe',
    //     'Jane Doe',
    //     'Bob the builder',
    // ];

    // return view('internals.customers',compact('customers'));
    // return view('internals.customers',[
    //     'customers' => $customers
    // ]);
// });

// ==========================================================
// Route::view('contact', 'contact');
// Route::view('contact', 'contact');
// ==========================================================
// Teacher - School Relations
Route::get('teachers','TeachersController@list');
Route::post('teachers','TeachersController@store');
// ------------------------------------------------------------
Route::get('readers','BookController@index');
Route::get('readers/create','BookController@create');
Route::post('readers','BookController@store');
Route::get('readers/{reader}','BookController@show');
Route::get('readers/{reader}/edit','BookController@edit');
Route::patch('readers/{reader}','BookController@update');
Route::delete('readers/{reader}','BookController@destroy');

// ------------------------------------------------------------
Route::get('products','ShopController@index');
Route::get('products/create','ShopController@create');
Route::post('products','ShopController@store');
Route::get('products/{product}','ShopController@show');
Route::get('products/{product}/edit','ShopController@edit');
Route::patch('products/{product}','ShopController@update');
Route::delete('products/{product}','ShopController@destroy');
// Route::resource('products','ShopController');


// ------------------------------------------------------------

// Route::get('customers','CustomersController@index');
// Route::get('customers/create','CustomersController@create'); 
// Route::post('customers','CustomersController@store'); 
// Route::get('customers/{customer}','CustomersController@show'); 
// Route::get('customers/{customer}/edit','CustomersController@edit'); 
// Route::patch('customers/{customer}','CustomersController@update'); 
// Route::delete('customers/{customer}','CustomersController@destroy'); 

Route::resource('customers','CustomersController');

// Service Container -------------------------------------------------
Route::get('pay','PayOrderController@store');

 