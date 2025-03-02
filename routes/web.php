<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;


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
Route::get('/',[DemoController::class, 'index']);
Route::get('/about',[DemoController::class, 'about']);
Route::get('/courses',SingleActionController::class);
Route::resource('photo',PhotoController::class);

Route::get('/register',[RegistrationController::class, 'demo']);

Route::post('/register',[RegistrationController::class, 'register']);

Route::get('/customer',function(){
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'register']);

Route::get('/customer', [CustomerController::class, 'view']);
Route::get('/customer/trash', [CustomerController::class, 'trash']);
Route::get('/',function(){
    return view('index');
});
Route::get('/customer/restore/{id}',[CustomerController::class, 'restore'])->name('customer.restore');
Route::get('/customer/force-delete/{id}',[CustomerController::class, 'forceDelete'])->name('customer.force-delete');
Route::get('/customer/delete/{id}',[CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}',[CustomerController::class, 'update'])->name('customer.update');

Route::get('get-all-session',function(){
    $session = session()->all();
    p($session);
});

Route::get('set-session', function(Request $request){
    $request->session()->put('user_name', 'Mujir Shaikh');
    $request->session()->put('user_id', '123');
    return redirect('get-all-session');
});

Route::get('destroy-session', function(){
    session()->forget('user_name');
    session()->forget('user_id');
    
    return redirect('get-all-session');

});

