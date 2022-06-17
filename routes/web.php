<?php

use App\Http\Livewire\Admin\Academico\AcademicoIndex;
use App\Http\Livewire\Admin\Academico\Asignaturas\AsignaturasCrear;
use App\Http\Livewire\Admin\Academico\Asignaturas\AsignaturasIndex;
use App\Http\Livewire\Admin\Alumnos\Crear;
use App\Http\Livewire\Admin\Alumnos\IndexAlumnos as AlumnosIndexAlumnos;
use App\Http\Livewire\Admin\Alumnos\Mostrar;
use App\Http\Livewire\Admin\IndexAcademico;
use App\Http\Livewire\Admin\IndexAlumnos;
use App\Http\Livewire\Admin\IndexMaestros;
use App\Http\Livewire\Admin\IndexUsuarios;
use App\Http\Livewire\Admin\Maestros\MaestrosIndex;
use App\Http\Livewire\IndexHome;
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
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware' => 'auth'],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/inicio',IndexHome::class)->name('index.home');
     /* ruta admin de academico */
    Route::get('/academico',AcademicoIndex::class)->name('academico.index');
    Route::get('/asignatura',AsignaturasIndex::class)->name('asignatura.index');
    Route::get('/asignatura/crear',AsignaturasCrear::class)->name('asignatura.crear');
    /* ruta admin de alumnos */
    Route::get('/alumnos',AlumnosIndexAlumnos::class)->name('alumnos.index');
    Route::get('/alumnos/crear',Crear::class)->name('alumnos.crear');
    Route::get('alumnos/{alumno}/mostrar',Mostrar::class)->name('alumnos.mostrar');
    /* ruta admin de maestros */
    Route::get('/maestros',MaestrosIndex::class)->name('maestros.index');

});
