<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\homecontroller;
use App\Http\Controllers\admin\pakegecontroller;
use function Ramsey\Uuid\v1;
USE App\Http\Controllers\admin\batchcontroller;
USE App\Http\Controllers\admin\stockdashbordcontroller;
USE App\Http\Controllers\admin\seedcontroller;
USE App\Http\Controllers\admin\stockcontroller;
use App\Http\Controllers\admin\finalstock;
use App\Http\Controllers\admin\jobworkcontroller;
use App\Http\Controllers\admin\settingcontroller;
use App\Http\Controllers\admin\chocolatecontroller;
use App\Http\Controllers\admin\machinecontroller;
use App\Http\Controllers\admin\usercontroller;
// use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();

// Route::get('/', 'HomeController@redirectAdmin')->name('index');
// Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin routes
 */
// Route::group(['prefix' => 'admin'], function () {
    // Route::get('index', 'Backend\DashboardController@index')->name('admin.dashboard');
    // Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    // Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    // Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);


    // // Login Routes
    // Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    // Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // // Logout Routes
    // Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // // Forget Password Routes
    // Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    // Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
// });
       


route::get('/', [pakegecontroller::class, 'index']);
route::post('insertlogin', [pakegecontroller::class, 'adminlogin']);
route::get('logout', [pakegecontroller::class, 'logout']);
// ******************************* user**************
route::get('loginuser', [usercontroller::class, 'login']);
route::post('userlogin', [usercontroller::class, 'userlogin']);

Route::group(['middleware'=>'userside'],function()
{
    route::get('createuserchocolate', [usercontroller::class, 'createuserchocolate']);
route::post('insertendgrowing', [usercontroller::class, 'insertendgrowing']);

});

Route::group(['middleware'=>'adminside'],function()
{
route::get('assign', [homecontroller::class, 'assign']);
route::get('assignreceive', [homecontroller::class, 'assignreceive']);

route::get('boil', [homecontroller::class, 'boil']);
route::get('boiling1', [homecontroller::class, 'boiling1']);
route::get('boiling1list', [homecontroller::class, 'boiling1list']);
route::get('boiling1lots', [homecontroller::class, 'boiling1lots']);
route::get('boiling1lotslist', [homecontroller::class, 'boiling1lotslist']);
route::get('boiling1packets', [homecontroller::class, 'boiling1packets']);
route::get('boiling1packetslist', [homecontroller::class, 'boiling1packetslist']);
route::get('boilingend', [homecontroller::class, 'boilingend']);
route::get('boilingendlist', [homecontroller::class, 'boilingendlist']);
route::get('cancelpacketlist', [homecontroller::class, 'cancelpacketlist']);
route::get('centerdepartment', [homecontroller::class, 'centerdepartment']);
route::get('chocolatedashboardlist', [homecontroller::class, 'chocolatedashboardlist']);
route::get('createboiling1', [homecontroller::class, 'createboiling1']);
route::get('createbatchsequence', [homecontroller::class, 'createbatchsequence']);
route::get('createcolor', [homecontroller::class, 'createcolor']);
route::get('createfinishtype', [homecontroller::class, 'createfinishtype']);
route::get('createlotprocess', [homecontroller::class, 'createlotprocess']);
route::get('createmachinelaser', [homecontroller::class, 'createmachinelaser']);
route::get('createmachineequipments', [homecontroller::class, 'createmachineequipments']);
route::get('createpolishing1', [homecontroller::class, 'createpolishing1']);
route::get('createpackets', [homecontroller::class, 'createpackets']);
route::get('createpurchase1', [homecontroller::class, 'createpurchase1']);
route::get('createproductcategories', [homecontroller::class, 'createproductcategories']);
route::get('createprocessreson', [homecontroller::class, 'createprocessreson']);
route::get('createpurchase1vendors', [homecontroller::class, 'createpurchase1vendors']);
route::get('createpurchase1products', [homecontroller::class, 'createpurchase1products']);
route::get('createpurchase1orders', [homecontroller::class, 'createpurchase1orders']);
route::get('createpurity', [homecontroller::class, 'createpurity']);
route::get('createvendorpricelists', [homecontroller::class, 'createvendorpricelists']);
route::get('createstockmove', [homecontroller::class, 'createstockmove']);
route::get('createshape', [homecontroller::class, 'createshape']);
route::get('finalpacketlistkarben', [homecontroller::class, 'finalpacketlistkarben']);
route::get('finalpacketlist', [homecontroller::class, 'finalpacketlist']);
route::get('finalpacketkarben', [homecontroller::class, 'finalpacketkarben']);
route::get('finalpacket', [homecontroller::class, 'finalpacket']);
route::get('discuss1', [homecontroller::class, 'discuss1']);
route::get('general', [homecontroller::class, 'general']);
route::get('finalstocklist', [homecontroller::class, 'finalstocklist']);
route::get('finalpackets', [homecontroller::class, 'finalpackets']);
route::get('history', [homecontroller::class, 'history']);
route::get('growing', [homecontroller::class, 'growing']);
route::get('generalsetting', [homecontroller::class, 'generalsetting']);
route::get('index1', [homecontroller::class, 'index1']);
route::get('Jangadlist', [homecontroller::class, 'Jangadlist']);
route::get('laserlist', [homecontroller::class, 'laserlist']);
route::get('laser1', [homecontroller::class, 'laser1']);
route::get('laser', [homecontroller::class, 'laser']);
route::get('jobwork1list', [homecontroller::class, 'jobwork1list']);
route::get('lotsdashboardlist', [homecontroller::class, 'lotsdashboardlist']);
route::get('lotsdashboard', [homecontroller::class, 'lotsdashboard']);
route::get('locationlist', [homecontroller::class, 'locationlist']);
route::get('machinelaser', [homecontroller::class, 'machinelaser']);
route::get('machineequipmentslist', [homecontroller::class, 'machineequipmentslist']);
route::get('machineequipments', [homecontroller::class, 'machineequipments']);
route::get('machine', [homecontroller::class, 'machine']);
route::get('lotslist', [homecontroller::class, 'lotslist']);
route::get('manufacturing', [homecontroller::class, 'manufacturing']);
route::get('machinemanagement1', [homecontroller::class, 'machinemanagement1']);
route::get('machinelist', [homecontroller::class, 'machinelist']);
route::get('machinelaserlist', [homecontroller::class, 'machinelaserlist']);
route::get('packetlaserlistdashboard', [homecontroller::class, 'packetlaserlistdashboard']);
route::get('packetlaserdashboard', [homecontroller::class, 'packetlaserdashboard']);
route::get('packetkarben', [homecontroller::class, 'packetkarben']);
route::get('packetdashboard', [homecontroller::class, 'packetdashboard']);
route::get('partylist', [homecontroller::class, 'partylist']);
route::get('polishing1', [homecontroller::class, 'polishing1']);
route::get('polishing1endslist', [homecontroller::class, 'polishing1endslist']);
route::get('polishing1ends', [homecontroller::class, 'polishing1ends']);
route::get('polishing1list', [homecontroller::class, 'polishing1list']);
route::get('polishing1lots', [homecontroller::class, 'polishing1lots']);
route::get('polishing1lotslist', [homecontroller::class, 'polishing1lotslist']);
route::get('polishing1packets', [homecontroller::class, 'polishing1packets']);
route::get('polishing1packetslist', [homecontroller::class, 'polishing1packetslist']);
route::get('productcategories', [homecontroller::class, 'productcategories']);
route::get('purchase', [homecontroller::class, 'purchase']);
route::get('purchase1chart', [homecontroller::class, 'purchase1chart']);
route::get('purchase1calendar', [homecontroller::class, 'purchase1calendar']);
route::get('purchase1ascendingchart', [homecontroller::class, 'purchase1ascendingchart']);
route::get('purchase1activity', [homecontroller::class, 'purchase1activity']);
route::get('purchase1', [homecontroller::class, 'purchase1']);
route::get('stockquantlist', [homecontroller::class, 'stockquantlist']);
route::get('vendorpricelistkarban', [homecontroller::class, 'vendorpricelistkarban']);
route::get('vendorpricelists', [homecontroller::class, 'vendorpricelists']);
route::get('list', [homecontroller::class, 'weightlosslist']);
route::get('stocklist', [homecontroller::class, 'stocklist']);
route::get('stockmovelist', [homecontroller::class, 'stockmovelist']);
route::get('settinguserslist', [homecontroller::class, 'settinguserslist']);
route::get('starred', [homecontroller::class, 'starred']);
route::get('settingcompanieslist', [homecontroller::class, 'settingcompanieslist']);
route::get('settingmanufacturing', [homecontroller::class, 'settingmanufacturing']);
route::get('settingpurchase', [homecontroller::class, 'settingpurchase']);
route::get('settings1', [homecontroller::class, 'settings1']);
route::get('receive', [homecontroller::class, 'receive']);
route::get('seed', [homecontroller::class, 'seed']);
route::get('purchase1table', [homecontroller::class, 'purchase1table']);
route::get('purchase1tableexpand', [homecontroller::class, 'purchase1tableexpand']);
route::get('purchase1taxes', [homecontroller::class, 'purchase1taxes']);
route::get('purchase1untaxtedamount', [homecontroller::class, 'purchase1untaxtedamount']);
route::get('purchase1vendors', [homecontroller::class, 'purchase1vendors']);
route::get('purchase1vendorslist', [homecontroller::class, 'purchase1vendorslist']);
route::get('purchase1orderslist', [homecontroller::class, 'purchase1orderslist']);
route::get('purchase1piechart', [homecontroller::class, 'purchase1piechart']);
route::get('purchase1products', [homecontroller::class, 'purchase1products']);
route::get('purchase1productslist', [homecontroller::class, 'purchase1productslist']);
route::get('purchase1purchaseanalysis', [homecontroller::class, 'purchase1purchaseanalysis']);
route::get('purchase1purchaseanalysistable', [homecontroller::class, 'purchase1purchaseanalysistable']);
route::get('purchase1stackedchart', [homecontroller::class, 'purchase1stackedchart']);
route::get('purchase1descendingchart', [homecontroller::class, 'purchase1descendingchart']);
route::get('purchase1linechart', [homecontroller::class, 'purchase1linechart']);
route::get('purchase1list', [homecontroller::class, 'purchase1list']);
route::get('purchase1orders', [homecontroller::class, 'purchase1orders']);
route::get('purchase1count', [homecontroller::class, 'purchase1count']);
route::get('purchase1currentlyrate', [homecontroller::class, 'purchase1currentlyrate']);
route::get('clickstock', [homecontroller::class, 'clickstock']);
route::get('clickfinalstock', [homecontroller::class, 'clickfinalstock']);
route::get('clickchocolatedashboard', [homecontroller::class, 'clickchocolatedashboard']);
route::get('clicklaser', [homecontroller::class, 'clicklaser']);
route::get('clickmachinemanagement', [homecontroller::class, 'clickmachinemanagement']);
route::get('clickjobwork1', [homecontroller::class, 'clickjobwork1']);
route::get('clickfinalpacketkarben', [homecontroller::class, 'clickfinalpacketkarben']);
route::get('clickfinalpacketkarbenlist', [homecontroller::class, 'clickfinalpacketkarbenlist']);
route::get('clickhistory', [homecontroller::class, 'clickhistory']);
route::get('demo', [pakegecontroller::class, 'demo']);


// ***************************batch **************************************
route::get('batch1', [batchcontroller::class, 'batch1']);
route::post('insertbatch', [batchcontroller::class, 'insertbatch']);
route::get('shape', [batchcontroller::class, 'shape']);
route::get('shaperemove/{id}',[batchcontroller::class,'shaperemove']);
route::post('insertshape', [batchcontroller::class, 'insertshape']);
route::get('lotprocess', [batchcontroller::class, 'lotprocess']);
route::post('insertlotprocess', [batchcontroller::class, 'insertlotprocess']);
route::get('lotprocessremove/{id}',[batchcontroller::class,'lotprocessremove']);
route::get('processreson', [batchcontroller::class, 'processreson']);
route::post('insertprocessreson', [batchcontroller::class, 'insertprocessreson']);
route::get('processresonremove/{id}',[batchcontroller::class,'processresonremove']);
route::get('finishtype', [batchcontroller::class, 'finishtype']);
route::post('insertfinishtype', [batchcontroller::class, 'insertfinishtype']);
route::get('finishtyperemove/{id}',[batchcontroller::class,'finishtyperemove']);
route::get('color', [batchcontroller::class, 'color']);
route::post('insertcolor', [batchcontroller::class, 'insertcolor']);
route::get('colorremove/{id}',[batchcontroller::class,'colorremove']);
route::get('purity', [batchcontroller::class, 'purity']);
route::post('insertpurity', [batchcontroller::class, 'insertpurity']);
route::get('purityremove/{id}',[batchcontroller::class,'purityremove']);
route::get('createlot', [batchcontroller::class, 'createlot']);
// route::get('clickbatch', [batchcontroller::class, 'clickbatch']);
// route::get('editbatch/{id}',[batchcontroller::class,'editbatch']);
route::get('batchlist', [batchcontroller::class, 'batchlist']);
route::get('getbatch/{id}',[batchcontroller::class,'getbatch']);
//************************* */ stockdasbord ***********************
route::get('stockdashboard1', [stockdashbordcontroller::class, 'stockdashboard1']);
route::get('clickstockdashboardseeds', [stockdashbordcontroller::class, 'clickstockdashboardseeds']);
route::get('clickstockdashboardchocklate', [stockdashbordcontroller::class, 'clickstockdashboardchocklate']);
route::get('clickstockdashboardstockloss', [stockdashbordcontroller::class, 'clickstockdashboardstockloss']);
route::get('clickstockdashboardstock', [stockdashbordcontroller::class, 'clickstockdashboardstock']);

// *********************seeds **************************************

route::get('seeds1', [seedcontroller::class, 'seeds1']);
route::post('insertseeds', [seedcontroller::class, 'insertseeds']);
route::get('seedslist', [seedcontroller::class, 'seedslist']);

// *************************** STOCK********************************
route::get('stock1', [stockcontroller::class, 'stock1']);
route::post('insertstock', [stockcontroller::class, 'insertstock']);
route::get('weightloss', [stockcontroller::class, 'weightloss']);
route::post('insertweightloss', [stockcontroller::class, 'insertweightloss']);
route::get('cancelpackets', [stockcontroller::class, 'cancelpackets']);
route::post('insertcancelpackets', [stockcontroller::class, 'insertcancelpackets']);
route::get('stockloss', [stockcontroller::class, 'stockloss']);
route::post('insertstockloss', [stockcontroller::class, 'insertstockloss']);
route::get('chocolate', [stockcontroller::class, 'chocolate']);
route::post('insertchocolate', [stockcontroller::class, 'insertchocolate']);
route::get('location', [stockcontroller::class, 'location']);
route::post('insertlocation', [stockcontroller::class, 'insertlocation']);
route::get('stockmove', [stockcontroller::class, 'stockmove']);
route::post('insertstockmove', [stockcontroller::class, 'insertstockmove']);
route::get('stockquant', [stockcontroller::class, 'stockquant']);
route::post('insertstockquant', [stockcontroller::class, 'insertstockquant']);
route::get('createlocation', [stockcontroller::class, 'createlocation']);
route::get('packets', [stockcontroller::class, 'packets']);
route::post('insertstockpackets', [stockcontroller::class, 'insertstockpackets']);

// *****************************finalstock**************************************
route::get('finalstock', [finalstock::class, 'finalstock']);
route::get('batchsequence', [finalstock::class, 'batchsequence']);
route::post('insertbatchsequence', [finalstock::class, 'insertbatchsequence']);
route::get('batchsequenceremove/{id}',[finalstock::class,'batchsequenceremove']);

// ********************************setting***********************************************
route::get('createsettinguser', [settingcontroller::class, 'createsettinguser']);
route::post('insertcreatesettinguser', [settingcontroller::class, 'insertcreatesettinguser']);
route::get('settingusers', [settingcontroller::class, 'settingusers']);
route::get('mainsetting', [settingcontroller::class, 'mainsetting']);
route::post('insertlanguage', [settingcontroller::class, 'insertlanguage']);
route::get('createsettingcompanies', [settingcontroller::class, 'createsettingcompanies']);
route::post('insertcompany', [settingcontroller::class, 'insertcompany']);
route::get('getdis/{id}',[settingcontroller::class,'getdis']);
route::get('settingcompanies', [settingcontroller::class, 'settingcompanies']);
route::get('createsettingimage', [settingcontroller::class, 'createsettingimage']);
route::get('settingbackgroundimage', [settingcontroller::class, 'settingbackgroundimage']);
route::post('insertbackgroundimage', [settingcontroller::class, 'insertbackgroundimage']);

// **************************************jobwork************************************************
route::get('createparty', [jobworkcontroller::class, 'createparty']);
route::post('insertparty', [jobworkcontroller::class, 'insertparty']);
route::get('party', [jobworkcontroller::class, 'party']);
route::get('jobwork1', [jobworkcontroller::class, 'jobwork1']);
route::get('createjobwork1', [jobworkcontroller::class, 'createjobwork1']);
route::post('insertjobwork', [jobworkcontroller::class, 'insertjobwork']);
route::get('jangad', [jobworkcontroller::class, 'jangad']);
route::get('createJangad', [jobworkcontroller::class, 'createJangad']);
route::post('insertjangad', [jobworkcontroller::class, 'insertjangad']);



// **********************************machine***********************************************
route::get('createmachine', [machinecontroller::class, 'createmachine']);
route::post('insertmachine', [machinecontroller::class, 'insertmachine']);
route::get('deletemachine/{id}', [machinecontroller::class, 'deletemachine']);


// ******************************************chocolate*************************************************************
route::get('chocolatedashboard', [chocolatecontroller::class, 'chocolatedashboard']);
route::get('insertchocolate', [chocolatecontroller::class, 'insertchocolate']);
route::post('insertchocolatedashboard', [chocolatecontroller::class, 'insertchocolatedashboard']);
// Route::post('upload', [chocolatecontroller::class, 'store']);
route::get('createchocolatedashboard', [chocolatecontroller::class, 'createchocolatedashboard']);
route::get('addchocolate', [chocolatecontroller::class, 'addchocolate']);
route::get('recivelot', [chocolatecontroller::class, 'recivelot']);
route::post('insertendgrowing', [chocolatecontroller::class, 'insertendgrowing']);
route::get('lots', [chocolatecontroller::class, 'lots']);

// ****************************************RoleandPermission**********************************************************
Route::get('index', 'Backend\DashboardController@index')->name('admin.dashboard');
Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);

// Login Routes
Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

// Logout Routes
Route::post('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

// Forget Password Routes
Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});
