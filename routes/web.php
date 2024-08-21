<?php

use App\Http\Controllers\ContactController;
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
Route::get('/credential-sirgel', function () {
    return view('Credential/SirGel');
});
Route::get('/credential-mamkrissa', function () {
    return view('Credential/MamKrissa');
});
Route::get('/credential-mamairies', function () {
    return view('Credential/MamAiries');
});
Route::get('/credential-sirapan', function () {
    return view('Credential/SirApan');
});
Route::get('/credential-sirgio', function () {
    return view('Credential/SirGio');
});
Route::get('/credential-sirjustin', function () {
    return view('Credential/SirJustin');
});
Route::get('/credential-sirmoses', function () {
    return view('Credential/SirMoses');
});
Route::get('/credential-mskim', function () {
    return view('Credential/MsKim');
});
Route::get('/credential-msdarlene', function () {
    return view('Credential/MsDarlene');
});
Route::get('/credential-mslyca', function () {
    return view('Credential/MsLyca');
});
Route::get('/credential-mamaly', function () {
    return view('Credential/MamAly');
});

Route::post('/submit/inquiry', [ContactController::class, 'submitinquiry']);