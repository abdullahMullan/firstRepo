<?php

use App\Http\Controllers\testController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login',[testController::class,'loginPage'])->name('login.page');
Route::get('/dashbord',[testController::class,'dashbordPage'])->name('dashbord.page');
Route::get('/singleUser{id}',[testController::class,'singleUser'])->name('view.user')->middleware('checkRole:admin-role');
Route::get('/updateUser{id}',[testController::class,'updateUser'])->name('update.user')->middleware('checkRole:editor_role');
Route::get('/updatedUser{id}',[testController::class,'updatedUser'])->name('updated.user');
Route::get('/deleteUser{id}',[testController::class,'deleteUser'])->name('delete.user')->middleware('checkRole:admin_role');
Route::view('/addUser','addNew')->name('add.user')->middleware('checkRole:admin_role|writer_role');
Route::post('/addNew',[testController::class,'addNew'])->name('add.new');

