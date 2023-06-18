<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\CourseAppController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MApplicationController;
use App\Http\Controllers\MCardApplicationController;
use App\Http\Controllers\MRegistrationController;
use App\Http\Controllers\UserController;
use App\Models\MApplication;
use App\Http\Controllers\MConsultController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return redirect('/dashboard');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');

    //Marriage Course Applicant
    Route::get('/marriage-course', [CourseAppController::class, 'index'])->name('manageMCourse.index');
    Route::get('/marriage-course/register', [CourseAppController::class, 'createApp'])->name('manageMCourse.courseRegisteration');
    Route::post('/marriage-course/store-course', [CourseAppController::class, 'storeApp'])->name('regCourse.store');
    Route::get('/marriage-course/{course_app}/edit-course', [CourseAppController::class, 'editApp'])->name('manageMCourse.editApplication');
    Route::post('/marriage-course/{course_app}/update-course', [CourseAppController::class, 'updateApp'])->name('regCourse.update');
    Route::get('/marriage-course/{course_app}/view-course', [CourseAppController::class, 'showApp'])->name('manageMCourse.viewApplication');
    Route::get('/marriage-course/{course_app}/updateApp', [CourseAppController::class, 'updateAppStatus'])->name('manageMCourse.updateAppStatus');
    Route::get('/marriage-course/{course_app}/deleteApp', [CourseAppController::class, 'destroyApp'])->name('manageMCourse.destroyApplication');
    Route::get('/marriage-course/{course_app}/document-list', [CourseAppController::class, 'showDoc'])->name('manageMCourse.documentList');
    Route::get('/marriage-course/document-list', [CourseAppController::class, 'showDocTab'])->name('manageMCourse.documentListTab');
    Route::get('/marriage-course/{course_app}/document-list/slip', [CourseAppController::class, 'showSlip'])->name('manageMCourse.printSlip');
    Route::get('/marriage-course/{course_app}/document-list/certificate', [CourseAppController::class, 'showCert'])->name('manageMCourse.printCert');

    Route::get('/marriage-course/postpone-date', [CourseAppController::class, 'editPostpone'])->name('manageMCourse.postponeCourse');


    // Route::get('/loc', [CourseAppController::class, 'getLocDistrict'])->name('locDistrict');
    // Route::get('/adress', [CourseAppController::class, 'getAdress'])->name('address');
    // Route::get('/date', [CourseAppController::class, 'getDate'])->name('date');


    //Marriage Course Staff
    Route::get('/staff/marriage-course', [CourseAppController::class, 'indexStaff'])->name('manageMCourse.indexStaff');
    Route::get('/staff/marriage-course/add-course', [CourseController::class, 'createCourse'])->name('manageMCourse.addCourse');
    Route::post('/staff/marriage-course/store', [CourseController::class, 'storeCourse'])->name('addCourse.store');
    Route::get('/staff/marriage-course/register-applicant', [CourseAppController::class, 'createRegStaff'])->name('manageMCourse.registerApplicant');
    Route::post('/staff/marriage-course/store-course', [CourseAppController::class, 'storeRegStaff'])->name('staffRegCourse.store');
    Route::get('/staff/marriage-course/{course_app}/view-application', [CourseAppController::class, 'showAppStaff'])->name('manageMCourse.viewAppStaff');
    Route::get('/staff/marriage-course/{course_app}/edit-application', [CourseAppController::class, 'editAppStaff'])->name('manageMCourse.editAppStaff');
    Route::post('/staff/marriage-course/{course_app}/update-course', [CourseAppController::class, 'updateAppStaff'])->name('staffRegCourse.update');
    Route::get('/staff/marriage-course/{course_app}/deleteApp', [CourseAppController::class, 'destroyAppStaff'])->name('manageMCourse.destroyAppStaff');
    Route::get('/staff/marriage-course/{course_app}/document-list', [CourseAppController::class, 'showDocStaff'])->name('manageMCourse.documentListStaff');
    Route::get('/staff/marriage-course/{course_app}/document-list/certificate', [CourseAppController::class, 'showCertStaff'])->name('manageMCourse.printCertStaff');
    Route::get('/staff/marriage-course/{course_app}/document-list/slip', [CourseAppController::class, 'showSlipStaff'])->name('manageMCourse.printSlipStaff');



    //Marriage Request Applicant
    Route::get('/marriage-request', [MApplicationController::class, 'index'])->name('manageMRequest.statusRequest');
    Route::get('/marriage-request/register', [MApplicationController::class, 'createRequestForm'])->name('manageMRequest.regRequestApplication');
    Route::post('/marriage-request/store-application', [MApplicationController::class, 'store'])->name('manageMRequest.store');
    Route::get('/marriage-request/view-application', [MApplicationController::class, 'showApp'])->name('manageMRequest.viewApplication');
    Route::get('/marriage-request/{m_application}/update-application', [MApplicationController::class, 'updateStatus'])->name('manageMRequest.updateStatus');
    Route::get('/marriage-request/{m_application}/edit-application', [MApplicationController::class, 'editApp'])->name('manageMRequest.editApplication');
    Route::post('/marriage-request/{m_application}/update-application', [MApplicationController::class, 'update'])->name('manageMRequest.update');
    Route::get('/marriage-request/{m_application}/delete-application', [MApplicationController::class, 'destroy'])->name('manageMRequest.destroy');
    Route::get('/marriage-request/{m_application}/print-app', [MApplicationController::class, 'showAppStaff'])->name('manageMRequest.printApp');
    Route::get('/marriage-request/{m_application}/print-hiv', [MApplicationController::class, 'showHIV'])->name('manageMRequest.printHIV');
    Route::get('/marriage-request/{m_application}/print-wakalah', [MApplicationController::class, 'showWakalah'])->name('manageMRequest.printWakalah');
    Route::get('/marriage-request/{m_application}/view-hiv', [MApplicationController::class, 'showHIV'])->name('manageMRequest.viewHIV');
    Route::get('/marriage-request/{m_application}/view-wakalah', [MApplicationController::class, 'showWakalah'])->name('manageMRequest.viewWakalah');


    Route::get('/marriage-request/edit-hiv', [MApplicationController::class, 'editHIV'])->name('manageMRequest.editHIVForm');
    Route::get('/marriage-request/edit-wakalah', [MApplicationController::class, 'editWakalah'])->name('manageMRequest.editWakalahForm');

    //Marriage Request Staff
    Route::get('/staff/marriage-request', [MApplicationController::class, 'indexStaff'])->name('manageMRequest.indexStaff');
    Route::get('/staff/marriage-request/view-application', [MApplicationController::class, 'showAppStaff'])->name('manageMRequest.viewAppStaff');
    Route::get('/staff/marriage-request/register-application', [MApplicationController::class, 'createRegStaff'])->name('manageMRequest.registerApplicant');
    Route::post('/staff/marriage-request/store-application', [MApplicationController::class, 'storeRegStaff'])->name('manageMRequest.storeStaff');
    Route::get('/staff/marriage-request/{m_application}/delete-application', [MApplicationController::class, 'destroyStaff'])->name('manageMRequest.destroyStaff');
  

    Route::get('/staff/marriage-request/{m_application}/edit-application', [MApplicationController::class, 'editAppStaff'])->name('manageMRequest.editAppStaff');
    Route::post('/staff/marriage-request/{m_application}/update-application', [MApplicationController::class, 'updateStaff'])->name('manageMRequest.updateStaff');
    Route::get('/staff/marriage-request/{m_application}/document-list', [MApplicationController::class, 'showDocStaff'])->name('manageMRequest.documentListStaff');
    Route::get('/staff/marriage-request/{m_application}/print-app', [MApplicationController::class, 'showPrintStaff'])->name('manageMRequest.printAppStaff');
    Route::get('/staff/marriage-request/{m_application}/print-hiv', [MApplicationController::class, 'showHIVStaff'])->name('manageMRequest.printHIVStaff');
    Route::get('/staff/marriage-request/{m_application}/print-wakalah', [MApplicationController::class, 'showWakalahStaff'])->name('manageMRequest.printWakalahStaff');



    //Jihah
    //Marriage Registration Applicant
    Route::get('/marriage-registration', [MRegistrationController::class, 'index'])->name('manageMRegistration.index');
    Route::get('/marriage-registration/view-info', [MRegistrationController::class, 'show'])->name('manageMRegistration.show');
    Route::get('/marriage-registration/create-application', [MRegistrationController::class, 'create'])->name('manageMRegistration.create');
    Route::post('/marriage-registration/store-application', [MRegistrationController::class, 'store'])->name('manageMRegistration.store');
    Route::get('/marriage-registration/{mregistration}/edit-application', [MRegistrationController::class, 'edit'])->name('manageMRegistration.edit');
    Route::post('/marriage-registration/{mregistration}/update-application', [MRegistrationController::class, 'update'])->name('manageMRegistration.update');
    Route::get('/marriage-registration/view-application', [MRegistrationController::class, 'showApp'])->name('manageMRegistration.showApp');
    Route::get('/marriage-registration/{mregistration}/updatestatus-application', [MRegistrationController::class, 'updateStatus'])->name('manageMRegistration.updateStatus');
    Route::get('/marriage-registration/print-application', [MRegistrationController::class, 'showPrint'])->name('manageMRegistration.showPrint');
    Route::get('/marriage-registration/show-certificate', [MRegistrationController::class, 'showCert'])->name('manageMRegistration.showCert');
    Route::get('/marriage-registration/{mregistration}/delete-application', [MRegistrationController::class, 'destroy'])->name('manageMRegistration.destroy');
    
    //Marriage Registration Staff
    Route::get('/staff/marriage-registration', [MRegistrationController::class, 'indexStaff'])->name('manageMRegistration.indexStaff');
    Route::get('/staff/marriage-registration/{mregistration}/edit-application', [MRegistrationController::class, 'editApp'])->name('manageMRegistration.editApp');
    Route::post('staff/marriage-registration/{mregistration}/update-application', [MRegistrationController::class, 'updateApp'])->name('manageMRegistration.updateApp');
    Route::get('/staff/marriage-registration/{mregistration}/view-application', [MRegistrationController::class, 'showAppStaff'])->name('manageMRegistration.showAppStaff');
    Route::get('/staff/marriage-registration/{mregistration}/print-application', [MRegistrationController::class, 'printAppStaff'])->name('manageMRegistration.printAppStaff');
    Route::get('/staff/marriage-registration/{mregistration}/status-application', [MRegistrationController::class, 'editStatus'])->name('manageMRegistration.editStatus');
    Route::post('staff/marriage-registration/{mregistration}/update-status-application', [MRegistrationController::class, 'updateStatusApp'])->name('manageMRegistration.updateStatusApp');
    Route::get('/staff/marriage-registration/{mregistration}/certificate', [MRegistrationController::class, 'showCertStaff'])->name('manageMRegistration.showCertStaff');
    Route::post('staff/marriage-registration/{mregistration}/update-cetak-application', [MRegistrationController::class, 'updateCetak'])->name('manageMRegistration.updateCetak');

    //Marriage Card Applicant
    Route::get('/marriage-card', [MCardApplicationController::class, 'index'])->name('manageMCard.index');
    Route::get('/marriage-card/card-application', [MCardApplicationController::class, 'create'])->name('manageMCard.create');
    Route::post('/marriage-card/store-application', [MCardApplicationController::class, 'store'])->name('manageMCard.store');
    Route::get('/marriage-card/{mcard}/edit-application', [MCardApplicationController::class, 'edit'])->name('manageMCard.edit');
    Route::post('/marriage-card/{mcard}/store-update', [MCardApplicationController::class, 'update'])->name('manageMCard.update');
    Route::get('/marriage-card/{mcard}/update-application', [MCardApplicationController::class, 'updateStatus'])->name('manageMCard.updateStatus');
    Route::get('/marriage-card/{mcard}/delete-application', [MCardApplicationController::class, 'destroy'])->name('manageMCard.destroy');
    Route::get('/marriage-card/view-application', [MCardApplicationController::class, 'showApp'])->name('manageMCard.showApp');
    Route::get('/marriage-card/print-application', [MCardApplicationController::class, 'showPrint'])->name('manageMCard.showPrint');

    //Marriage Card Staff
    Route::get('/staff/marriage-card', [MCardApplicationController::class, 'indexStaff'])->name('manageMCard.indexStaff');
    Route::get('/staff/marriage-card/{mcard}/view-application', [MCardApplicationController::class, 'showAppStaff'])->name('manageMCard.showAppStaff');
    Route::get('/staff/marriage-card/{mcard}/status-application', [MCardApplicationController::class, 'editStatus'])->name('manageMCard.editStatus');
    Route::get('/staff/marriage-card/{mcard}/card', [MCardApplicationController::class, 'showCardStaff'])->name('manageMCard.showCardStaff');
    Route::post('/staff/marriage-card/{mcard}/status-update', [MCardApplicationController::class, 'updateCetak'])->name('manageMCard.updateCetak');
    Route::post('/staff/marriage-card/{mcard}/store', [MCardApplicationController::class, 'updateStatusApp'])->name('manageMCard.updateStatusApp');

    //Consultation Application Applicant
    Route::get('/manageConsultation/viewApplicantConsForm','App\Http\Controllers\MConsultController@index')->name('viewApplicantConsForm');
    Route::get('/manageConsultation/consultRegistration', 'App\Http\Controllers\MConsultationController@addConsult')->name('consultRegistration');

    //Insentive Application - User
    Route::get('/manageIncentive/viewApplicationDetails', 'App\Http\Controllers\incentiveAppController@index')->name('viewApplicationDetails');
    Route::get('/manageIncentive/viewApplicationStatus', 'App\Http\Controllers\incentiveAppController@appStatus')->name('viewApplicationStatus');
    Route::get('/manageIncentive/applyIncentive', 'App\Http\Controllers\incentiveAppController@create')->name('applyIncentive:create');
    Route::post('/manageIncentive/applyIncentive', 'App\Http\Controllers\incentiveAppController@store')->name('applyIncentive:store');

    //Insentive Application - Staff
    Route::get('/manageIncentive/pendingApplication', 'App\Http\Controllers\incentiveAppController@showPendingStatus')->name('pendingApplication');

    //Example
    Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/form-example', [HomeController::class, 'formExample'])->name('form-example');
    Route::get('/manage', [PageController::class, 'manage'])->name('manage');
    Route::get('/create', [PageController::class, 'create'])->name('create');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::resources([
        'user' => UserController::class,
    ]);
});
