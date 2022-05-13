<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// info Routes
Route::get('/info', [App\Http\Controllers\InfoController::class, 'edit'])->name('info');
Route::post('/info/update/{id}', [App\Http\Controllers\InfoController::class, 'update'])->name('info/update');

Route::get('/info11', [App\Http\Controllers\InfoController::class, 'show_iframe'])->name('info11');

// equipes Routes
Route::get('equipes', [App\Http\Controllers\EquipesController::class, 'index'])->name('equipes');
Route::get('equipes/create', [App\Http\Controllers\EquipesController::class, 'create'])->name('equipes/create');
Route::post('equipes/store', [App\Http\Controllers\EquipesController::class, 'store'])->name('equipes/store');
Route::get('equipes/edit/{id}', [App\Http\Controllers\EquipesController::class, 'edit'])->name('equipes/edit');
Route::post('equipes/update/{id}', [App\Http\Controllers\EquipesController::class, 'update'])->name('equipes/update');
Route::get('equipes/destroy/{id}', [App\Http\Controllers\EquipesController::class, 'destroy'])->name('equipes/destroy');

// Axe Routes
Route::get('Axe', [App\Http\Controllers\AxesController::class, 'index'])->name('Axe');
Route::get('Axe/create', [App\Http\Controllers\AxesController::class, 'create'])->name('Axe/create');
Route::post('Axe/store', [App\Http\Controllers\AxesController::class, 'store'])->name('Axe/store');
Route::get('Axe/edit/{id}', [App\Http\Controllers\AxesController::class, 'edit'])->name('Axe/edit');
Route::post('Axe/update/{id}', [App\Http\Controllers\AxesController::class, 'update'])->name('Axe/update');
Route::get('Axe/destroy/{id}', [App\Http\Controllers\AxesController::class, 'destroy'])->name('Axe/destroy');

//partenaire_routes
Route::get('partenaires', [App\Http\Controllers\PartenaireController::class, 'index'])->name('partenaires');
Route::get('partenaire/create', [App\Http\Controllers\PartenaireController::class, 'create'])->name('partenaire/create');
Route::post('partenaire/store', [App\Http\Controllers\PartenaireController::class, 'store'])->name('partenaire/store');
Route::get('partenaire/show/{id}', [App\Http\Controllers\PartenaireController::class, 'show'])->name('partenaire/show');
Route::get('partenaire/edit/{id}', [App\Http\Controllers\PartenaireController::class, 'edit'])->name('partenaire/edit');
Route::post('partenaire/update/{id}', [App\Http\Controllers\PartenaireController::class, 'update'])->name('partenaire/update');
Route::get('partenaire/destroy/{id}', [App\Http\Controllers\PartenaireController::class, 'destroy'])->name('partenaire/destroy');

//projet _ routes
Route::get('projets', [App\Http\Controllers\ProjetsController::class, 'index'])->name('projets');
Route::get('projet/create', [App\Http\Controllers\ProjetsController::class, 'create'])->name('projet/create');
Route::post('projet/store', [App\Http\Controllers\ProjetsController::class, 'store'])->name('projet/store');
Route::get('projet/show/{id}', [App\Http\Controllers\ProjetsController::class, 'show'])->name('projet/show');
Route::get('projet/edit/{id}', [App\Http\Controllers\ProjetsController::class, 'edit'])->name('projet/edit');
Route::post('projet/update/{id}', [App\Http\Controllers\ProjetsController::class, 'update'])->name('projet/update');
Route::get('projet/destroy/{id}', [App\Http\Controllers\ProjetsController::class, 'destroy'])->name('projet/destroy');

//activite_routes
 Route::get('activite', [App\Http\Controllers\ActiviteController::class, 'index'])->name('activite');
 Route::get('activite/create', [App\Http\Controllers\ActiviteController::class, 'create'])->name('activite/create');
 Route::post('activite/store', [App\Http\Controllers\ActiviteController::class, 'store'])->name('activite/store');
 Route::get('activite/show/{id}', [App\Http\Controllers\ActiviteController::class, 'show'])->name('activite/show');
 Route::get('activite/edit/{id}', [App\Http\Controllers\ActiviteController::class, 'edit'])->name('activite/edit');
 Route::post('activite/update/{id}', [App\Http\Controllers\ActiviteController::class, 'update'])->name('activite/update');
 Route::get('activite/destroy/{id}', [App\Http\Controllers\ActiviteController::class, 'destroy'])->name('activite/destroy');

  //Presse _routes
  Route::get('presse', [App\Http\Controllers\PresseController::class, 'index'])->name('presse');
  Route::get('presse/create', [App\Http\Controllers\PresseController::class, 'create'])->name('presse/create');
  Route::post('presse/store', [App\Http\Controllers\PresseController::class, 'store'])->name('presse/store');
  Route::get('presse/show/{id}', [App\Http\Controllers\PresseController::class, 'show'])->name('presse/show');
  Route::get('presse/edit/{id}', [App\Http\Controllers\PresseController::class, 'edit'])->name('presse/edit');
  Route::post('presse/update/{id}', [App\Http\Controllers\PresseController::class, 'update'])->name('presse/update');
  Route::get('presse/destroy/{id}', [App\Http\Controllers\PresseController::class, 'destroy'])->name('presse/destroy');

  //Mail _routes
  Route::get('mail', [App\Http\Controllers\MailsController::class, 'index'])->name('mail');
  Route::get('mail/create', [App\Http\Controllers\MailsController::class, 'create'])->name('mail/create');
  Route::post('mail/store', [App\Http\Controllers\MailsController::class, 'store'])->name('mail/store');
  Route::get('mail/show/{id}', [App\Http\Controllers\MailsController::class, 'show'])->name('mail/show');
  Route::get('mail/edit/{id}', [App\Http\Controllers\MailsController::class, 'edit'])->name('mail/edit');
  Route::post('mail/update/{id}', [App\Http\Controllers\MailsController::class, 'update'])->name('mail/update');
  Route::get('mail/destroy/{id}', [App\Http\Controllers\MailsController::class, 'destroy'])->name('mail/destroy');
 
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashbord', [App\Http\Controllers\HomeController::class, 'dashbord'])->name('dashbord');
