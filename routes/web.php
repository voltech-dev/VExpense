<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SetupController;
use App\Http\Controllers\ExpenseController;
/* import & export controller */
/*use App\Http\Controllers\MyController;*/
/* end of import & export controller */
Route::get('logout', function() {
   //  $exitCode = Artisan::call('cache:clear');
    // return what you want
});


/* Expense routes */
//####################Expense CRUD######################################################
Route::get('expenselist',[ExpenseController::class,'expense_list']);
Route::get('expensecreate',[ExpenseController::class,'expense_create']);
Route::post('save-expense',[ExpenseController::class,'expense_store']);
Route::get('expenseedit/{id}',[ExpenseController::class,'expense_edit']);
Route::put('update-expense/{id}',[ExpenseController::class,'expense_update']);
Route::delete('delete-expense/{id}',[ExpenseController::class,'expense_destroy']);

/* setup routes */
//####################Company CRUD######################################################
Route::get('companylist',[SetupController::class,'company_list']);
Route::get('companycreate',[SetupController::class,'company_create']);
Route::post('save-company',[SetupController::class,'company_store']);
Route::get('companyedit/{id}',[SetupController::class,'company_edit']);
Route::put('update-company/{id}',[SetupController::class,'company_update']);
Route::delete('companydelete/{id}',[SetupController::class,'company_destroy']);

 //####################Category CRUD######################################################
Route::get('categorylist',[SetupController::class,'category_list']);
Route::get('categorycreate',[SetupController::class,'category_create']);
Route::post('save-category',[SetupController::class,'category_store']);
Route::get('categoryedit/{id}',[SetupController::class,'category_edit']);
Route::put('update-category/{id}',[SetupController::class,'category_update']);
Route::delete('categorydelete/{id}',[SetupController::class,'category_destroy']);
//####################Customer CRUD#######################################################
                     
Route::get('customerlist',[SetupController::class,'customer_list']);
Route::get('customercreate',[SetupController::class,'customer_create']);
Route::post('save-customer',[SetupController::class,'customer_store']);
Route::get('customeredit/{id}',[SetupController::class,'customer_edit']);
Route::put('update-customer/{id}',[SetupController::class,'customer_update']);
Route::delete('delete-customer/{id}',[SetupController::class,'customer_destroy']);

 //####################Unit CRUD#######################################################
 Route::get('unitlist',[SetupController::class,'unit_list']);
 Route::get('unitcreate',[SetupController::class,'unit_create']);
 Route::post('save-unit',[SetupController::class,'unit_store']);
 Route::get('unitedit/{id}',[SetupController::class,'unit_edit']);
 Route::put('update-unit/{id}',[SetupController::class,'unit_update']);
 Route::delete('delete-unit/{id}',[SetupController::class,'unit_destroy']);

//####################Division CRUD#######################################################

   Route::get('divisionlist',[SetupController::class,'division_list']);
   Route::get('divisioncreate',[SetupController::class,'division_create']);
   Route::post('save-division',[SetupController::class,'division_store']);
   Route::get('divisionedit/{id}',[SetupController::class,'division_edit']);
   Route::put('update-division/{id}',[SetupController::class,'division_update']);                          
   Route::delete('delete-division/{id}',[SetupController::class,'division_destroy']);

   //####################Country CRUD######################################################
Route::get('countrylist',[SetupController::class,'country_list']);
Route::get('countrycreate',[SetupController::class,'country_create']);
Route::post('save-country',[SetupController::class,'country_store']);
Route::get('countryedit/{id}',[SetupController::class,'country_edit']);
Route::put('update-country/{id}',[SetupController::class,'country_update']);
Route::delete('countrydelete/{id}',[SetupController::class,'country_destroy']);

 //####################Project CRUD######################################################
 Route::get('projectlist',[SetupController::class,'project_list']);
 Route::get('projectcreate',[SetupController::class,'project_create']);
 Route::post('save-project',[SetupController::class,'project_store']);
 Route::get('projectedit/{id}',[SetupController::class,'project_edit']);
 Route::put('update-project/{id}',[SetupController::class,'project_update']);
 Route::delete('projectdelete/{id}',[SetupController::class,'project_destroy']);

###################################### End of Setups ###############################


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
