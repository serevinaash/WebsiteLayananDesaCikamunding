<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\ServiceController;
use App\Http\Controllers\Admin\WargaDesaController;
use App\Http\Controllers\Admin\AdminDesaController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\FeedbackController;


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

// Guest
Route::get('/', [GuestController::class, 'wellcome'])->name('wellcome');
Route::get('/informasi', [GuestController::class, 'informasi'])->name('informasi');
Route::get('/weather/banten', function (WeatherService $weatherService) {
    $weatherData = $weatherService->getWeatherByCity('Banten');

    if (!$weatherData) {
        return response()->json(['error' => 'Unable to fetch weather data'], 500);
    }

    return view('weather', compact('weatherData'));
});

// Laman berita
Route::get('/berita', [GuestController::class, 'berita'])->name('berita');

// Feedback
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');



// Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginUser'])->name('login.user');
Route::post('/register', [AuthController::class, 'registerUser'])->name('register.user');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// User
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardUser'])->name('dashboard.user');
    Route::get('/notifikasi', [DashboardController::class, 'notifkasi'])->name('notifikasi');

    // Antrian
    Route::get('/antrian', [ServiceController::class, 'antrian'])->name('antrian');
    Route::get('/antrian/{id}', [ServiceController::class, 'antrianDetail'])->name('antrian.detail');
    Route::post('/antrian', [ServiceController::class, 'antrianStore'])->name('antrian.store');

    // Pengajuan
    Route::get('/pengajuan', [ServiceController::class, 'pengajuan'])->name('pengajuan');
    Route::get('/pengajuan/{id}', [ServiceController::class, 'pengajuanDetail'])->name('pengajuan.detail');
    Route::post('/pengajuan', [ServiceController::class, 'pengajuanStore'])->name('pengajuan.store');

    // Pengaduan
    Route::get('/pengaduan', [ServiceController::class, 'pengaduan'])->name('pengaduan');
    Route::get('/pengaduan/{id}', [ServiceController::class, 'pengaduanDetail'])->name('pengaduan.detail');
    Route::post('/pengaduan', [ServiceController::class, 'pengaduanStore'])->name('pengaduan.store');

     //cuaca
     Route::get('/weather/banten', function (WeatherService $weatherService) {
        $weatherData = $weatherService->getWeatherByCity('Banten');

        if (!$weatherData) {
            return response()->json(['error' => 'Unable to fetch weather data'], 500);
        }

        return view('weather', compact('weatherData'));
    });

});

// Admin
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardAdmin'])->name('dashboard.admin');

    // Admin Desa
    Route::get('/admin-desa', [AdminDesaController::class, 'index'])->name('admin.desa.index');
    Route::post('/admin-desa', [AdminDesaController::class, 'store'])->name('admin.desa.store');
    Route::get('/admin-desa/{id}', [AdminDesaController::class, 'show'])->name('admin.desa.show');
    Route::get('/admin-desa/{id}/edit', [AdminDesaController::class, 'edit'])->name('admin.desa.edit');
    Route::put('/admin-desa/{id}', [AdminDesaController::class, 'update'])->name('admin.desa.update');
    Route::delete('/admin-desa/{id}', [AdminDesaController::class, 'destroy'])->name('admin.desa.destroy');

    // Warga Desa
    Route::get('/warga-desa', [WargaDesaController::class, 'index'])->name('warga.desa.index');
    Route::post('/warga-desa', [WargaDesaController::class, 'store'])->name('warga.desa.store');
    Route::get('/warga-desa/{id}', [WargaDesaController::class, 'show'])->name('warga.desa.show');
    Route::get('/warga-desa/{id}/edit', [WargaDesaController::class, 'edit'])->name('warga.desa.edit');
    Route::put('/warga-desa/{id}', [WargaDesaController::class, 'update'])->name('warga.desa.update');
    Route::delete('/warga-desa/{id}', [WargaDesaController::class, 'destroy'])->name('warga.desa.destroy');

    // Layanan
    // --- Feedback
    Route::get('/layanan/feedback', [FeedbackController::class, 'adminIndex'])->name('admin.feedback.index');

    // --- Pengajuan
    Route::get('/pengajuan', [AdminServiceController::class, 'pengajuan'])->name('admin.pengajuan.index');
    Route::get('/pengajuan/{id}', [AdminServiceController::class, 'pengajuanDetail'])->name('admin.pengajuan.show');
    Route::put('/pengajuan/{id}', [AdminServiceController::class, 'pengajuanUpdate'])->name('admin.pengajuan.update');

    // --- Pengaduan
    Route::get('/pengaduan', [AdminServiceController::class, 'pengaduan'])->name('admin.pengaduan.index');
    Route::get('/pengaduan/{id}', [AdminServiceController::class, 'pengaduanDetail'])->name('admin.pengaduan.show');
    Route::put('/pengaduan/{id}', [AdminServiceController::class, 'pengaduanUpdate'])->name('admin.pengaduan.update');



});
// Manifest.json Route
Route::get('/manifest.json', function () {
    return response()->file(public_path('manifest.json'));
});


