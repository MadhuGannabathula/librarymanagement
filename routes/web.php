<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\orderController;
use App\Http\Controllers;
use App\Models\book;
use App\Http\Controllers\Dummy;
use App\Http\Controllers\HomeController;

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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/empcreate', function () {
    return view('employeecreate');
});

Route::get('/emppage', function () {
    return view('emppage');
});

Route::post('/employees/login',[employeeController::class,'login']);

Route::get('/admin',[Controller::class,'dashboard'] );
Route::get('/test', function () {
    return view('newview');
});

Route::get('/admin/books/delete/{id}',[bookController::class,'destroy']);
Route::get('/admin/employees/delete/{id}',[bookController::class,'destroy']);
Route::get('/admin/orders/returned',[orderController::class,'returned']);
// Route::get('/admin/employees/{id}/edit',[employeeController::class,'edit']);


Route::resource('/admin/books', bookController::class);
Route::resource('/orders', orderController::class);
Route::resource('/admin/employees', employeeController::class);

Route::get('/search',[bookController::class,'search']);
Route::get('/studentsearch',[bookController::class,'studentsearch']);
Route::get('/logout',[employeeController::class,'logout']);
