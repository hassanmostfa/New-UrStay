<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MVC\AdminController;
use App\Http\Controllers\MVC\ZonesController;
use App\Http\Controllers\MVC\GovernoratesController;
use App\Http\Controllers\MVC\CitiesController;
use App\Http\Controllers\MVC\DistrictsController;
use App\Http\Controllers\MVC\CategoriesController;
use App\Http\Controllers\MVC\AuthController;
use App\Http\Controllers\MVC\UserController;
use App\Http\Controllers\MVC\OwnerController;
use App\Http\Controllers\MVC\SupervisorController;
use App\Http\Controllers\MVC\HomeController;
use App\Http\Controllers\MVC\UnitsController;
use App\Http\Controllers\MVC\UnitsForOwnerController;
use App\Http\Controllers\MVC\CompletedUnitsController;
use App\Http\Controllers\MVC\BookingsController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

// Auth routes
Route::controller(AuthController::class)->group(function () {
    // OTP Routes
    Route::post('/send-otp','sendOtp')->name('send.otp'); // Send OTP
    Route::post('/verify-otp','verifyOtp')->name('verify.otp'); // Verify OTP
    Route::post('/resend-otp','resendOtp')->name('resend.otp'); // Resend OTP
});


/*==================================================================================*/
//================================= Admin Routes ====================================
/*==================================================================================*/

    Route::controller(AdminController::class)->group(function(){
        //1 - Register Routes (Admin)
        Route::get('/adminRegister', 'adminRegisterPage')->name('adminRegister'); // Returns Admin Register Page
        Route::post('/adminRegisterSave','adminRegisterSave')->name('adminRegisterSave'); // Admin Register Save Data
        // 2 - Login Routes (Admin)
        Route::get('/admin-login-page','adminLoginPage')->name('admin-login'); // Returns Admin Login Page
        Route ::post('/admin/login','adminLoginAction')->name('adminLoginAction'); // Admin Login
    });

    // Protected Routes
    Route::middleware('auth:admin')->group(function () {
        // Admin Routes
        Route::controller(AdminController::class)->group(function () {
            // Logout
            Route::get('/admin/logout', 'adminLogout')->name('admin.logout');
            // Admin Dashboard
            Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
            // Countries (Show All + Add )
            Route::get('/admin/countries', 'countries')->name('admin.countries');
            Route::post('/admin/countries/store', 'addCountry')->name('admin.addCountry');
        });

        // Zones Routes
        Route::controller(ZonesController::class)->group(function () {
            // Zones (Show All + Add + Delete )
            Route::get('/admin/zones', 'zones')->name('admin.zones');
            Route::post('/admin/zones/store', 'addZone')->name('admin.addZone');
            Route::delete('/admin/delete-zone/{id}', 'deleteZone')->name('admin.deleteZone');
        });

        // Governorates Route 
        Route::controller(GovernoratesController::class)->group(function(){
            // Governorates (Show All + Get Zones By Country + Add )
            Route::get('/admin/governorates', 'governorates')->name('admin.governorates');
            Route::post('/admin/governorates/store', 'addGovernorate')->name('admin.addGovernorate');
            Route::delete('/admin/delete-governorate/{id}', 'deleteGovernorate')->name('admin.deleteGovernorate');
        });

        // Cities Route 
        Route::controller( CitiesController::class)->group(function(){
            // Cities (Show All + Get Governorates By Zone + Add + Delete )
            Route::get('/admin/cities', 'cities')->name('admin.cities');
            Route::get('/admin/get-governorates/{zone}', 'getGovernoratesByZone');
            Route::post('/admin/cities/store', 'addCity')->name('admin.addCity');
            Route::delete('/admin/delete-city/{id}', 'deleteCity')->name('admin.deleteCity');
        });

        // Districts Routes
        Route::controller( DistrictsController::class)->group(function(){
            // Districts (Show All + Get Cities By Governorate + Add + Delete)
            Route::get('/admin/districts', 'districts')->name('admin.districts');
            Route::get('admin/get-cities/{governorate}', 'getCitiesByGovernorate');
            Route::post('/admin/districts/store', 'addDistrict')->name('admin.addDistrict');
            Route::delete('/admin/delete-district/{id}', 'deleteDistrict')->name('admin.deleteDistrict');
        });

        // Categories Routes
        Route::controller( CategoriesController::class)->group(function(){
            // Categories (Show All + Add )
            Route::get('/admin/categories', 'categories')->name('admin.categories');
            Route::post('/admin/categories/store', 'addCategory')->name('admin.addCategory');
            Route::delete('/admin/delete-category/{id}', 'deleteCategory')->name('admin.deleteCategory');
            // Sub Categories (Show All + Add + Delete )
            Route::get('/admin/sub-categories', 'subCategories')->name('admin.subCategories');
            Route::post('/admin/sub-categories/store', 'addSubCategory')->name('admin.addSubCategory');
            Route::delete('/admin/delete-sub-category/{id}', 'deleteSubCategory')->name('admin.deleteSubCategory');
            // Sub Of Sub Categories (Show All + Add + Delete )
            Route::get('/admin/sub-of-sub-categories', 'subOfSubCategories')->name('admin.subOfSubCategories');
            Route::get('/admin/get-subcategories/{category}', 'getSubCategories');
            Route::post('/admin/sub-of-sub-categories/store', 'addSubOfSubCategory')->name('admin.addSubOfSubCategory');
            Route::delete('/admin/delete-sub-of-sub-category/{id}', 'deleteSubOfSubCategory')->name('admin.deleteSubOfSubCategory');
        });

        // Units Routes
        Route::controller( UnitsController::class)->group(function(){
             // Show all units
            Route::get('/admin/units', 'allUnits')->name('admin.allUnits');
            // Show Unit details
            Route::get('/admin/unit-details/{id}', 'showUnitDetailsForAdmin')->name('admin.unitDetails');
            // Update unit Page
            Route::get('/admin/update-unit-page/{id}' , 'updateUnitPage')->name('admin.updateUnit');
            // Update unit action
            Route::put('admin/update/unit/{id}' , 'updateUnit')->name('admin.updateUnitAction');
            // Delete unit 
            Route::get('admin/delete/unit/{id}' , 'deleteUnit')->name('admin.deleteUnit');
            // Show New Units Requests
            Route::get('/admin/new-units-requests', 'newUnitsRequests')->name('admin.newUnitsRequests');
            // Accept Unit Request
            Route::put('/admin/approve-unit/{id}', 'approveUnit')->name('admin.approveUnit');
            // Reject Unit Request
            Route::put('/admin/reject-unit/{id}', 'rejectUnit')->name('admin.rejectUnit');
            // Show Rejected Units
            Route::get('/admin/rejected-units', 'rejectedUnits')->name('admin.rejectedUnits');
            // Show Updated Units
            Route::get('/admin/updated-units', 'updatedUnits')->name('admin.updatedUnits');
            // Get All Approved Units
            Route::get('/admin/get-approved-units', 'getApprovedUnits')->name('admin.getApprovedUnits');
        });

        // Show Completed Units
        Route::controller( CompletedUnitsController::class)->group(function(){
            // Show Completed Units
            Route::get('/admin/completed-units', 'showCompletedUnits')->name('admin.completedUnits');
            
        });
    });

/*==================================================================================*/



/*==================================================================================*/
//================================= User Routes ====================================
/*==================================================================================*/
Route::controller( UserController::class)->group(function(){
    // 1.0 - Register Routes (User)
    Route::get('/user/register', 'userRegister')->name('userRegister'); // Returns User Register Page
    Route::post('/userRegisterSave',  'userRegisterSave')->name('userRegisterSave'); // User Register Save Data
    // 1.1 - Register Routes (User => Citizen)
    Route::post('/citizenRegister',  'citizenRegister')->name('citizenRegister'); // Citizen Register Save Data
    // 1.2 - Register Routes (User => Visitor)
    Route::post('/visitorRegister',  'visitorRegister')->name('visitorRegister'); // Visitor Register Save Data
    // 1.3 - Register Routes (User => Resident)
    Route::post('/residentRegister',  'residentRegister')->name('residentRegister'); // Resident Register Save Data

    // 2 -  Login Routes (User)
    Route::get('/user/login','userLoginPage')->name('user-login'); // Returns User Login Page
    Route::post('/userLoginAction','userLoginAction')->name('userLoginAction'); // User Login

    // User Show unit Details
    Route::get('/user/unit-details/{id}', [UnitsController::class, 'showUnitDetails'])->name('user.unitDetails');
    // Calculate Total Price
    Route::post('/user/calculate-price', [BookingsController::class, 'calculatePrice'])->name('user.calculatePrice');
});

// Get All Reserved Dates for the unit
Route::get('/units/{id}/reserved-dates', [BookingsController::class, 'getReservedDates']);
// Protected Routes
Route::middleware('auth')->group(function () {
    Route::controller( UserController::class)->group(function(){
        Route::get('/user-dashboard','index')->name('user-dashboard');
    });

    Route::controller( BookingsController::class)->group(function(){
        Route::post('/user/book-unit/{id}','bookUnit')->name('user.bookUnit');
    });
});


/*==================================================================================*/


/*==================================================================================*/
//================================= Owner Routes ====================================
/*==================================================================================*/

Route::controller( OwnerController::class)->group(function(){
    //1 - Register Routes
    Route::get('/owner/register','register')->name('owner.register'); // Returns Admin Register Page
    Route::post('/ownerRegisterAction','registerAction')->name('registerAction'); // Admin Register Save Data
    // 2 - Login Routes
    Route::get('/owner/login','loginPage')->name('owner.login'); // Returns Admin Login Page
    Route ::post('/owner/loginAction','loginAction')->name('ownerLoginAction'); // Admin Login
});

        // Protected Routes
        Route::middleware('auth:owner')->group(function () {
            // Owner Auth Routes
            Route::controller(OwnerController::class)->group(function () {
                // Owner Logout
                Route::get('/owner/logout', 'logout')->name('owner.logout');
                // Owner Dashboard
                Route::get('/owner/dashboard', 'index')->name('owner-dashboard');
                // Fetch subcategories based on selected category
                Route::get('/owner/get-subcategories/{categoryId}','getSubcategories');
                // Fetch sub-subcategories based on selected subcategory
                Route::get('/owner/get-sub-subcategories/{subcategoryId}','getSubSubcategories');
                // Owner Select Zone & Governorate & City & District for New Unit
                Route::get('/owner/get-governorates/{zoneId}', 'getGovernorates');
                Route::get('/owner/get-cities/{governorateId}','getCities');
                Route::get('/owner/get-districts/{cityId}','getDistricts');
            });

        // Owner Unit Routes
        Route::controller(UnitsForOwnerController::class)->group(function () {
            // Create New Unit Page
            Route::get('/owner/add-unit', 'addUnitPage')->name('owner.addUnit');
            // Owner Create New Unit Action
            Route::post('/owner/add-unit-action', 'addUnit')->name('owner.addUnitAction');
            // Get Owner Units
            Route::get('/owner/my-units', 'getOwnerUnits')->name('owner.myUnits');
            // Show Unit Details
            Route::get('/owner/unit-details/{id}', 'showUnitDetails')->name('owner.unitDetails');
            // Update Unit Page
            Route::get('/owner/update-unit/{id}', 'updateUnitPage')->name('owner.updateUnit');
            // Update Unit Action
            Route::put('/owner/update-unit-action/{id}', 'updateUnit')->name('owner.updateUnitAction');
            // Delete Unit
            Route::get('/owner/delete-unit/{id}', 'deleteUnit')->name('owner.deleteUnit');
            // Show Updated Units
            Route::get('/owner/updated-units', 'updatedUnits')->name('owner.updatedUnits');
            // Show Rejected Units
            Route::get('/owner/rejected-units', 'rejectedUnits')->name('owner.rejectedUnits');
        });

        // Completed Units Routes
        Route::controller(CompletedUnitsController::class)->group(function () {
            // Save Completed Units Data
            Route::post('/owner/complete-unit/{id}', 'saveCompletedUnits')->name('owner.completeUnit');
            // Uodate Completed Units
            Route::put('/owner/update/completed-unit/{id}', 'updateCompletedUnitsData')->name('owner.updateCompletedUnit'); 
        });

        // Bookings Routes
        Route::controller(BookingsController::class)->group(function () {
            // Show My Bookings
            Route::get('/owner/bookings', 'showBookingOpreationsPage')->name('owner.bookings');
            // Show New Bookings Requests
            Route::get('/owner/new-bookings', 'showNewBookingRequests')->name('owner.newBookings');
            // Show Booking Request Details
            Route::get('/owner/booking-details/{id}', 'showBookingRequest')->name('owner.bookingDetails');
            // Accept Booking Request
            Route::put('/owner/accept-booking/{id}', 'acceptBookingRequest')->name('owner.acceptBooking');

    });

});
/*==================================================================================*/


/*==================================================================================*/
//================================= Supervisor Routes ====================================
/*==================================================================================*/

Route::controller( SupervisorController::class)->group(function(){
    //1 - Register Routes (Admin)
    Route::get('/supervisor/register','registerPage')->name('supervisor.register'); // Returns Supervisor Register Page
    Route::post('/supervisorRegisterAction','registerAction')->name('supervisorRegisterAction'); // Supervisor Register Save Data
    // 2 - Login Routes (Admin)
    Route::get('/supervisor/login','loginPage')->name('supervisor.login'); // Returns Supervisor Login Page
    Route ::post('/supervisorloginAction', 'loginAction')->name('supervisorLoginAction'); // Supervisors Login
});

// Protected Routes
Route::middleware('auth:supervisor')->group(function () {
    // Supervisor Routes
    Route::controller(SupervisorController::class)->group(function () {
        // Redirect to Supervisor Dashboard 
        Route::get('/supervisor/dashboard', 'index')->name('supervisor-dashboard');
    });
});

/*==================================================================================*/





