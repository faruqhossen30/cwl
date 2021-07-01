<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\CliendloginController;
use App\Http\Controllers\tenderController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\cliendregController;
use App\Http\Controllers\alltenderController;
use App\Http\Controllers\clienduserController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\tenderupController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\egptraningController;
use App\Http\Controllers\travelbackController;
use App\Http\Controllers\egpbackController;
use App\Http\Controllers\cliendbackController;
use App\Http\Controllers\dropideaController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\catagoryController;
// frontend
use App\Http\Controllers\internationalController;
use App\Http\Controllers\nationalController;
use App\Http\Controllers\privateController;
use App\Http\Controllers\egp_regController;
use App\Http\Controllers\fronthomeController;
use App\Http\Controllers\frontcatagoryController;


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


// Route::get('/home', function (){
//     //echo "hello laravel";
//     return view('dashboard');
// });
// Route::get('/contact', function (){
//     //echo "hello laravel";
//     return view('contact');
// });

// frontendcontroller
Route::resource('/', frontendController::class);
Route::resource('/fronthome', fronthomeController::class);

//backendcontroller
Route::get('/admin',[loginController::class,'index']);
Route::post('/login',[loginController::class,'login']);
Route::get('/home',[homeController::class,'index'])->middleware('login');
Route::get('/logout',[loginController::class,'logout'])->middleware('login');
Route::resource('/users', UserController::class)->middleware('login');
Route::resource('/catagory', catagoryController::class)->middleware('login');


Route::get('/cliend',[CliendloginController::class,'index']);
Route::post('/cliendlogin',[CliendloginController::class,'login']); //front connected

Route::resource('/tender', tenderController::class)->middleware('login'); //front connected

Route::resource('/cliendreg', frontendController::class); //front connected

Route::resource('/alltender', alltenderController::class); 
Route::resource('/cli_user', clienduserController::class);

Route::resource('/travel', TravelController::class);

Route::resource('/tenderup', tenderupController::class);

Route::resource('/department', departmentController::class);


Route::resource('/about', aboutController::class);
Route::resource('/contact', contactController::class);
Route::resource('/egptraning', egptraningController::class);
Route::resource('/egpback', egpbackController::class);


Route::resource('/travelback', travelbackController::class);
Route::resource('/cliendback', cliendbackController::class);

Route::resource('/dropidea', dropideaController::class);
Route::resource('/country', CountryController::class);

Route::resource('/cliend_reg', cliendregController::class);
// payment controller
Route::resource('/pay', paymentController::class); 
// frontend
Route::resource('/international', internationalController::class);
Route::resource('/national', nationalController::class);
Route::resource('/private', privateController::class);
Route::resource('/egpreg', egp_regController::class);
Route::resource('/fontcatagory', frontcatagoryController::class);