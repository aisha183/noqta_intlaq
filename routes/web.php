<?php

use App\Http\Controllers\RequestController;
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

Auth::routes();

Route::get ('/', function () {
    return view ('welcome');
});

Route::get ('/Comp', function () {
    return view ('layouts.layout_Company');
});

Route::group (['prefix' => 'admin'], function () {
    Route::resource ('/test', 'TestController');
    Route::resource ('/company', 'CompaniesController');
    Route::resource ('/companyBlock', 'CompanyBlockController');

    Route::resource ('/trainees', 'TraineesController');
    Route::resource ('/trainingreq', 'TrainingRequestsController');
    Route::resource ('/trainingopts', 'TrainingOptsController');
});

Route::group (['prefix' => 'companies'], function () {
    Route::resource ('/companyinfo', 'CompanyInfoController')->middleware('auth');
    Route::resource ('/companyopt', 'CompanyOptController')->middleware('auth');
    Route::resource ('/addopt', 'CompanyAddOptController')->middleware('auth');
    Route::resource ('/cositting', 'CompanySittingController')->middleware('auth');
});


Route::group (['prefix' => 'website'], function () {
    Route::resource ('/login', 'LoginController');
    Route::resource ('/Home', 'HomeController');
    Route::resource ('/contact', 'ContactController');
    Route::resource ('/companyinfo/{id}/', 'CoInfoController');
    Route::resource ('/trainingrequest/{id}/', 'RequestController');
    Route::resource ('/trainingopts', 'OptsController');
    Route::resource ('/about', 'AboutController');
});

Route::get ('company/edit/{id}', 'CompaniesController@edit')->name ('company.edit');
Route::post ('company/update/{id}', 'CompaniesController@update')->name ('admin.company.update');
Route::post ('addcompany', 'CompaniesController@store')->name ('company.store');
Route::post ('company/delete/{id}', 'CompaniesController@destroy')->name ('company.delete');
Route::post ('company/restor/{id}', 'CompanyBlockController@restore')->name ('company.restore');
Route::post ('trainer/delete/{id}', 'TraineesController@destroy')->name ('trainer.delete');
Route::post ('company/chance/delete/{id}', 'TrainingOptsController@destroy')->name ('company.chance.delete');

Route::post ('status/post/{id}', 'TrainingOptsController@postStatuse')->name ('opts.status.post');
Route::post ('status/sketsh/{id}', 'TrainingOptsController@sketshStatuse')->name ('opts.status.sketsh');
Route::post ('status/waiting /{id}', 'TrainingOptsController@waitingStatuse')->name ('opts.status.waiting');
Route::post ('status/ignore/{id}', 'TrainingOptsController@ignoreStatuse')->name ('opts.status.ignore');


Route::post('company/chance/Publish/{id}', 'TrainingOptsController@Publish')->name('company.chance.Publish');
Route::post('company/chance/Unpublish/{id}', 'TrainingOptsController@Unpublish')->name('company.chance.Unpublish');

Route::get('/changeStatus', 'TrainingOptsController@changeStatus')->name('changeStatus');


Route::get ('/search', 'HomeController@search')->name ('search');

Route::get ('/sendemail', 'RequestController@index');
Route::post ('/sendemail/send/', 'RequestController@send');



Route::get ('userChangeStatus', 'TrainingOptsController@userChangeStatus');


Route::get ('/home', [App\Http\Controllers\HomeController::class, 'index'])->name ('home');



