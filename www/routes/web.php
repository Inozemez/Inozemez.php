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

Route::get('/feedback', 'App\Http\Controllers\FeedbackController@index')->name('feedback.index');
Route::post('/feedback', 'App\Http\Controllers\FeedbackController@send')->name('feedback.send');

Route::get('/нове_оголошення', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/нове_оголошення', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache cancellata";
});

Route::get('/', function () {
    return view('home');
});

Route::get('/школи', function () {
    return view('schools');
});

Route::get('/підтримати_проект', function () {
    return view('patreon');
});

Route::get('/дипломатичні_представництва', function () {
    return view('embasy');
});
// Route::get('/оголошення', function () {
//     return view('mailform');
// });
Route::get('/no_ads', function () {
    return view('no_ads');
});
Route::get('/work', function () {
    return view('work');
});

Route::get('/житло_регіон', function () {
    return view('r_apartment');
});

Route::get('/все_житло', function () {
    return view('1apartmentall');
});

Route::get('/всі_перевізники', function () {
    return view('2carrierall');
});

Route::get('/юридичні_аспекти', function () {
    return view('legalaspects');
});
Route::get('/2email', function () {
    return view('2email');
});

Route::get('/перевізники_регіон', function () {
    return view('r_carrier');
});

Route::get('/робота_регіон', function () {
    return view('r_work');
});

Route::get('/послуги_регіон', function () {
    return view('r_services');
});

Route::get('/aboutsite', function () {
    return view('aboutsite');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/case', function () {
    return view('categorie.case');
});
 
Route::get('/категорія_житло_абруццо', function () {
    return view('1apartment.abruzzo');
});

Route::get('/категорія_житло_апулія', function () {
    return view('1apartment.puglia');
});

Route::get('/категорія_житло_базиліката', function () {
    return view('1apartment.basilicata');
});

Route::get('/категорія_житло_калабрія', function () {
    return view('1apartment.calabria');
});

Route::get('/категорія_житло_кампанія', function () {
    return view('1apartment.campania');
});

Route::get('/категорія_житло_емілія_романья', function () {
    return view('1apartment.emilia-romagna');
});

Route::get('/категорія_житло_лаціо', function () {
    return view('1apartment.lazio');
});

Route::get('/категорія_житло_лігурія', function () {
    return view('1apartment.liguria');
});

Route::get('/категорія_житло_ломбардія', function () {
    return view('1apartment.lombardia');
});

Route::get('/категорія_житло_марке', function () {
    return view('1apartment.marche');
});

Route::get('/категорія_житло_молізе', function () {
    return view('1apartment.molise');
});

Route::get('/категорія_житло_пємонте', function () {
    return view('1apartment.piemonte');
});

Route::get('/категорія_житло_тоскана', function () {
    return view('1apartment.toscana');
});

Route::get('/категорія_житло_умбрія', function () {
    return view('1apartment.umbria');
});

Route::get('/категорія_житло_венето', function () {
    return view('1apartment.veneto');
});

Route::get('/категорія_житло_фріулі_венеція_джулія', function () {
    return view('1apartment.friuli-venezia-giulia');
});

Route::get('/категорія_житло_сардинія', function () {
    return view('1apartment.sardegna');
});

Route::get('/категорія_житло_сицилія', function () {
    return view('1apartment.sicilia');
});

Route::get('/категорія_житло_трентіно_альто_адідже', function () {
    return view('1apartment.trento-alto-adige');
});

Route::get('/категорія_житло_валле-даоста', function () {
    return view('1apartment.vale-daosta');
});

Route::get('/категорія_перевізники_абруццо', function () {
    return view('2carrier.abruzzo');
});

Route::get('/категорія_перевізники_апулія', function () {
    return view('2carrier.puglia');
});

Route::get('/категорія_перевізники_базиліката', function () {
    return view('2carrier.basilicata');
});

Route::get('/категорія_перевізники_калабрія', function () {
    return view('2carrier.calabria');
});

Route::get('/категорія_перевізники_кампанія', function () {
    return view('2carrier.campania');
});

Route::get('/категорія_перевізники_емілія_романья', function () {
    return view('2carrier.emilia-romagna');
});

Route::get('/категорія_перевізники_лаціо', function () {
    return view('2carrier.lazio');
});

Route::get('/категорія_перевізники_лігурія', function () {
    return view('2carrier.liguria');
});

Route::get('/категорія_перевізники_ломбардія', function () {
    return view('2carrier.lombardia');
});

Route::get('/категорія_перевізники_марке', function () {
    return view('2carrier.marche');
});

Route::get('/категорія_перевізники_молізе', function () {
    return view('2carrier.molise');
});

Route::get('/категорія_перевізники_пємонте', function () {
    return view('2carrier.piemonte');
});

Route::get('/категорія_перевізники_тоскана', function () {
    return view('2carrier.toscana');
});

Route::get('/категорія_перевізники_умбрія', function () {
    return view('2carrier.umbria');
});

Route::get('/категорія_перевізники_венето', function () {
    return view('2carrier.veneto');
});

Route::get('/категорія_перевізники_фріулі_венеція_джулія', function () {
    return view('2carrier.friuli-venezia-giulia');
});

Route::get('/категорія_перевізники_сардинія', function () {
    return view('2carrier.sardegna');
});

Route::get('/категорія_перевізники_сицилія', function () {
    return view('2carrier.sicilia');
});

Route::get('/категорія_перевізники_трентіно_альто_адідже', function () {
    return view('2carrier.trento-alto-adige');
});

Route::get('/категорія_перевізники_валле-даоста', function () {
    return view('2carrier.vale-daosta');
});


Route::get('/категорія_робота_абруццо', function () {
    return view('3work.abruzzo');
});

Route::get('/категорія_робота_апулія', function () {
    return view('3work.puglia');
});

Route::get('/категорія_робота_базиліката', function () {
    return view('3work.basilicata');
});

Route::get('/категорія_робота_калабрія', function () {
    return view('3work.calabria');
});

Route::get('/категорія_робота_кампанія', function () {
    return view('3work.campania');
});

Route::get('/категорія_робота_емілія_романья', function () {
    return view('3work.emilia-romagna');
});

Route::get('/категорія_робота_лаціо', function () {
    return view('3work.lazio');
});

Route::get('/категорія_робота_лігурія', function () {
    return view('3work.liguria');
});

Route::get('/категорія_робота_ломбардія', function () {
    return view('3work.lombardia');
});

Route::get('/категорія_робота_марке', function () {
    return view('3work.marche');
});

Route::get('/категорія_робота_молізе', function () {
    return view('3work.molise');
});

Route::get('/категорія_робота_пємонте', function () {
    return view('3work.piemonte');
});

Route::get('/категорія_робота_тоскана', function () {
    return view('3work.toscana');
});

Route::get('/категорія_робота_умбрія', function () {
    return view('3work.umbria');
});

Route::get('/категорія_робота_венето', function () {
    return view('3work.veneto');
});

Route::get('/категорія_робота_фріулі_венеція_джулія', function () {
    return view('3work.friuli-venezia-giulia');
});

Route::get('/категорія_робота_сардинія', function () {
    return view('3work.sardegna');
});

Route::get('/категорія_робота_сицилія', function () {
    return view('3work.sicilia');
});

Route::get('/категорія_робота_трентіно_альто_адідже', function () {
    return view('3work.trento-alto-adige');
});

Route::get('/категорія_робота_валле-даоста', function () {
    return view('3work.vale-daosta');
});

Route::get('/категорія_послуги_абруццо', function () {
    return view('4services.abruzzo');
});

Route::get('/категорія_послуги_апулія', function () {
    return view('4services.puglia');
});

Route::get('/категорія_послуги_базиліката', function () {
    return view('4services.basilicata');
});

Route::get('/категорія_послуги_калабрія', function () {
    return view('4services.calabria');
});

Route::get('/категорія_послуги_кампанія', function () {
    return view('4services.campania');
});

Route::get('/категорія_послуги_емілія_романья', function () {
    return view('4services.emilia-romagna');
});

Route::get('/категорія_послуги_лаціо', function () {
    return view('4services.lazio');
});

Route::get('/категорія_послуги_лігурія', function () {
    return view('4services.liguria');
});

Route::get('/категорія_послуги_ломбардія', function () {
    return view('4services.lombardia');
});

Route::get('/категорія_послуги_марке', function () {
    return view('4services.marche');
});

Route::get('/категорія_послуги_молізе', function () {
    return view('4services.molise');
});

Route::get('/категорія_послуги_пємонте', function () {
    return view('4services.piemonte');
});

Route::get('/категорія_послуги_тоскана', function () {
    return view('4services.toscana');
});

Route::get('/категорія_послуги_умбрія', function () {
    return view('4services.umbria');
});

Route::get('/категорія_послуги_венето', function () {
    return view('4services.veneto');
});

Route::get('/категорія_послуги_фріулі_венеція_джулія', function () {
    return view('4services.friuli-venezia-giulia');
});

Route::get('/категорія_послуги_сардинія', function () {
    return view('4services.sardegna');
});

Route::get('/категорія_послуги_сицилія', function () {
    return view('4services.sicilia');
});

Route::get('/категорія_послуги_трентіно_альто_адідже', function () {
    return view('4services.trento-alto-adige');
});

Route::get('/категорія_послуги_валле-даоста', function () {
    return view('4services.vale-daosta');
});

Route::get('/категорія_послуги', function () {
    return view('categorie.services');
});

Route::get('/категорія_перевізники', function () {
    return view('categorie.carrier');
});

Route::get('/житло_оголошення_10', function () {
    return view('advertisement.10');
});
Route::get('/перевізники', function () {
    return view('advertisement.перевізники');
});
Route::get('/послуги', function () {
    return view('advertisement.послуги');
});
Route::get('/робота', function () {
    return view('advertisement.робота');
});
