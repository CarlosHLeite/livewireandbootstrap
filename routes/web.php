<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\GeneralServiceController;
use App\Http\Controllers\ProductSupplierController;
use App\Http\Controllers\ServiceSupplierController;
use App\Http\Controllers\EmployeePermissionController;
use App\Http\Controllers\PurchaseRequisitionController;



/* 
  Rotas relacionadas ao Login do usuario 
*/
Route::get('/', [ LoginController::class, 'loginView'])->name('login');
Route::get('/register', [ LoginController::class, 'index']);
Route::post('/login', [ LoginController::class, 'login']);


/* 
  Rotas Privadas, elas estão protegidas 
*/
Route::group(['middleware' => 'authenticate.middleware'], function () {
  
  /* 
    Rotas relacionadas ao registro e Login do usuario 
  */
  Route::post('/logout', [ LoginController::class, 'logout']);
  Route::get('/profile', [ LoginController::class, 'profile']);
  Route::get('/settings', [ LoginController::class, 'settings']);
  Route::post('/register', [ LoginController::class, 'register']);
  Route::get('/forgot-password', [ LoginController::class, 'forgotPassword']);

  /* 
    Rotas relacionadas as Ordens de Serviços Gerais 
  */
  Route::get('/order/general-services', [ GeneralServiceController::class, 'index']);
  Route::get('/order/general-service/{id}', [ GeneralServiceController::class, 'show']);
  Route::get('/order/general-service/create', [ GeneralServiceController::class, 'create']);
  Route::get('/order/general-service/{id}/edit', [ GeneralServiceController::class, 'edit']);

  /* 
    Rotas relacionadas as Ordens de Manutenção 
  */
  Route::get('/order/maintenance', [ MaintenanceController::class , 'index']);
  Route::get('/order/maintenance/{id}', [ MaintenanceController::class, 'show']);
  Route::get('/order/maintenance/create', [ MaintenanceController::class, 'create']);
  Route::get('/order/maintenance/{id}/edit', [ MaintenanceController::class, 'edit']);

  /* 
    Rotas relacionado aos Clientes 
  */
  Route::get('/clients', [ ClientController::class, 'index']);
  Route::get('/client/{id}', [ ClientController::class, 'show']);
  Route::get('/client/create', [ ClientController::class, 'create']);
  Route::get('/client/{id}/edit', [ ClientController::class, 'edit']);

  /* 
    Rotas relacionado aos Fornecedores de Produtos 
  */
  Route::get('/supplier/products', [ ProductSupplierController::class, 'index']);
  Route::get('/supplier/product/{id}', [ ProductSupplierController::class, 'show']);
  Route::get('/supplier/product/{id}/edit', [ ProductSupplierController::class, 'edit']);
  Route::get('/supplier/product/create', [ ProductSupplierController::class, 'create']);

  /* 
    Rotas relacionado aos Fornecedores de Serviços 
  */
  Route::get('/supplier/services', [ ServiceSupplierController::class, 'index']);
  Route::get('/supplier/service/{id}', [ServiceSupplierController::class, 'show']);
  Route::get('/supplier/service/create', [ ServiceSupplierController::class, 'create']);
  Route::get('/supplier/service/{id}/edit', [ServiceSupplierController::class, 'edit']);

  /* 
    Rotas relacionado aos Fornecedores de Produtos 
  */
  Route::get('/payments', [ PaymentsController::class, 'index']);
  Route::get('/payment/{id}', [ PaymentsController::class, 'show']);
  Route::get('/payment/create', [ PaymentsController::class, 'create']);
  Route::get('/payment/{id}/edit', [ PaymentsController::class, 'edit']);

  /* 
    Rotas relacionado a Requisições de Compras 
  */
  Route::get('/purchase-requisition', [ PurchaseRequisitionController::class, 'index']);



  /* 
    Rotas relacionado aos funcionarios 
  */
  Route::get('/users', [ UserController::class, 'index']);
  Route::get('/user/create', [UserController::class, 'create']);
  Route::post('/user/store', [UserController::class, 'store']);


  /* 
    Rotas relacionado aos funcionarios 
  */
  Route::get('/user/employees', [ EmployeeController::class, 'index']);
  Route::get('/user/employee/{id}', [ EmployeeController::class, 'show'])->name('user.show');

  /* 
    Rotas relacionado as permissões dadas aos funcionarios 
  */
  Route::get('/user/permissions', [ EmployeePermissionController::class, 'index']);

});























