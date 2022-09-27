<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\UserProfileController;
use App\Models\User;
use App\Notifications\JobApplyNotification;
use Illuminate\Http\Request;

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
//Dashboard url
//Route::get('/', function () {
   // return view('job');
//});
Route::get('/',[UserController::class,'landingpage']);

Route::get('/applisearch', function () {
    return view ('company.job.ApplicantSearch');
});
Route::get('/company', function () { 
    return view('company.home');
});
Route::get('/profileuser', function () {
    return view('user.profile1');
});


Route::get('/cvPage', function () {
    return view('cvPage.index');
});
Route::get('/jobPage', function () {
    return view('company.job.create');
});

//User Pages
Route::get('/user-detail/{id}',[UserProfileController::class,'showdetail']);
Route::resource('/userprofile',UserProfileController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/user/{id}',[UserController::class,'profile'])->name('my.Profile');
//Route::post('/profile-update',[UserController::class,'profileUpdate'])->name('update.profile');
Route::get('/jobrecent',[JobApplicationController::class,'index'])->name('jobrecent');
Route::get('/job/{id}',[JobApplicationController::class,'show'])->name('job.show');
Route::get('/userside/compro/{id}',[JobApplicationController::class,'compro'])->name('company.pro');
//non register user job show
Route::get('/nonregjob/{id}',[JobApplicationController::class,'nonregshow'])->name('nonregjob');
//non registered user company profile view
Route::get('/noregusercompro/{id}',[JobApplicationController::class,'nonreguser'])->name('noreg.pro');
Route::get('/myjobs/{id}',[JobApplicationController::class,'myJobs'])->name('myjobs.user');
Route::delete('/myjobs2/{id}',[JobApplicationController::class,'destroy'])->name('applied/job/destroy');
Route::get('/searchjob', [SearchController::class, 'nonregserach'])->name('searchjob');
Route::get('/jobprofile/{id}', [SearchController::class, 'jobprofile'])->name('jobprofile');
Route::get('/jobprofile2/{id}', [SearchController::class, 'jobprofile2'])->name('jobprofile2');

//Route::get('/searchjob2', [SearchController::class, 'regserach'])->name('searchjob2');

Auth::routes();
//Company Pages
Route::post('/auth/save', [CompanyController::class, 'save'])->name('auth.save'); 
Route::post('/auth/check', [CompanyController::class, 'check'])->name('auth.check'); 
Route::get('/auth/logout', [CompanyController::class, 'comlogout'])->name('auth.logout');
Route::get('/companyprofile/{id}',[CompanyController::class,'companyProfile'])->name('com.profile');
Route::get('/auth/login', [CompanyController::class, 'comlogin'])->name('auth.login');
Route::get('/auth/register', [CompanyController::class, 'comRegistration'])->name('auth.register');
Route::get('/company/dashboard', [CompanyController::class, 'dashboard']); 
Route::post('/companyProfile/{id}/edit',[CompanyController::class,'comUpdate'])->name('profile.com');
Route::get('/search', [SearchController::class, 'filterUser'])->name('searchuser');
Route::get('/search2', [SearchController::class, 'search2'])->name('searchuser1');
Route::get('/search3', [SearchController::class, 'search3'])->name('searchuser2');
Route::get('/search4', [SearchController::class, 'search4'])->name('searchuser3');
Route::get('/searchindex', [SearchController::class, 'searchindex'])->name('searchindex');
Route::get('/jobapplicants', [CompanyController::class, 'applicantindex']);
Route::get('/applicants/{id}', [CompanyController::class, 'applicants']);
Route::get('/userResume/{id}', [CompanyController::class, 'userResume']);


//Job Posts
Route::get('/jobindex', [CompanyController::class, 'jobindex'])->name('jobindex'); 
Route::get('/jobcreate2', [PostController::class, 'create2'])->name('create2');
Route::get('/jobcreate3', [PostController::class, 'create3'])->name('create3');
Route::get('/jobcreate4', [PostController::class, 'create4'])->name('create4');
Route::post('/post/apply/{id}',[UserController::class,'apply'])->name('jobs.apply');
Route::resource('/post',PostController::class);
Route::post('/job/myjob',[JobApplicationController::class,'myjob'])->name('jobs.myjobs');

//Route::group(['middleware'=>['authcheck']],function(){
//});

//CV Making
//Route::get('user-detail/create', [UserDetailController::class,"create"])->middleware('auth');
//Route::post('user-detail', [UserDetailController::class,"store"])->middleware('auth');
//Route::get('education/create', [EducationController::class,"create"]);
//Route::post('education', [EducationController::class,"store"]);
//Route::resource('user-detail', UserDetailController::class)->middleware('auth');
Route::resource('education', EducationController::class)->middleware('auth');
Route::resource('experience', ExperienceController::class)->middleware('auth');
Route::resource('skill', SkillController::class)->middleware('auth');
Route::get('/skillindex', [SkillController::class,'index1'])->middleware('auth');
//Route::get('/skilloverallindex', [SkillController::class,'overallindex'])->name('overallindex');
Route::get('/skillcreate2', [SkillController::class,'create2'])->middleware('auth');
Route::get('/skillcreate3', [SkillController::class,'create3'])->middleware('auth');
Route::get('skilledit1/{skill}/edit', [SkillController::class,'edit1'])->name('skill1.edit');
Route::get('skilledit2/{skill}/edit', [SkillController::class,'edit2'])->name('skill2.edit');
Route::get('skilledit3/{skill}/edit', [SkillController::class,'edit3'])->name('skill3.edit');
Route::get('resume',[ResumeController::class,'index'])->name('resume.index');