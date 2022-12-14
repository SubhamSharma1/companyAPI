<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// api route to get the company list....
Route::get('/companies',[CompanyController::class,'getCompanyList']);

//  api route to register the company list...
Route::post('/company/register',[CompanyController::class,'registerCompany'])->name('registerCompany');

//search for the company
Route::get('/company_search/',[CompanyController::class,'searchCompany'])->name('search');


