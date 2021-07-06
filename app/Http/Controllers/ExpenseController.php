<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Unit;
use App\Models\Division;
use App\Models\Country;
use App\Models\Category;
use App\Models\Project;
use DB;

class ExpenseController extends Controller
{
  public function expense_list(){
      $expense_data = Expense::join('company','expense.company_id','=','company.id')
                      ->join('unit', 'expense.unit_id','=','unit.id')
                      ->join('country','expense.country_id','=','country.id')
                      ->join('customer','expense.customer_id','=','customer.id')
                      ->join('project','expense.project_id','=','project.id')
                      ->join('category','expense.category_id','=','category.id')
                      ->select('company.*','unit.*','country.*','customer.*','project.*','category.*','expense.*')
                      ->get();
      return view('expense.expenselist',compact('expense_data'));
  }

  public function expense_create(){
    $company = Company::all();
    $unit = Unit::all();
    $customer = Customer::all();
    $country = Country::orderBy('country_name', 'ASC')->get();
    $project = Project::all();
    $category = Category::all();
    return view('expense.expensecreate',['company' => $company , 'unit' => $unit , 'customer' => $customer , 'country' => $country , 'project' => $project,'category' => $category]);

  }

  public function expense_store(Request $request){
    $request->validate([
      
     
      'expense_amount' => 'required|unique:expense,expense_amount'
    ]);

    $expense_add = new Expense;
    $expense_add->company_id = $request->get('company_name');
    $expense_add->unit_id = $request->get('unit_name');
    $expense_add->country_id = $request->get('country_name');
    $expense_add->customer_id = $request->get('customer_name');
    $expense_add->project_id = $request->get('project_name');
    $expense_add->expense_date = $request->get('expense_date');
    $expense_add->category->id = $request->get('category_name');
    $expense_add->expense_amount = $request->get('expense_amount');
    $expense_add->save();
    return redirect('expenselist');
  }

  public function expense_edit($id){
    $company = Company::all();
    $unit = Unit::all();
    $customer = Customer::all();
    $country = Country::all();
    $project = Project::all();
    $category = Category::all();
    $expense = Expense::findorfail($id);
    return view('expense.expenseupdate',['company' => $company , 'unit' => $unit , 'customer' => $customer , 'country' => $country , 'project' => $project, 'category' => $category,'expense' => $expense]);
  
  }

  public function expense_update(Request $request,$id){
    $request->validate([
       'date' => 'required',
      'expense_amount' => "required|unique:expense,expense_amount,$id"
    ]);
    $expense_update =Expense::where('id','=',$id)->first();
    $expense_update->company_id = $request->get('company_name');
    $expense_update->unit_id = $request->get('unit_name');
    $expense_update->country_id = $request->get('country_name');
    $expense_update->customer_id = $request->get('customer_name');
    $expense_update->project_id = $request->get('project_name');
    $expense_update->expense_date = $request->get('expense_date');
    $expense_update->category_id = $request->get('category_name');
    $expense_update->expense_amount = $request->get('expense_amount');
    $expense_update->update();
    return redirect('expenselist');

  }

  public function expense_destroy($id){
    $expense_delete = Expense::findorfail($id);
    $expense_delete->delete();
    return redirect('expenselist');
  }
}
