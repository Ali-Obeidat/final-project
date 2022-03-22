<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClinicAppointmentController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\UserBookingController;
use App\Models\Category;
use App\Models\userBooking;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    $categories = Category::all();
    // return $categories;
    return view('userSide.Home',compact('categories'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/UserProfile/{id}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/medenin/search', [App\Http\Controllers\ClinicController::class, 'search'])->name('search');
Route::get('/medenin/search/{id}', [App\Http\Controllers\ClinicController::class, 'clinicDetail'])->name('clinicDetail');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/show', [App\Http\Controllers\AdminController::class, 'showAdmin'])->name('admin.showAdmin');
Route::delete('/admin/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');

Route::get('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::resource('/categories', CategoryController::class,)->middleware('auth:admin');
Route::resource('/clinics', ClinicController::class,)->middleware('auth:admin');
Route::resource('/clinicAppointments', ClinicAppointmentController::class)->middleware('auth:admin');
Route::resource('/userBooking', UserBookingController::class);
Route::get('/booking/{id}', [BookingController::class, 'show'])->name('booking.show');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::DELETE('/booking/delete/{id}', [BookingController::class, 'destroy'])->name('booking.destroy');
Route::post('/clinics/store', [ClinicController::class,'store'])->name('store');
