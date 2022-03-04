<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\OparetorController;
use App\Http\Controllers\EmployeeController;

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
    return view('auth.login');
});

 Auth::routes();

 Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('superadmin/home', [HomeController::class, 'SuperadminHome'])->name('superadmin.home')->middleware('is_super');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('oparetor/home', [HomeController::class, 'OparetorHome'])->name('oparetor.home')->middleware('is_oparetor');
Route::get('employee/home', [HomeController::class, 'EmployeeHome'])->name('employee.home')->middleware('is_employee');
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/employee/details/{id}', [EmployeeController::class, 'EmployeeDetails'])->name('employee.details');
Route::get('/delete/employee/{id}', [EmployeeController::class, 'EmployeeDelete'])->name('employee.delete');

Route::get('employee/list', [EmployeeController::class, 'Employeelist'])->name('employee.list');
Route::post('/employee/branch/add', [EmployeeController::class, 'BranchemployeeAdd'])->name('branch.employee.add');

Route::get('recep/list', [EmployeeController::class, 'Receplist'])->name('recep.list');
Route::post('/recep/branch/add', [EmployeeController::class, 'BranchRecepAdd'])->name('branch.recep.add');

Route::group(['middleware'=>['is_super']] , function(){
    // add organization view page route
Route::get('add/organization', [OrganizationController::class, 'AddOrganization'])->name('add.organization');
// store organization route
Route::post('store/organization', [OrganizationController::class, 'StoreOrganization'])->name('store.organization');
// organization list
Route::get('organization/list', [OrganizationController::class, 'OrganizationList'])->name('organization.list');
// organization admin list
Route::get('organization/admin/list', [OrganizationController::class, 'OrganizationAdminList'])->name('organization.admin.list');
Route::post('/admin/organization/add', [AdminController::class, 'OrganizationAdminAdd'])->name('organization.admin.add');
// organization details
Route::get('/details/organization/{id}', [OrganizationController::class, 'OrganizationDeatils'])->name('organization.details');
// organization edit
Route::get('/organization/edit/{id}', [OrganizationController::class, 'OrganizationEdit'])->name('organization.edit');
// organization edit
Route::post('/organization/update/{id}', [OrganizationController::class, 'OrganizationUpdate'])->name('organization.update');
// organization delete
Route::delete('/organization/delete/{id}', [OrganizationController::class, 'OrganizationDelete'])->name('organization.delete');
// admnorganization delete
Route::get('/delete/admin/organization/{id}', [OrganizationController::class, 'OrganizationAdminDelete'])->name('organization.admin.delete');
Route::get('/edit/organization/{id}', [OrganizationController::class, 'Organizationadminedit'])->name('organization.admin.edit');
Route::post('/update/organization/admin/{id}', [OrganizationController::class, 'Organizationadminedupdate'])->name('organization.admin.update');

});

Route::group(['middleware'=>['is_admin']] , function(){

    Route::get('branch/list', [BranchController::class, 'BranchList'])->name('branch.list');
    Route::get('/edit/branch/{id}', [BranchController::class, 'BranchEdit'])->name('branch.edit');
    Route::post('/update/branch/admin/{id}', [BranchController::class, 'Branchdupdate'])->name('branch.admin.update');
    Route::post('/update/oparetor/admin/{id}', [OparetorController::class, 'Oparetordupdate'])->name('oparetor.admin.update');
    Route::post('/department/update/{id}', [AdminController::class, 'Departmentupdate'])->name('department.admin.update');
    Route::get('department/list', [BranchController::class, 'DepartmentList'])->name('department.list');
    Route::get('oparetor/list', [OparetorController::class, 'OpaetorList'])->name('oparetor.list');
    Route::get('/edit/oparetor/{id}', [OparetorController::class, 'OparetorEdit'])->name('oparetor.edit');
    Route::get('/edit/department/{id}', [AdminController::class, 'DepartmentEdit'])->name('department.edit');
    Route::post('/branch/add', [BranchController::class, 'BranchAdd'])->name('branch.add');
    Route::post('/department/add', [BranchController::class, 'DepartmentAdd'])->name('department.add');
    Route::post('/oparetor/branch/add', [OparetorController::class, 'BranchOparetorAdd'])->name('branch.oparetor.add');
    Route::get('designation/list', [BranchController::class, 'DesignationList'])->name('designation.list');
    Route::get('/designation/edit/{id}', [BranchController::class, 'DesignationEdit'])->name('designation.edit');
    Route::post('/designation/update/{id}', [BranchController::class, 'DesignationUpdate'])->name('designation.update');
    Route::post('/designation/add', [BranchController::class, 'DesignationAdd'])->name('designation.add');

});
Route::group(['middleware'=>['is_employee']] , function(){

    Route::get('visitor/list', [EmployeeController::class, 'Visiroelist'])->name('visitor.list');
    Route::get('all/visitor/list', [EmployeeController::class, 'AllVisiroelist'])->name('all.visitor.list');
    Route::get('pending/visitor/list', [EmployeeController::class, 'PendingVisiroelist'])->name('pending.visitor.list');
    Route::get('history/visitor/list', [EmployeeController::class, 'HistoryVisiroelist'])->name('history.visitor.list');
    Route::get('parmanent/employee/list', [EmployeeController::class, 'ParmanentEmployeeList'])->name('parmanent.employee.list');
    Route::get('approve/visitor/list', [EmployeeController::class, 'ApproveVisiroelist'])->name('approve.visitor.list');
    Route::get('rejected/visitor/list', [EmployeeController::class, 'RejectedVisiroelist'])->name('rejected.visitor.list');
    Route::get('/visitor/add', [EmployeeController::class, 'VisitorAdd'])->name('visitor.add');
    Route::post('/visitor/store', [EmployeeController::class, 'VisitorStore'])->name('visitor.store');
    Route::get('/view/visitor/{id}', [EmployeeController::class, 'VisitorView'])->name('visitor.view');
    Route::get('/details/visitor/{id}', [EmployeeController::class, 'detailsView'])->name('visitor.details');
    Route::get('/details/recep/visitor/{id}', [EmployeeController::class, 'detailsrecepView'])->name('visitor.details');
    Route::get('/approve/visitor/{id}', [EmployeeController::class, 'VisitorApprove'])->name('visitor.approve');
    Route::get('/reject/visitor/{id}', [EmployeeController::class, 'VisitorReject'])->name('visitor.reject');
    Route::get('/visitor/checkout/{id}', [EmployeeController::class, 'VisitorCheckOut'])->name('visitor.checkout');
    Route::get('/pending/application/{id}', [EmployeeController::class, 'pendingapplication'])->name('pending.application');
    Route::get('/employee-list/{id}', [EmployeeController::class, 'Employeelistget'])->name('emp.list.get');
    Route::get('/getvisitor-list/{id}', [EmployeeController::class, 'getvisitor'])->name('visitor.list.get');
    // Route::post('/employee/branch/add', [EmployeeController::class, 'BranchemployeeAdd'])->name('branch.employee.add');

});

