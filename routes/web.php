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
    Route::get('security-policy', "HomeController@securityPolicy")->name('security-policy');
    Route::get('privacy-policy', "HomeController@privacyPolicy")->name('privacy-policy');
    Route::get('terms-of-use', "HomeController@termsOfUse")->name('terms-of-use');
    Route::post('submit-contact', "HomeController@submitContact")->name('submit-contact');
    Route::get('vata', "HomeController@vata")->name('vata');
    Route::get('career', "HomeController@career")->name('career');
    Route::get('job-details/{id}', "HomeController@jobDetails")->name('job-details');
    Route::get('apply-online/{id}', "HomeController@applyOnline")->name('apply-online');

    Route::post('submit-application', "CareerController@submitApplication")->name('submit-application');
    Route::get('applicants-copy', "CareerController@applicantsCopy")->name('applicants-copy');
    Route::get('download-application-form', "CareerController@downloadApplicationForm")->name('download-application-form');

    Route::get('user-login', "LoginController@showLogin")->name('user-login');
    Route::get('user-logout', "LoginController@studentLogout")->name('user-logout')->middleware('student_login');
    Route::post('submit-login', "LoginController@submitLogin")->name('submit-login');
    Route::get('user-signup', "RegisterController@showRegister")->name('user-signup');
    Route::post('submit-register', "RegisterController@submitRegister")->name('submit-register');
    Route::get('user-dashboard', "DashboardController@index")->name('user-dashboard')->middleware('student_login');

    Route::get('registration', "HomeController@registration")->name('registration');
    Route::get('get-district/{id}', "HomeController@getDistrict")->name('get-district');
    Route::get('get-thana/{id}', "HomeController@getThana")->name('get-thana');
    Route::get('get-union/{id}', "HomeController@getUnion")->name('get-union');
    Route::get('get-mul-district/{id}', "HomeController@getMulDistrict")->name('get-mul-district');
    Route::get('get-mul-thana/{id}', "HomeController@getMulThana")->name('get-mul-thana');
    Route::get('get-mul-union/{id}', "HomeController@getMulUnion")->name('get-mul-union');

    Route::post('add-admission', "StudentController@addAdmision")->name('add-admission');
    Route::get('user-profile', "StudentController@studentProfile")->name('user-profile')->middleware('student_login');
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
    Route::post('update-studDent-status', "StudentController@updateStudentStatus")->name('update-student-status');
    Route::get('download/{id}', "StudentController@download")->name('download');
    Route::get('manage-success-application', "JobController@successApplication")->name('manage-success-application');
    Route::post('update-status', "JobController@updateStatus")->name('update-status');
    Route::get('show-app', "JobController@showApp")->name('show-app');
    Route::get('delete-app/{id}', "JobController@deleteApp")->name('delete-app');
    Route::get('job-application/{id}', "JobController@jobApplication")->name('job-application');
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
    Route::resource('job', "JobController");
    
});

Auth::routes();
