<?php

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
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin');
});
Route::get('doctor', function () {
    return view('doctor');
});
Route::get('account', function () {
    return view('account');
});
Route::get('labaratorist', function () {
    return view('labaratorist');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('appointments', 'AppointmentController');

Route::resource('bedAllotments', 'BedAllotmentController');

Route::resource('beds', 'BedsController');

Route::resource('bloodBanks', 'BloodBankController');

Route::resource('bloodDonors', 'BloodDonorController');

Route::resource('employees', 'EmployeeController');

Route::resource('invoices', 'InvoiceController');

Route::resource('medicines', 'MedicineController');

Route::resource('medicineCategories', 'MedicineCategoryController');

Route::resource('patients', 'PatientController');

Route::resource('payments', 'PaymentController');

Route::resource('reports', 'ReportController');

Route::resource('roles', 'RoleController');

Route::resource('skills', 'SkillController');

Route::resource('users', 'UserController');

Route::resource('departments', 'DepartmentController');