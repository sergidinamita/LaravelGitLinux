<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\EnquestaController;
use App\Http\Controllers\DishchargeController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación. Estas
| rutas son cargadas por RouteServiceProvider y todas serán asignadas al
| grupo de middleware "web". ¡Haz algo grandioso!
|
*/

// Rutas de Fortify
Route::group(['prefix' => config('fortify.routes.prefix')], function () {
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

      // Logout route with POST method for CSRF protection
     //   Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/home', [HomeController::class, 'mostrarEmpresa'])->name('home');

});

Route::get('/informes' , [InformesController::class , 'getInformes']);

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/home', [HomeController::class, 'mostrarEmpresa'])->name('home');

Route::get('/get-encuestas-por-empresa/{id_empresa}', [HomeController::class, 'getEncuestasPorEmpresa']);


//Rutas Survey
Route::get('/survey', function () {
    return view('survey');
});


//Rutas discarch
Route::get('/new-company', function () {
    return view('discharge.new-company');
})->name('new_company');

Route::get('/new-survey', [DishchargeController::class, 'LoadDischargeSurvey'])->name('new_survey');
Route::post('/submit-localitzacio', [DishchargeController::class, 'DischargeCompany'])->name('submit-localitzacio');

Route::post('/new-survey', [DishchargeController::class, 'DischargeSurvey'])->name('new_survey');


Route::get('/new-new_option', function () {
    return view('discharge.new-option');
})->name('new_option');

Route::post('/new_option', [DishchargeController::class, 'InsertOption'])->name('new_option');


Route::get('/new-ask', [DishchargeController::class, 'LoadDischargeAsk'])->name('new_ask');

// para obtener los primperos datos de new-ask
Route::get('/new-ask', [DishchargeController::class, 'LoadDischargeAsk'])->name('new_ask');

//para insertar la pregutna a la base de datos
Route::post('/new-ask', [DishchargeController::class, 'insert_new_ask'])->name('new_ask');

//Vista encuesta especificada
Route::get('/enquesta', [EnquestaController::class,'getEnquesta'])->name('enquesta');


//vista pregunta para obtener opciones new-ask
Route::get('/getopciones', [DishchargeController::class,'getopciones'])->name('getopciones');


// Otras rutas
Route::get('/', function () {
    return view('welcome');
});
