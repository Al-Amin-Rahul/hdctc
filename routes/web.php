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
Route::group(['namespace' => 'Front'], function () {
    
    Route::get('/', "HomeController@index")->name('home');
    Route::get('about-us', "HomeController@aboutUs")->name('about-us');
    Route::get('contact-us', "HomeController@contacttUs")->name('contact-us');
    Route::get('gallery', "HomeController@gallery")->name('gallery');
    Route::get('faq', "HomeController@faq")->name('faq');
    Route::get('course-details/{id}', "HomeController@courseDetails")->name('course-details');
    Route::get('student-copy', "HomeController@studentCopy")->name('student-copy');
    Route::get('security-policy', "HomeController@securityPolicy")->name('security-policy');
    Route::get('privacy-policy', "HomeController@privacyPolicy")->name('privacy-policy');
    Route::get('terms-of-use', "HomeController@termsOfUse")->name('terms-of-use');
    Route::post('submit-contact', "HomeController@submitContact")->name('submit-contact');

    Route::get('student-login', "LoginController@showLogin")->name('student-login');
    Route::get('student-logout', "LoginController@studentLogout")->name('student-logout')->middleware('student_login');
    Route::post('submit-login', "LoginController@submitLogin")->name('submit-login');
    Route::get('student-signup', "RegisterController@showRegister")->name('student-signup');
    Route::post('submit-register', "RegisterController@submitRegister")->name('submit-register');
    Route::get('student-dashboard', "DashboardController@index")->name('student-dashboard')->middleware('student_login');

    Route::get('student-registration', "HomeController@registration")->name('student-registration');
    Route::get('get-district/{id}', "HomeController@getDistrict")->name('get-district');
    Route::get('get-thana/{id}', "HomeController@getThana")->name('get-thana');
    Route::get('get-union/{id}', "HomeController@getUnion")->name('get-union');
    Route::get('get-mul-district/{id}', "HomeController@getMulDistrict")->name('get-mul-district');
    Route::get('get-mul-thana/{id}', "HomeController@getMulThana")->name('get-mul-thana');
    Route::get('get-mul-union/{id}', "HomeController@getMulUnion")->name('get-mul-union');

    Route::post('add-admission', "StudentController@addAdmision")->name('add-admission');
    Route::get('download-reciept', "StudentController@downloadReciept")->name('download-reciept');
    Route::get('student-profile', "StudentController@studentProfile")->name('student-profile')->middleware('student_login');
    Route::get('daily-work-sheet', "StudentController@dailyWorkSheet")->name('daily-work-sheet')->middleware('student_login');
    Route::get('submit-information', "StudentController@submitInformation")->name('submit-information')->middleware('student_login');
    Route::post('submit-student-info', "StudentController@submitStudentInfo")->name('submit-student-info')->middleware('student_login');
    Route::post('update-student', "StudentController@updateStudent")->name('update-student')->middleware('student_login');
    Route::get('change-password', "StudentController@changePassword")->name('change-password')->middleware('student_login');
    Route::post('update-password', "StudentController@updatePassword")->name('update-password')->middleware('student_login');
    
});
Route::namespace('Admin')->prefix('admin')->as('admin.')->middleware('auth')->group(function(){
    
    Route::get('dashboard', "DashboardController@index")->name('dashboard');
    Route::post('search-student', "StudentController@search")->name('search-student');
    Route::post('print-union-student', "StudentController@printUnionStudent")->name('print-union-student');
    Route::post('search-register-student', "StudentRegisterController@search")->name('search-register-student');
    Route::post('update-student-status', "StudentController@updateStudentStatus")->name('update-student-status');
    Route::resource('slider', "SliderController");
    Route::resource('student', "StudentController");
    Route::resource('student-register', "StudentRegisterController");
    Route::resource('work', "WorkController");
    Route::resource('image', "ImageController");
    Route::resource('contact', "ContactController");
    Route::resource('student-submit-info', "StudentSubmitInfoController");
    Route::resource('news', "NewsController");
    Route::resource('testimonial', "TestimonialController");
    Route::resource('course', "CourseController");
    Route::resource('prospect', "ProspectController");
    Route::resource('course-detail', "CourseDetailsController");
    
});

Auth::routes();
