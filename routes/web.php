<?php

use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PreceptoriaController;
use App\Http\Controllers\SecretariaController;
use App\Models\Curso;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
 * RUTAS DE ADMINISTRADOR CON SPATIE
 */
Route::group(['middleware' => ['role:admin']], function() {
    Route::prefix('admin')->name('admin.')->group(function() {
        Route::resource('/usuarios', UsuariosController::class);
    });
});

/*
* RUTAS DE SECRETARÍA
*/
Route::group(['middleware' => ['role_or_permission:admin|secretario']], function() {
    Route::prefix('secretaria')->name('secretaria.')->group(function() {
        Route::resource('secretaria', SecretariaController::class);
        Route::resource('estudiantes', EstudianteController::class);
        Route::resource('cursos', CursoController::class);
        Route::resource('docentes', DocenteController::class);
    });
});

/*
* RUTAS DE PRECEPTORÍA
*/
Route::group(['middleware' => ['role_or_permission:admin|preceptor']], function() {
    Route::prefix('preceptoria')->name('preceptoria.')->group(function() {
        Route::resource('/asistencia', PreceptoriaController::class);
    });
});
