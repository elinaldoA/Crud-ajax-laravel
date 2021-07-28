<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataTableAjaxCRUDController;

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

Route::get('ajax-crud-datable', [DataTableAjaxCRUDController::class, 'index']);
Route::get('store-company', [DataTableAjaxCRUDController::class, 'store']);
Route::get('edit-company', [DataTableAjaxCRUDController::class, 'edit']);
Route::get('delete-company', [DataTableAjaxCRUDController::class, 'destroy']);
