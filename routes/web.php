<?php
use App\User;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Sentinel;
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

// Route Login & registration
Route::get('/login', 'Security\LoginController@login')->name('login');
Route::post('/login', 'Security\LoginController@postLogin');

Route::get('/register', 'Security\RegisterController@register')->name('register');
Route::post('/register', 'Security\RegisterController@registerUser'); 

// Route Recrutement view
Route::get('inscription', 'Admin\InscriptController@create')->name('student.create');
Route::post('etudiant-inscrit', 'Admin\InscriptController@store')->name('student.store');

// Route Gallery view
Route::get('/gallery-evenement', 'Admin\GalleryController@index')->name('pages.gallery');

// All routes secure and redirect
Route::group(['middleware' => ['visitors']], function() {
    
                // Route activation registration
        Route::get('/activate/{email}/{code}', 'Security\ActivationController@activate');

        Route::post('/logout', 'Security\LoginController@postLogout');
        Route::get('/forgot-password', 'Security\ForgotPassword@forgot')->name('forgot.password');
        Route::post('/forgot-password', 'Security\ForgotPassword@password')->name('password');

        Route::get('/reset/{email}/{code}', 'Security\ForgotPassword@reset');
        Route::post('/reset/{email}/{code}', 'Security\ForgotPassword@resetPassword');

        // Route of creation news of universite
        Route::get('/admin', 'Admin\NewsController@admin')->name('admin.index');
        Route::get('/creation-article', 'Admin\NewsController@create')->name('news.create');
        Route::post('/creation-article', 'Admin\NewsController@store')->name('news.store');
        Route::get('/modification-article/{news}/edit', 'Admin\NewsController@edit')->name('news.edit');
        Route::put('/modification-article/{news}', 'Admin\NewsController@update')->name('news.update');
        Route::delete('/delete-article/{news}', 'Admin\NewsController@destroy')->name('news.delete');

        // Route of the news students signed
        Route::get('/etudiant-inscrit', 'Admin\InscriptController@index')->name('student.index');

        // Route Gallery creation
        Route::get('/upload', 'Admin\GalleryController@create')->name('admin.gallery');
        Route::post('/upload', 'Admin\GalleryController@store')->name('admin.gallery.store');

        // Route Permission
        Route::get('/form', 'Form\FormController@form');
        Route::get('/permission', 'Security\PermissionController@assign');
        Route::post('/permission', 'Security\PermissionController@assignPermission'); 
        
        // Route Excel
        Route::get('/import', 'Admin\ImportController@importFile');
        Route::post('/import', 'Admin\ImportController@importExcel');

});

Route::group(['middleware' => ['admin']], function() {
    Route::get('report', 'Reports\ReportController@report');
});




// Route creation d'articles
Route::get('/', 'Admin\NewsController@index')->name('actualite');
Route::get('/vue/{slug}', 'Admin\NewsController@show')->name('pages.show');


Route::get('/welcome', function () {
    return view('welcome');
});

// Route Pages
Route::view('/our-story', 'pages.our-story');
Route::view('/student-space', 'pages.space');
Route::view('/contact-us', 'pages.contact');
Route::view('/archive', 'pages.archive');
Route::view('/staff-academique', 'pages.staff');
Route::view('/organisation-enseignement', 'pages.organ');
// End 