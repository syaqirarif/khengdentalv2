<?php
  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ClerkController;
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
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('index');
});

Route::get('doctors', [DoctorController::class, 'show'])->name('doctors.index');
Route::get('clerks', [ClerkController::class, 'show'])->name('clerks.index');
Route::get('patients', [PatientController::class, 'show'])->name('patients.index');








