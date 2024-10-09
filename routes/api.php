<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\OwnerController;
use App\Http\Controllers\API\SupervisorController;
use App\Http\Controllers\API\CategoriesController;
use App\Http\Controllers\API\LocationsController;
use App\Http\Controllers\API\UnitsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*==================================================================================*/
//================================= Auth Routes ====================================
/*==================================================================================*/

    //1 - OTP Routes
    Route::controller(AuthController::class)->group(function () {
        Route::post('/send-otp','sendOtp')->name('send.otp'); // Send OTP
        Route::post('/verify-otp','verifyOtp')->name('verify.otp'); // Verify OTP
    });
/*==================================================================================*/


/*==================================================================================*/
//================================= User Routes ====================================
/*==================================================================================*/
Route::controller(UserController::class)->group(function () {
    Route::post('/user/register','userRegister')->name('user.register');
    Route::post('/user/login','userLogin')->name('user.login');
    Route::post('/user/logout','userLogout')->name('user.logout')->middleware('auth:sanctum');
});

Route::controller(UserController::class)->middleware('auth:sanctum')->group( function () {
    Route::post('/citizen/profile/create','citizenProfile')->name('citizen.profile'); // Create Citizen Profile
    Route::post('/visitor/profile/create','visitorProfile')->name('visitor.profile'); // Create Visitor Profile
    Route::post('/resident/profile/create','residentProfile')->name('resident.profile'); // Create Resident Profile
});
/*==================================================================================*/


/*==================================================================================*/
//================================= Admin Routes ====================================
/*==================================================================================*/
Route::controller(AdminController::class)->group(function () {
    Route::post('/admin/register','adminRegister')->name('admin.register');
    Route::post('/admin/login','adminLogin')->name('admin.login');
    Route::post('/admin/logout','adminLogout')->name('admin.logout')->middleware('auth:sanctum');
});

// Route::middleware('auth:sanctum')->group( function () {
    
// });
/*==================================================================================*/


/*==================================================================================*/
//================================= Owner Routes ====================================
/*==================================================================================*/
Route::controller(OwnerController::class)->group(function () {
    Route::post('/owner/register','ownerRegister')->name('owner.register');
    Route::post('/owner/login','ownerLogin')->name('owner.login');
    Route::post('/owner/logout','ownerLogout')->name('owner.logout')->middleware('auth:sanctum');
});

Route::controller(OwnerController::class)->middleware('auth:sanctum')->group( function () {

});

Route::controller(CategoriesController::class)->middleware('auth:sanctum')->group( function () {
    // Get All Categories
    Route::get('/owner/categories','getAllCategories');
});

// Geographical Locations Routes
Route::controller(LocationsController::class)->middleware('auth:sanctum')->group( function () {
    // Get All Zones
    Route::get('/owner/zones','getAllZones');
    // Get Governorates By Zone Id
    Route::get('/owner/governorates/{zoneId}','getGovernoratesByZoneId');
    // Get Cities By Governorate Id
    Route::get('/owner/cities/{governorateId}','getCitiesByGovernorateId');
    // Get Districts By City Id
    Route::get('/owner/districts/{cityId}','getDistrictsByCityId');
});

// Units Routes For Owner
Route::controller(UnitsController::class)->middleware('auth:sanctum')->group( function () {
    // Get All Units
    Route::get('/owner/units','getAllUnits');
    // Add Unit New Unit
    Route::post('/owner/add-unit','addUnit');
    // Get Owner Units
    Route::get('/owner/my-units','getOwnerUnits');
    // Show Unit Details
    Route::get('/owner/units/{id}','showUnitDetails');
    // Update Unit
    Route::put('/owner/update-unit/{id}','updateUnit');
    // Delete Unit
    Route::delete('/owner/delete-unit/{id}','deleteUnit');
});
/*==================================================================================*/


/*==================================================================================*/
//================================= Supervisor Routes ====================================
/*==================================================================================*/
Route::controller(SupervisorController::class)->group(function () {
    Route::post('/supervisor/register','supervisorRegister')->name('supervisor.register');
    Route::post('/supervisor/login','supervisorLogin')->name('supervisor.login');
    Route::post('/supervisor/logout','supervisorLogout')->name('supervisor.logout')->middleware('auth:sanctum');
});

// Route::middleware('auth:sanctum')->group( function () {
    
// });
/*==================================================================================*/
