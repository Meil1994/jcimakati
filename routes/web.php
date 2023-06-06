<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ClickGreenController;

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


Route::get('/', [HomeController::class, 'home']);

Route::get('/about_us', [AboutController::class, 'aboutUs']);

Route::get('/events', [EventController::class, 'events']);

Route::get('/programs', [ProgramController::class, 'programs']);

Route::get('/membership', [MembershipController::class, 'memberships']);
Route::post('/membership/send', [MembershipController::class, 'postMembership']);

Route::get('/contact_us', [ContactUsController::class, 'contactUs']);

Route::post('/contact_us/send', [ContactUsController::class, 'postContactUs']);

// CLICK GREEN
Route::get('/member', [ClickGreenController::class, 'cg_member']);

Route::get('/about', [ClickGreenController::class, 'cg_about']);

Route::get('/login', [ClickGreenController::class, 'cg_login']);