<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\clientcontroller;

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

Route::get('/liste-ecoles-prives-meknes',[clientcontroller::class, 'ecoles'])->name('ecoles');
Route::post('/liste-ecoles-prives-meknes',[clientcontroller::class, 'ecoles']);

Route::get('/',[clientcontroller::class, 'listecoles']);

Route::get('/contact', function () {
    return view('ClientViews.Contact')->with('errors','none');
});
Route::post('/contact',[clientcontroller::class, 'contacter']);

Route::get('/search',[clientcontroller::class, 'searching'])->name('search');
Route::post('/search',[clientcontroller::class, 'searchingpost'])->name('searchpost');


Route::get('/liste-ecoles-prives-meknes/{id}',[clientcontroller::class, 'listes'])->name('listes');
Route::post('/liste-ecoles-prives-meknes/{id}',[clientcontroller::class, 'listes'])->name('listes');

Route::get('/commander/{id}/{ecole_id}',[clientcontroller::class, 'commander'])->name('commander');

Route::post('/commandeStore/{id}',[clientcontroller::class, 'commandeStore'])->name('commandeStore');

Route::post('/cookie', [clientcontroller::class, 'setCookie']);

Route::get('language-change', [clientcontroller::class, 'changeLanguage'])->name('changeLanguage');

Route::get('/acceuil', function () {
    return view('ClientViews.Acceuil');
});
Route::get('/entreprise', function () {
    return view('ClientViews.Entreprise');
});
Route::get('/merci', function () {
    return view('ClientViews.Merci');
});
Route::get('/admin/dashboard', function () {
    return view('AdminViews.Dashboard');
});
Route::get('/Comment-passer-une-commande', function () {
    return view('ClientViews.conditions-generales');
});
Route::get('/Conditions-générales-de-vente', function () {
    return view('ClientViews.cgv');
});
Route::get('/admin',[admincontroller::class, 'connexion'])->name('admin');
Route::post('/admin/login',[admincontroller::class, 'authenticate']);
Route::get('/admin/logout',[admincontroller::class, 'logout']);

Route::get('/admin/ecoles',[admincontroller::class, 'gestionEcole'])->middleware('auth');
Route::post('/admin/ajouterEcole',[admincontroller::class, 'storeEcole'])->middleware('auth');
Route::get('/admin/deleteEcole/{id}',[admincontroller::class, 'destroyecole'])->middleware('auth');

Route::get('/admin/ajouterListe',[admincontroller::class, 'ajoutliste'])->middleware('auth');
Route::post('/admin/ajouterListe',[admincontroller::class, 'storelist'])->middleware('auth');



Route::get('/admin/commandes',[admincontroller::class, 'gestCommandes'])->name('commandes')->middleware('auth');
Route::get('/admin/commandes/{status}',[admincontroller::class, 'gestCommandes_stat'])->middleware('auth');

Route::get('/admin/UpdateCommande/{id}',[admincontroller::class, 'gestfils'])->name('gestfils')->middleware('auth');

Route::post('/admin/UpdateCommande/updatefils',[admincontroller::class, 'updatefils'])->middleware('auth');
Route::post('/admin/UpdateCommande/updatePere',[admincontroller::class, 'updatePere'])->middleware('auth');
Route::get('/admin/print/{id}',[admincontroller::class, 'printcommande'])->middleware('auth');

Route::get('/admin/UpdateCommande/{id}/{status}',[admincontroller::class, 'upCommandes'])->middleware('auth');