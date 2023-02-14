<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\FabricsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RetributionController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SeamoerController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SellingPointController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TradeMarkController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('Employees',EmployeController::class);
Route::post('/Employees/ajax_search',[EmployeController::class,'ajax_search'])->name('ajax_search');
Route::get('/edit-employee/{id}',[EmployeController::class,'editEmployess']);
Route::post('Employees-update',[EmployeController::class,'updateEmployees'])->name('Employees-update');
Route::post('Employees-delete',[EmployeController::class,'deleteEmployees'])->name('Employees-delete');
Route::resource('Seamoer-create',SeamoerController::class);
Route::resource('Retribution',RetributionController::class);
Route::resource('Supplier',SupplierController::class);
Route::resource('Products-design',DesignController::class);
Route::resource('Products-section',SectionController::class);
Route::resource('Products-fabrice',FabricsController::class);
Route::resource('Products-unit',UnitController::class);
Route::resource('Products-tradeMark',TradeMarkController::class);
Route::resource('Products-ctreate',ProductController::class);
Route::resource('Sale-point',SellingPointController::class);
Route::resource('Sale-menu',SaleController::class);
Route::resource('Sale-reference',SaleController::class);
Route::get('/print-invoice/{id}',[SaleController::class,'printInvoice']);
Route::resource('purchases-menu',PurchaseController::class);
Route::get('/{page}', [AdminController::class,'index']);


