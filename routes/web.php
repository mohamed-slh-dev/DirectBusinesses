<?php

use App\Http\Controllers\CustomerAuctionController;
use App\Http\Controllers\CustomerBlogController;
use App\Http\Controllers\CustomerCompanyController;
use App\Http\Controllers\CustomerDealController;
use App\Http\Controllers\CustomerHomeController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\CustomerRequirementController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrescreenController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\StartupLoginController;
use App\Http\Controllers\StartupRegisterController;
use App\Http\Controllers\VendorAuctionController;
use App\Http\Controllers\VendorBlogController;
use App\Http\Controllers\VendorCompanyController;
use App\Http\Controllers\VendorDealController;
use App\Http\Controllers\VendorHomeController;
use App\Http\Controllers\VendorProfileController;
use App\Http\Controllers\VendorRequirementController;
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

Route::get('/', function () {
    return redirect()->route('login');
});



// *******************************************************************
// ----------------------- REGISTER & LOGINS ---------------------------
// *********************************************************************


// 1- login and its functions
Route::get('login', [LoginController::class, 'login'])->name('login');

Route::post('check-login', [LoginController::class, 'checkuser'])->name('checklogin');




// 2- register and its functions
Route::get('register', [RegisterController::class, 'register'])->name('register');

Route::post('registeration', [RegisterController::class, 'registeration'])->name('registeration');







// ---------------------------------- prescreen ------------------------------




// 1- prescreen and its functions
Route::get('prescreen', [PrescreenController::class, 'prescreen'])->name('prescreen');















// *********************************************************************
// -------------------------------- VENDOR -----------------------------
// *********************************************************************


// --------------------------------- Homes ------------------------------



// 1- homepage and its functions
Route::get('vendor', [VendorHomeController::class, 'home'])->name('vendor.home');




// ---------------------------------- profiles ------------------------------



// 1- profile index and its functions
Route::get('vendor/profile', [VendorProfileController::class, 'index'])->name('vendor.profile');



// --------------
// 2- profile requirements and its functions
Route::get('vendor/profile/requirements', [VendorProfileController::class, 'requirements'])->name('vendor.profile.requirements');





// --------------
// 3- profile deals and its functions
Route::get('vendor/profile/deals', [VendorProfileController::class, 'deals'])->name('vendor.profile.deals');





// --------------
// 4- profile auctions and its functions
Route::get('vendor/profile/auctions', [VendorProfileController::class, 'auctions'])->name('vendor.profile.auctions');






// --------------
// 5- profile reviews and its functions
Route::get('vendor/profile/reviews', [VendorProfileController::class, 'reviews'])->name('vendor.profile.reviews');







// --------------
// 6- profile settings and its functions
Route::get('vendor/profile/settings', [VendorProfileController::class, 'settings'])->name('vendor.profile.settings');

Route::post('vendor/profile/settings/update', [VendorProfileController::class, 'updatesettings'])->name('vendor.profile.settings.update');

Route::post('vendor/profile/settings/addservice', [VendorProfileController::class, 'addservice'])->name('vendor.profile.settings.addservice');

Route::get('vendor/profile/settings/deleteservice/{service_id}', [VendorProfileController::class, 'deleteservice'])->name('vendor.profile.settings.deleteservice');

Route::post('vendor/profile/settings/addcertification', [VendorProfileController::class, 'addcertification'])->name('vendor.profile.settings.addcertification');

Route::get('vendor/profile/settings/deletecertificate/{certi_id}', [VendorProfileController::class, 'deletecertificate'])->name('vendor.profile.settings.deletecertificate');

Route::post('vendor/profile/settings/updatecertification', [VendorProfileController::class, 'updatecertification'])->name('vendor.profile.settings.updatecertification');






// --------------
// 7- profile help and its functions
Route::get('vendor/profile/help', [VendorProfileController::class, 'help'])->name('vendor.profile.help');

Route::post('vendor/profile/help/create', [VendorProfileController::class, 'addHelp'])->name('vendor.profile.help.addHelp');







// ---------------------------------- Requirements/Opportunities ------------------------------



// 1- requirements browse and its functions
Route::get('vendor/opportunities', [VendorRequirementController::class, 'browse'])->name('vendor.requirements.browse');

Route::post('vendor/opportunities', [VendorRequirementController::class, 'browseFilter'])->name('vendor.requirements.browseFilter');

Route::post('vendor/opportunities/send-quotation', [VendorRequirementController::class, 'sendQuotation'])->name('vendor.requirements.send.quotation');


Route::post('vendor/opportunities/update-quotation', [VendorRequirementController::class, 'updateQuotation'])->name('vendor.requirements.update.quotation');

Route::post('vendor/opportunities/send-clarification', [VendorRequirementController::class, 'sendClarification'])->name('vendor.requirements.send.clarification');
// --------------
// 2- requirements view and its functions
Route::get('vendor/opportunities/{id}', [VendorRequirementController::class, 'view'])->name('vendor.requirements.view');




// --------------
// 3- requirements view request and its functions
Route::get('vendor/opportunities/{id}/request', [VendorRequirementController::class, 'viewRequest'])->name('vendor.requirements.viewRequest');









// ------------------------------------------ Deals ----------------------------------



// 1- deal posting and its functions
Route::get('vendor/deals/post', [VendorDealController::class, 'post'])->name('vendor.deals.post');

Route::post('vendor/deals/create', [VendorDealController::class, 'create'])->name('vendor.deals.create');

Route::post('vendor/deals/accept/{id}', [VendorDealController::class, 'accept'])->name('vendor.deals.accept');

// --------------
// 2- deal viewing and its functions
Route::get('vendor/deals/{id}', [VendorDealController::class, 'view'])->name('vendor.deals.view');











// ------------------------------------------ Auctions --------------------------------



// 1- auctions browse and its functions
Route::get('vendor/auctions', [VendorAuctionController::class, 'browse'])->name('vendor.auctions.browse');

Route::post('vendor/auctions', [VendorAuctionController::class, 'browseFilter'])->name('vendor.auctions.browseFilter');

Route::post('vendor/auctions/send-bid', [VendorAuctionController::class, 'sendBid'])->name('vendor.auctions.send.bid');

Route::post('vendor/auctions/update-bid', [VendorAuctionController::class, 'updateBid'])->name('vendor.auctions.update.bid');

// --------------
// 2- auctions view and its functions
Route::get('vendor/auctions/{id}', [VendorAuctionController::class, 'view'])->name('vendor.auctions.view');




// --------------
// 3- auctions view request and its functions
Route::get('vendor/auctions/{id}/request', [VendorAuctionController::class, 'viewRequest'])->name('vendor.auctions.viewRequest');








// ------------------------------------------ companies --------------------------------



// 1- company profile and its functions
Route::get('vendor/companies/{id}', [VendorCompanyController::class, 'profile'])->name('vendor.companies.profile');

Route::post('vendor/companies/addreview', [VendorCompanyController::class, 'addreview'])->name('vendor.companies.addreview');






// ------------------------------------------ blogs --------------------------------



// 1- blogs browse and its functions
Route::get('vendor/blogs', [VendorBlogController::class, 'browse'])->name('vendor.blogs.browse');

// filter
Route::post('vendor/blogs', [VendorBlogController::class, 'filterBlogs'])->name('vendor.blogs.filterBlogs');




// --------------
// 2- blogs posting and its functions
Route::get('vendor/blogs/post', [VendorBlogController::class, 'post'])->name('vendor.blogs.post');
Route::post('vendor/blogs/create', [VendorBlogController::class, 'create'])->name('vendor.blogs.create');



// -------------
// 3- blogs viewing and its functions
Route::get('vendor/blogs/{id}', [VendorBlogController::class, 'view'])->name('vendor.blogs.view');













// *********************************************************************
// -------------------------------- Customer -----------------------------
// *********************************************************************





// --------------------------------- Homes ------------------------------



// 1- homepage and its functions
Route::get('customer', [CustomerHomeController::class, 'home'])->name('customer.home');




// ---------------------------------- profiles ------------------------------



// 1- profile index and its functions
Route::get('customer/profile', [CustomerProfileController::class, 'index'])->name('customer.profile');



// --------------
// 2- profile requirements and its functions
Route::get('customer/profile/requirements', [CustomerProfileController::class, 'requirements'])->name('customer.profile.requirements');





// --------------
// 3- profile deals and its functions
Route::get('customer/profile/deals', [CustomerProfileController::class, 'deals'])->name('customer.profile.deals');





// --------------
// 4- profile auctions and its functions
Route::get('customer/profile/auctions', [CustomerProfileController::class, 'auctions'])->name('customer.profile.auctions');






// --------------
// 5- profile reviews and its functions
Route::get('customer/profile/reviews', [CustomerProfileController::class, 'reviews'])->name('customer.profile.reviews');







// --------------
// 6- profile settings and its functions
Route::get('customer/profile/settings', [CustomerProfileController::class, 'settings'])->name('customer.profile.settings');





// --------------
// 7- profile help and its functions
Route::get('customer/profile/help', [CustomerProfileController::class, 'help'])->name('customer.profile.help');

Route::post('customer/profile/help/create', [CustomerProfileController::class, 'addHelp'])->name('customer.profile.help.addHelp');









// --------------------------------------- Requirements ------------------------------



// 1- requirements posting and its functions
Route::get('customer/requirements/post', [CustomerRequirementController::class, 'post'])->name('customer.requirements.post');

Route::post('customer/requirements/create', [CustomerRequirementController::class, 'create'])->name('customer.requirements.create');


// --------------
// 2- requirements view and its functions
Route::get('customer/requirements/{id}', [CustomerRequirementController::class, 'view'])->name('customer.requirements.view');

Route::get('customer/requirements/accept/{id}', [CustomerRequirementController::class, 'accept'])->name('customer.requirements.accept');


Route::get('customer/requirements/delete/{id}', [CustomerRequirementController::class, 'delete'])->name('customer.requirements.delete');


// --------------
// 3- requirement evaluation and its functions
Route::get('customer/requirements/{id}/evaluation', [CustomerRequirementController::class, 'evaluation'])->name('customer.requirements.evaluation');









// ------------------------------------------ Deals ----------------------------------



// 1- deals browse and its functions
Route::get('customer/deals', [CustomerDealController::class, 'browse'])->name('customer.deals.browse');

Route::post('customer/deals', [CustomerDealController::class, 'browseFilter'])->name('customer.deals.browseFilter');


Route::post('customer/deals/create', [CustomerDealController::class, 'create'])->name('customer.deals.create');

Route::post('customer/deals/update', [CustomerDealController::class, 'update'])->name('customer.deals.update');


// --------------
// 2- deal viewing and its functions
Route::get('customer/deals/{id}', [CustomerDealController::class, 'view'])->name('customer.deals.view');



// --------------
// 3- deal view request and its functions
Route::get('customer/deals/{id}/request', [CustomerDealController::class, 'viewRequest'])->name('customer.deals.viewRequest');












// ------------------------------------------ Auctions --------------------------------



// 1- auction posting and its functions
Route::get('customer/auctions/post', [CustomerAuctionController::class, 'post'])->name('customer.auctions.post');

Route::post('customer/auctions/create', [CustomerAuctionController::class, 'create'])->name('customer.auctions.create');


// --------------
// 2- auctions view and its functions
Route::get('customer/auctions/{id}', [CustomerAuctionController::class, 'view'])->name('customer.auctions.view');



Route::get('customer/auctions/accept/{id}', [CustomerAuctionController::class, 'accept'])->name('customer.auctions.accept');





// ------------------------------------------ companies --------------------------------



// 1- company profile and its functions
Route::get('customer/companies/{id}', [CustomerCompanyController::class, 'profile'])->name('customer.companies.profile');







// ------------------------------------------ blogs --------------------------------



// 1- blogs browse and its functions
Route::get('customer/blogs', [CustomerBlogController::class, 'browse'])->name('customer.blogs.browse');

// filter
Route::post('customer/blogs', [CustomerBlogController::class, 'filterBlogs'])->name('customer.blogs.filterBlogs');



// --------------
// 2- blogs posting and its functions
Route::get('customer/blogs/post', [CustomerBlogController::class, 'post'])->name('customer.blogs.post');

Route::post('customer/blogs/create', [CustomerBlogController::class, 'create'])->name('customer.blogs.create');


// -------------
// 3- blogs viewing and its functions
Route::get('customer/blogs/{id}', [CustomerBlogController::class, 'view'])->name('customer.blogs.view');











// *********************************************************************
// -------------------------------- Startup -----------------------------
// *********************************************************************




// ---------------------------------- Login + Register -----------------------------


// 1- login and its functions
Route::get('startup/login', [StartupLoginController::class, 'login'])->name('startup.login');

Route::post('startup/check-login', [StartupLoginController::class, 'checkuser'])->name('startup.checklogin');



// 2- register and its functions
Route::get('startup/register', [StartupRegisterController::class, 'register'])->name('startup.register');


Route::post('startup/registeration', [StartupRegisterController::class, 'registeration'])->name('startup.registeration');







// -------------------------------------- Home -------------------------------




// 1- home and its functions
Route::get('startup', [StartupController::class, 'home'])->name('startup.home');






// ----------------
// 2- single service and its functions
Route::get('startup/services/{id}', [StartupController::class, 'singleService'])->name('startup.services.view');





// ----------------
// 3- single requirement and its functions
Route::get('startup/requirements/{id}', [StartupController::class, 'singleRequirement'])->name('startup.requirements.view');





// ----------------
// 4- single requirement and its functions
Route::get('startup/companies/{id}', [StartupController::class, 'singleCompany'])->name('startup.companies.profile');