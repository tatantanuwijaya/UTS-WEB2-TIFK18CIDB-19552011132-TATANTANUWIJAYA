<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;
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

Route::get('/', function (){
    return view('welcome');
});

Route::get("/home",[Homecontroller::class, "index"]);

Route::get("/about",[Homecontroller::class, "tentang"]);

Route::get("/pelayanan",[Homecontroller::class, "produkrs"]);

Route::get("/login",[Homecontroller::class, "loginpage"]);

Route::get("/dashboard",[Homecontroller::class, "dashboardpage"]);

Route::get("/articlepage",[Homecontroller::class, "artikel"]);

Route::get("/detail1",[Homecontroller::class, "artikeldetail"]);

Route::get("/detail2",[Homecontroller::class, "artikeldetail2"]);

Route::get("/contact",[Homecontroller::class, "kontak"]);

Route::get("/detail3",[Homecontroller::class, "artikeldetail3"]);

Route::get("/registrasi",[Homecontroller::class, "registerpage"]);