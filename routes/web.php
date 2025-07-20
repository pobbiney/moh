<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthenticationController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Settings\SettingsController;
use App\Http\Controllers\UserManagement\UserManagementController;
use App\Http\Controllers\userAuthentication\userAuthController;
use App\Http\Controllers\userProfile\ProfileController;


/* login Manager */
Route::get('/',[AuthenticationController::class,'index']);
Route::get('login',[AuthenticationController::class,'index'])->name('login');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
/* Authentication */ 

Route::post('authentication-process',[AuthenticationController::class,'authenticationProcess'])->name('authentication-process');
Route::post('logout-authentication-process',[DashboardController::class,'logoutAuthenticationProcess'])->name('logout-authentication-process');


/* User Management */ 

Route::get('user-management-add-category',[UserManagementController::class,'userCategoryView'])->name('user-management-add-category');
Route::post('user-management-add-category-process',[UserManagementController::class,'userCategoryProcess'])->name('user-management-add-category-process');
Route::get('user-management-add-category-edit/{id}',[UserManagementController::class,'editUserCategoryView'])->name('user-management-add-category-edit');
Route::post('user-management-add-category-edit-process/{id}',[UserManagementController::class,'editUserCategoryProcess'])->name('user-management-add-category-edit-process');

Route::get('user-management-privilege',[UserManagementController::class,'assignUserPrivilegesView'])->name('user-management-privilege');
Route::post('get-category-privileges',[UserManagementController::class,'getUserPrivileges'])->name('get-category-privileges');
Route::post('save-user-privileges',[UserManagementController::class,'saveUserPrivileges'])->name('save-user-privileges');

Route::get('user-management-create-account',[UserManagementController::class,'createAccountUser'])->name('user-management-create-account');
Route::post('get-user-email-process',[UserManagementController::class,'getAccountEmail']);
Route::post('create-account-process',[UserManagementController::class,'createAccount'])->name('create-account-process');

Route::get('user-management-list-create-account',[UserManagementController::class,'listAccountsView'])->name('user-management-list-create-account');
Route::any('user-management-get-accounts',[UserManagementController::class,'getUserAccountList'])->name('user-management-get-accounts');

Route::get('user-management-edit-user-account/{id}',[UserManagementController::class,'editUserAccountView'])->name('user-management-edit-user-account');
Route::post('user-management-edit-user-account-process/{id}',[UserManagementController::class,'editUserAccountProcess'])->name('user-management-edit-user-account-process');

/* End User Management */ 

/* Settings */
Route::get('Add-Institution', [SettingsController::class,'getInstitutionView'])->name('Add-Institution');
Route::post('add-institution-process', [SettingsController::class,'addInstituion'])->name('add-institution-process');
Route::get('edit-institution/{id}', [SettingsController::class,'getEditInstitutionView'])->name('edit-institution');
Route::post('edit-institution-process/{id}', [SettingsController::class,'editInstitution'])->name('edit-institution-process');
Route::get('Add-Grade', [SettingsController::class,'getGradeView'])->name('Add-Grade');
Route::post('add-grade-process', [SettingsController::class,'addGrade'])->name('add-grade-process');
Route::get('edit-grade/{id}', [SettingsController::class,'getEditGradeView'])->name('edit-grade');
Route::post('edit-grade-process/{id}', [SettingsController::class,'editGrade'])->name('edit-grade-process');
Route::get('Add-Region', [SettingsController::class,'getRegionView'])->name('Add-Region');
Route::post('add-region-process', [SettingsController::class,'addRegion'])->name('add-region-process');
Route::get('edit-region/{id}', [SettingsController::class,'getEditRegionView'])->name('edit-region');
Route::post('edit-region-process/{id}', [SettingsController::class,'editRegion'])->name('edit-region-process');
Route::get('addDistrict', [SettingsController::class,'getDistrictView'])->name('addDistrict');
Route::post('add-district-process', [SettingsController::class,'AddDistrict'])->name('add-district-process');
Route::get('edit-district/{id}', [SettingsController::class,'getEditDistrictView'])->name('edit-district');
Route::post('edit-district-process/{id}', [SettingsController::class,'editDistrict'])->name('edit-district-process');
Route::get('Attachment', [SettingsController::class,'getAttachmentView'])->name('Attachment');
Route::post('add-attachment-process', [SettingsController::class,'addAttachment'])->name('add-attachment-process');
Route::get('edit-attachment/{id}', [SettingsController::class,'getEditAttachmentView'])->name('edit-attachment');
Route::post('edit-attachment-process/{id}', [SettingsController::class,'editAttachment'])->name('edit-attachment-process');
/* End Settings */

/* User Authentication */

Route::get('userAuth/login',[userAuthController::class,'index'])->name('userAuthentication.login');
Route::get('userAuth/sign-up',[userAuthController::class,'register'])->name('sign-up');
Route::post('user-login-process',[userAuthController::class,'login'])->name('user-login-process');
Route::post('register-user-process',[userAuthController::class,'registerUSer'])->name('register-user-process');
Route::middleware(['auth'])->group(function () {Route::get('userDashboard/dashboard',[userAuthController::class,'getUserDashboardView'])->name('userDashboard.dashboard');});
 Route::post('/logout-authentication-process', [userAuthController::class, 'logout']) ->middleware('auth')->name('logout-authentication-process');
/* End UserAuthentication */

/*User Profile */
Route::get('userProfile/MyProfile',[ProfileController::class,'userProfileView'])->name('MyProfile');
Route::post('chanage-password-process',[ProfileController::class,'ChangeUserPassword'])->name('chanage-password-process');
/*End User Profile*/