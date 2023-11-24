<?php

use App\Http\Controllers\ManzanaController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Ruta para ver los datos de las manzanas
Route::get('/paginaManzanas', [ManzanaController::class, 'index'])->name('paginaManzanas');


//Ruta para rellenar los datos del la manzana que se va a insertar
Route::get('/crearManzanaFormulario', [ManzanaController::class, 'create'])->name('crearManzanaFormulario');

//Ruta para añadir el coche a la BDD que se ha rellenado en el formulario de la ruta anterior
Route::post('/anadirManzana', [ManzanaController::class, 'store'])->name('anadirManzana');

//Ruta para rellenar los datos del coche que se va ha modificar
Route::get('/modificarManzanaFormulario/{id}', [ManzanaController::class, 'edit'])->name('modificarManzanaFormulario');

//Ruta para modificar el coche en la BDD que se ha modificado en el formulario de la ruta anterior
Route::put('/actualizarManzana', [ManzanaController::class, 'update'])->name('actualizarManzana');

//Ruta para eliminar un coche que se ha selecionado 
Route::delete('/eliminarManzana/{id}', [ManzanaController::class, 'destroy'])->name('eliminarManzana');


