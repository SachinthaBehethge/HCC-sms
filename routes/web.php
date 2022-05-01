<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


//public routes
//public routes
Route::get('/', 'HomeController@homepage')->name('homepage');
Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/about', 'HomeController@about')->name('about');
//Route::get('/contact', 'CourseController@contact')->name('contact');


Auth::routes(['verify'=>true]);
//auth routes website
Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('profile','ProfileController@index')->name('profile');
    Route::get('dashboard','HomeController@dashboard')->name('dashboard');
    Route::get('students','HomeController@classstudent')->name('students');
    Route::get('student.view','HomeController@studentview')->name('student.view');

    Route::resource('notices','NoticeController');
    Route::get('notices.index','NoticeController@index')->name('notices.index');
    Route::resource('studentdashboard','StudentdashboardController');
    Route::get('notices','StudentdashboardController@notice')->name('notice');
    Route::get('subjects','StudentdashboardController@subject')->name('subjects');
    Route::get('exams','StudentdashboardController@exam')->name('exams');
    Route::resource('marks','MarkController');
    Route::get('marksheet','MarkController@marksheet')->name('marksheet');
    Route::get('schoolnotice','NoticeController@schoolnotice')->name('schoolnotice');
    Route::resource('achievements','AchievementController');


});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//logout
Route::group(['middleware' => ['auth']], function () {

    Route::post('/logout','Auth\LoginController@logout')->name('logout');
   
    
});


    
    //admin dashboard
Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/admin', 'HomeController@admin')->name('admin');
});

//admin controls
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','admin']], function () {
    
    Route::resource('student', 'StudentController');
    Route::resource('grades', 'GradeController');
    Route::resource('teachers', 'teacherController');
    Route::resource('sections', 'SectionController');
    Route::resource('subjects', 'SubjectController');
    Route::post('classteacher','TeacherController@classteacher')->name('teachers.classteacher');
    Route::resource('classes', 'classController');
    Route::resource('termtests', 'TermtestController');
    Route::resource('terms','TermController');
    Route::resource('schoolnotices','SchoolnoticeController');

});