<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\SolicitudSoftwareController;
use App\Models\Laboratorio; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect('/redirect');
})->middleware(['auth'])->name('dashboard');

Route::get('/redirect',[RedirectController::class,'index'])->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('usuarios', UsuarioController::class);

    // 👨‍🏫 PROFESOR
    Route::prefix('profesor')->name('profesor.')->group(function () {

        Route::get('/solicitudes/create', [SolicitudSoftwareController::class, 'create'])
            ->name('solicitudes.create');

        Route::post('/solicitudes', [SolicitudSoftwareController::class, 'store'])
            ->name('solicitudes.store');

        Route::get('/solicitudes', [SolicitudSoftwareController::class, 'index'])
            ->name('solicitudes.index');
    });

    // 👨‍💼 ADMIN
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::resource('laboratorios', LaboratorioController::class);

        Route::get('/solicitudes', [SolicitudSoftwareController::class, 'all'])
            ->name('solicitudes.index');
        Route::get('/solicitudes/{id}/edit', [SolicitudSoftwareController::class, 'edit'])
            ->name('solicitudes.edit');

        Route::put('/solicitudes/{id}', [SolicitudSoftwareController::class, 'update'])
            ->name('solicitudes.update');
        Route::delete('/solicitudes/{id}', [SolicitudSoftwareController::class, 'destroy'])
            ->name('solicitudes.destroy');
    });

    // 🧑‍🔧 TECNICO 🔥 (LO QUE NECESITAS)
    Route::prefix('tecnico')->name('tecnico.')->group(function () {

        Route::get('/solicitudes', [SolicitudSoftwareController::class, 'all'])
            ->name('solicitudes.index');
    });

});


Route::get('/admin', function () {
    $laboratorios = Laboratorio::all();

    return view('admin.dashboard', compact('laboratorios'));
})->middleware('auth');

Route::get('/usuarios',[UsuarioController::class,'index'])->middleware('auth');
Route::resource('usuarios', UsuarioController::class);

Route::get('/profesor', function () {
    return view('profesor.dashboard');
})->middleware('auth');

Route::get('/tecnico', function () {
    return view('tecnico.dashboard');
})->middleware('auth');

require __DIR__.'/auth.php';
