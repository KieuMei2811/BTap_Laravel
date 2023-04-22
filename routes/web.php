<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('test');
// });

// Route::get('/', 'CalculatorController@index');
// Route::post('/calculator', 'CalculatorController@calculate');

// Route::get('/welcome',function(){
//     return 'Chào mừng các bạn đến với PNV';
// });

// Route::get('/welcome',[App\http\Controllers\UserController::class,'xinchao']);

//  Tính tổng hai số 
// Route::get('/tong', [App\http\Controllers\TongController::class,'tinhTong']);
Route::get('/tong', function(){
    return view('tong');
});
Route::post('/tong', [App\http\Controllers\TongController::class,'tinhTong']);

Route::get('/areaOfShape', function(){
    return view('areaOfShape');
});
Route::post('/areaOfShape', [App\http\Controllers\areaOfShapController::class,'computeArea']);


