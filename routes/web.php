<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

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

// TERMS AND CONDITION //
Route::get('/Terms-and-Condition', function () {
    return view('Terms/TermsandCondition');
});
Route::get('/Privacy-Policy', function () {
    return view('Terms/PrivacyPolicy');
});

//CREDENTIALS//
Route::get('/AngelleSarmiento', function () {
    return view('Credential/SirGel');
});
Route::get('/MariaKrissaCharezBongon', function () {
    return view('Credential/MamKrissa');
});
Route::get('/AiriesAsilo', function () {
    return view('Credential/MamAiries');
});
Route::get('/AprilSaludares', function () {
    return view('Credential/SirApan');
});
Route::get('/GioloEvora', function () {
    return view('Credential/SirGio');
});
// 
Route::get('/JustinDeCastro', function () {
    return view('Credential/SirJustin');
});
Route::get('/MosesAlcantara', function () {
    return view('Credential/SirMoses');
});
Route::get('/KimberlyNineria', function () {
    return view('Credential/MsKim');
});
Route::get('/DarleneFajarito', function () {
    return view('Credential/MsDarlene');
});
Route::get('/LycaNobleza', function () {
    return view('Credential/Mslyca');
});
Route::get('/AllysaPerez', function () {
    return view('Credential/MamAly');
});
Route::get('/MarisolCenteno', function () {
    return view('Credential/MamSol');
});
Route::get('/RheaQuintano', function () {
    return view('Credential/MamRea');
});
Route::get('/AnthonySy', function () {
    return view('Credential/MangJun');
});

Route::post('/send-email', [EmailController::class, 'sendEmail']);



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

// Route::get('/AngelleSarmiento', [MainController::class, 'showAngelle']);
Route::get('/MariaKrissaCharezBongon', [MainController::class, 'showKrissa']);
Route::get('/MarisolCenteno', [MainController::class, 'showSol']);
Route::get('/GioloEvora', [MainController::class, 'showGio']);
Route::get('/JustinDeCastro', [MainController::class, 'showJustin']);
Route::get('/MosesAlcantara', [MainController::class, 'showMoser']);
Route::get('/KimberlyNineria', [MainController::class, 'showKim']);
Route::get('/DarleneFajarito', [MainController::class, 'showDarlene']);
Route::get('/LycaNobleza', [MainController::class, 'showLyca']);
Route::get('/AllysaPerez', [MainController::class, 'showAlly']);
Route::get('/RheaQuintano', [MainController::class, 'showRea']);

