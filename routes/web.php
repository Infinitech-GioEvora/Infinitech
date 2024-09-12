<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
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
    return view('Homepage/index');
});

Route::get('/about-us', function () {
    return view('Homepage/AboutUs');
});

Route::get('/contact-us', function () {
    return view('Homepage/ContactUs');
});

Route::get('/our-pricing', function () {
    return view('Homepage/Pricing');
});

Route::get('/news-blogs', function () {
    return view('Homepage/News');
});

Route::get('/services', function () {
    return view('Homepage/Services');
});

Route::get('/testimonials', function () {
    return view('Homepage/Testimonial');
});

Route::get('/solution', function () {
    return view('Homepage/Solution');
});

// Route::get('/get-proposal', function () {
//     return view('Homepage/Proposal');
// });

Route::get('/get-proposal', function () {
    return view('Homepage/Quotes');
});

//CREDENTIALS//
Route::get('/CEO-AngelleSarmiento', function () {
    return view('Credential/SirGel');
});
Route::get('/EA-KrissaBongon', function () {
    return view('Credential/MamKrissa');
});
Route::get('/MARKETINGHEAD-AiriesAsilo', function () {
    return view('Credential/MamAiries');
});
Route::get('/ITSUPERVISOR-AprilSaludares', function () {
    return view('Credential/SirApan');
});
Route::get('/SENIORDEV-GioloEvora', function () {
    return view('Credential/SirGio');
});
// 
Route::get('/SENIORDEV-JustinDeCastro', function () {
    return view('Credential/SirJustin');
});
Route::get('/SENIORDEV-MosesAlcantara', function () {
    return view('Credential/SirMoses');
});
Route::get('/JUNIORDEV-KimberlyNineria', function () {
    return view('Credential/MsKim');
});
Route::get('/JUNIORDEV-DarleneFajarito', function () {
    return view('Credential/MsDarlene');
});
Route::get('/JUNIORDEV-LycaNobleza', function () {
    return view('Credential/MsLyca');
});
Route::get('/ADMINASST-AllysaPerez', function () {
    return view('Credential/MamAly');
});
Route::get('/ACCOUNTING-MarisolCenteno', function () {
    return view('Credential/MamSol');
});
Route::get('/HR-RheaQuintano', function () {
    return view('Credential/MamRea');
});
Route::get('/COMPDRIVER-AnthonySy', function () {
    return view('Credential/MangJun');
});
Route::post('/submit/inquiry', [ContactController::class, 'submitinquiry']);

// Admin side
Route::get('/admin/employee', function () {
    return view('Admin/Employee');
});

Route::get('/admin/dashboard-data', [MainController::class, 'dashboard_data']);

Route::get('/admin/employee', function () {
    return view('Admin/Employee');
});



Route::get('/employee/{employeeID}', [MainController::class, 'employ']);

Route::post('/admin/add', [MainController::class, 'add']);
Route::get('/admin/all', [MainController::class, 'all']);
Route::get('/admin/edit/{id}', [MainController::class, 'edit']);
Route::post('/admin/upd/', [MainController::class, 'upd']);
Route::get('/admin/del/{id}', [MainController::class, 'del']);
Route::get('/download-vcard', [MainController::class, 'downloadVCard']);
