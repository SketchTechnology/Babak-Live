<?php

use App\Http\Controllers\Frontend\Companies\CompanyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\Frontend\Sponsore\SponsoreController;
use App\Http\Controllers\Frontend\Employees\EmployerController;
use App\Http\Controllers\Frontend\LockedController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\PaymentNotificationsController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Frontend\Requests\RequestController;
use App\Http\Controllers\Frontend\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great2!
|
*/

// routes for front view 
Route::get('/', function () {
    return view('front-template.index');
})->name('home');

Route::get('/mainland', function () {
    return view('front-template.mainland');
})->name('mainland');

Route::get('/freezone', function () {
    return view('front-template.freezone');
})->name('freezone');

Route::get('/offshore', function () {
    return view('front-template.offshore');
})->name('offshore');


// dashboard routes


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


Route::middleware(['auth','role:super'])->group(function () {
    Route::get('/super/dashboard', [SuperController::class, 'SuperDashboard'])->name('super.dashboard');
});

//only views

//companies
// Route::get('/dashboard/companies', function () {
//     return view('user.companies.index');
// })->middleware(['auth', 'verified'])->name('companies');
// Route::get('/dashboard/companies/show', function () {
//     return view('user.companies.show');
// })->middleware(['auth', 'verified'])->name('companies.show');

//company files
Route::get('/dashboard/company/files/create', function () {
    return view('user.company-files.create');
})->middleware(['auth', 'verified'])->name('company-files.create');
Route::get('/dashboard/company/files/edit', function () {
    return view('user.company-files.edit');
})->middleware(['auth', 'verified'])->name('company-files.edit');
Route::get('/dashboard/company/files/renew', function () {
    return view('user.company-files.renew');
})->middleware(['auth', 'verified'])->name('company-files.renew');
Route::get('/dashboard/company/files/show', function () {
    return view('user.company-files.show');
})->middleware(['auth', 'verified'])->name('company-files.show');


//employee
// Route::get('/dashboard/employee', function () {
//     return view('user.employee.index');
// })->middleware(['auth', 'verified'])->name('employee');
// Route::get('/dashboard/employee/show', function () {
//     return view('user.employee.show');
// })->middleware(['auth', 'verified'])->name('employee.show');
// Route::get('/dashboard/employee/create', function () {
//     return view('user.employee.create');
// })->middleware(['auth', 'verified'])->name('employee.create');
// Route::get('/dashboard/employee/edit', function () {
//     return view('user.employee.edit');
// })->middleware(['auth', 'verified'])->name('employee.edit');

//employee files
Route::get('/dashboard/employee/files/create', function () {
    return view('user.employee-files.create');
})->middleware(['auth', 'verified'])->name('employee-files.create');
Route::get('/dashboard/employee/files/edit', function () {
    return view('user.employee-files.edit');
})->middleware(['auth', 'verified'])->name('employee-files.edit');
Route::get('/dashboard/employee/files/renew', function () {
    return view('user.employee-files.renew');
})->middleware(['auth', 'verified'])->name('employee-files.renew');
Route::get('/dashboard/employee/files/show', function () {
    return view('user.employee-files.show');
})->middleware(['auth', 'verified'])->name('employee-files.show');

//sponsored
// Route::get('/dashboard/sponsored', function () {
//     return view('user.sponsored.index');
// })->middleware(['auth', 'verified'])->name('sponsored');
// Route::get('/dashboard/sponsored/show', function () {
//     return view('user.sponsored.show');
// })->middleware(['auth', 'verified'])->name('sponsored.show');
// Route::get('/dashboard/sponsored/create', function () {
//     return view('user.sponsored.create');
// })->middleware(['auth', 'verified'])->name('sponsored.create');
// Route::get('/dashboard/sponsored/edit', function () {
//     return view('user.sponsored.edit');
// })->middleware(['auth', 'verified'])->name('sponsored.edit');

//sponsored files
Route::get('/dashboard/sponsored/files/create', function () {
    return view('user.sponsored-files.create');
})->middleware(['auth', 'verified'])->name('sponsored-files.create');
Route::get('/dashboard/sponsored/files/edit', function () {
    return view('user.sponsored-files.edit');
})->middleware(['auth', 'verified'])->name('sponsored-files.edit');
Route::get('/dashboard/sponsored/files/renew', function () {
    return view('user.sponsored-files.renew');
})->middleware(['auth', 'verified'])->name('sponsored-files.renew');
Route::get('/dashboard/sponsored/files/show', function () {
    return view('user.sponsored-files.show');
})->middleware(['auth', 'verified'])->name('sponsored-files.show');





Route::group(['prefix'=> LaravelLocalization::setLocale(),'middleware'=>['auth','checkUserStatus']],function(){

    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');
    
//sponsored controller
Route::resource('dashboard/sponsore',SponsoreController::class);

//employees
Route::resource('dashboard/employee',EmployerController::class );

//companies
Route::resource('dashboard/companies', CompanyController::class);




// Payment for wallet
Route::get('dashboard/payment', [PaymentController::class, 'index'])->name('checkout');
Route::post('/session',  [PaymentController::class, 'session'])->name('session');
Route::get('/success', [PaymentController::class, 'success'])->name('success');


// notifications

Route::post('/mark-notifications-as-read', [PaymentNotificationsController::class, 'markAsRead'])->name('mark-notifications-as-read');




// Requests 

Route::get("/requests",[RequestController::class,'index'])->name('requests.index') ;



//files for companies 

Route::get('dashboard/companies/{id?}/companyFile/fileForm', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@FileForm')->name('companyfile');
Route::post('dashboard/companies/{id?}/companyFile/fileForm', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@addCompanyFile')->name('companyfile.addCompanyFile');

Route::get('dashboard/companies/companyFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@show')->name('companyfile.show');
Route::post('dashboard/companies/companyFile/renew/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@renew')->name('companyfile.renew');
Route::get('dashboard/companies/companyFile/renew_request/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@renew_request')->name('companyfile.renew_request');
Route::get('dashboard/companies/companyFile/edit/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@edit')->name('companyfile.edit');
Route::put('dashboard/companies/companyFile/edit/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@update')->name('companyfile.update');
Route::delete('dashboard/companies/companyFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\CompanyFileController@destroy')->name('companyfile.destroy');




//files for employees
 

Route::get('dashboard/employee/{id?}/employeeFile/fileForm', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@FileForm')->name('employerfile');
Route::post('dashboard/employee/{id?}/employeeFile/addEmployerFile', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@addEmployerFile')->name('employerfile.addEmployerFile');

Route::get('dashboard/employee/employeeFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@show')->name('employerfile.show');

Route::post('dashboard/employee/employeeFile/renew/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@renew')->name('employerfile.renew');

Route::get('dashboard/employee/employeeFile/edit/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@edit')->name('employerfile.edit');
Route::put('dashboard/employee/employeeFile/update/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@update')->name('employerfile.update');

Route::delete('dashboard/employee/employeeFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@destroy')->name('employerfile.destroy');
Route::get('dashboard/employee/employeeFile/renew_request/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Employees\EmployerFileController@renew_request')->name('employerfile.renew_request');


//files for sponsores

Route::get('dashboard/sponsore/{id?}/sponsoreFile/fileForm', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@FileForm')->name('sponsorefile');
Route::post('dashboard/sponsore/{id?}/sponsoreFile/addSponsoreFile', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@addSponsoreFile')->name('sponsorefile.addSponsoreFile');

Route::get('dashboard/sponsore/sponsoreFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@show')->name('sponsorefile.show');

Route::post('dashboard/sponsore/sponsoreFile/renew/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@renew')->name('sponsorefile.renew');

Route::get('dashboard/sponsore/sponsoreFile/edit/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@edit')->name('sponsorefile.edit');
Route::put('dashboard/sponsore/sponsoreFile/update/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@update')->name('sponsorefile.update');

Route::delete('dashboard/sponsore/sponsoreFile/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@destroy')->name('sponsorefile.destroy');
Route::get('dashboard/sponsore/sponsoreFile/renew_request/{id?}', 'App\Http\Controllers\Frontend\Dashboard\Sponsore\SponsoreFileController@renew_request')->name('sponsorefile.renew_request');


Route::get('transactions',[TransactionController::class,'showTransactions'])->name('transactions') ;



}) ;

// Payment for registeration
Route::get('locked/payment', [LockedController::class, 'index'])->name('locked.checkout');
Route::post('locked/session',  [LockedController::class, 'session'])->name('locked.session');
Route::get('locked/success', [LockedController::class, 'success'])->name('locked.success');



//lock screen
 
Route::get('/locked', function () {
    return view('frontend.dashboard.pages.lock.lock');
})->name('locked');



