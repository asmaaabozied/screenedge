<?php

use Illuminate\Support\Facades\Auth;

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
/*   fronted website
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', 'HomeController@index')->name('index');

//Route::post('password/savenewpassword', 'api/v1/ForgotPasswordController@reset');


Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');

    Artisan::call('config:cache');
    return "Cache is cleared";
});


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {
        Route::get('/', 'HomeController@website')->name('website');

        Route::get('/contacts', 'HomeController@contacts')->name('contacts');

        Route::post('/contacts/store', 'HomeController@contactstore')->name('contacts.store');

        Route::get('/companies', 'HomeController@companies')->name('companies');

        Route::get('/abouts', 'HomeController@abouts')->name('abouts');


    });






