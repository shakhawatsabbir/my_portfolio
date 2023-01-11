<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadFile;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[WebController::class,'index'])->name('home');
Route::post('/massage',[WebController::class,'massage'])->name('massage');
Route::get('/download/cv',[DownloadFile::class,'downloadCv'])->name('download.cv');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/add-portfolio',[DashboardController::class,'addPortfolio'])->name('add.portfolio');
    Route::post('/save-portfolio',[DashboardController::class,'savePortfolio'])->name('save.portfolio');
    Route::post('/update/portfolio',[DashboardController::class,'updatePortfolio'])->name('update.portfolio');
    Route::get('/manage-portfolio',[DashboardController::class,'managePortfolio'])->name('manage.portfolio');
    Route::get('/manage-massage',[DashboardController::class,'manageMassage'])->name('manage.massage');
    Route::get('/edit/protfolio/{id}',[DashboardController::class,'edit'])->name('edit');
    Route::post('/delete/protfolio',[DashboardController::class,'delete'])->name('delete');
});
