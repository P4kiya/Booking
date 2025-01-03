<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\AppartementController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserContoller;
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




// routes/web.php

Route::get('/admin/calendar', [AgencyController::class, 'addAgency'])->name('addAgency')->middleware('checkuser');
Route::post('/admin/calendar/store', [AgencyController::class, 'storeAgency'])->name('storeAgency')->middleware('checkuser');

Route::get('/admin/login', [UserContoller::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [UserContoller::class, 'login']);

Route::get('/admin/profile/{id}', function () { return view('profile'); })->middleware('checkuser');
Route::get('/admin/profile/', function () { return view('profile'); })->middleware('checkuser');

Route::get('/admin/settings', function () { return view('settings'); })->middleware('checkuser');



Route::get('/admin', [Controller::class, 'showDashboard'])->name('dashboard')->middleware('checkuser');

Route::get('/admin/clients', [ClientsController::class, 'getClients'])->name('clients')->middleware('checkuser');
Route::get('/admin/add-client', [ClientsController::class, 'addClient'])->name('add_client')->middleware('checkuser');
Route::post('/admin/add-client/store', [ClientsController::class, 'store'])->name('storeClient')->middleware('checkuser');
Route::get('/admin/edit-client/{id}', [ClientsController::class, 'editclient'])->name('edit_client')->middleware('checkuser');
Route::post('/admin/edit-client/update/{id}', [ClientsController::class, 'update'])->name('updateClient')->middleware('checkuser');
Route::get('/admin/clients/delete/{id}', [ClientsController::class, 'deleteClient'])->name('delete_client')->middleware('checkuser');



Route::get('/admin/appartements', [AppartementController::class, 'getAppartements'])->name('appartements')->middleware('checkuser');
Route::post('/admin/appartements/status/{id}', [AppartementController::class, 'status'])->name('status')->middleware('checkuser');
Route::get('/admin/add-appartement', [AppartementController::class, 'addAppartement'])->name('add_appartement')->middleware('checkuser');
Route::post('/admin/add-appartement/store', [AppartementController::class, 'store'])->name('storeaAppartement')->middleware('checkuser');
Route::get('/admin/edit-appartement/{id}', [AppartementController::class, 'editappartement'])->name('edit_appartement')->middleware('checkuser');
Route::post('/admin/edit-appartement/update/{id}', [AppartementController::class, 'update'])->name('updateAppartement')->middleware('checkuser');
Route::get('/admin/appartements/delete/{id}', [AppartementController::class, 'deleteAppartement'])->name('delete_appartement')->middleware('checkuser');



Route::get('/admin/reservation', [ReservationsController::class, 'getReservations'])->name('reservations')->middleware('checkuser');
Route::post('/admin/reservation/statusConfirme/{id}', [ReservationsController::class, 'statusConfirme'])->name('statusConfirme')->middleware('checkuser');
Route::post('/admin/reservation/statusAnnule/{id}', [ReservationsController::class, 'statusAnnule'])->name('statusAnnule')->middleware('checkuser');
Route::get('/admin/add-reservation', [ReservationsController::class, 'addReservation'])->name('add_reservation')->middleware('checkuser');
Route::post('/admin/add-reservation/store', [ReservationsController::class, 'store'])->name('storeReservation')->middleware('checkuser');
Route::get('/admin/get-reservation', [ReservationsController::class, 'getReservation'])->name('getReservation')->middleware('checkuser');
Route::get('/admin/edit-reservation/{id}', [ReservationsController::class, 'editReservation'])->name('edit_reservation')->middleware('checkuser');
Route::post('/admin/edit-reservation/update/{id}', [ReservationsController::class, 'update'])->name('updateReservation')->middleware('checkuser');
Route::get('/admin/reservation/delete/{id}', [ReservationsController::class, 'deleteReservation'])->name('delete_reservation')->middleware('checkuser');
Route::get('/admin/view-reservation/{id}', [ReservationsController::class, 'ViewReservations'])->name('view_reservation')->middleware('checkuser');

Route::get('/', function () {
    return redirect('/admin');
});


