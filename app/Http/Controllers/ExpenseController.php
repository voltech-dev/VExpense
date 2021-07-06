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
      $expense_data = Expense::join('ex_company','ex_expense.company_id','=','ex_company.id')
                      ->join('ex_unit', 'ex_expense.unit_id','=','ex_unit.id')
                      ->join('ex_country','ex_expense.country_id','=','ex_country.id')
                      ->join('ex_customer','ex_expense.customer_id','=','ex_customer.id')
                      ->join('ex_project','ex_expense.project_id','=','ex_project.id')
                      ->join('ex_category','ex_expense.category_id','=','ex_category.id')
                      ->select('ex_company.*','ex_unit.*','ex_country.*','ex_customer.*','ex_project.*','ex_category.*','ex_expense.*')
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
  
          'expense_amount' => 'required|unique:ex_expense,expense_amount'
        ]);

        $expense_add = new Expense;
        $expense_add->company_id = $request->get('company_name');
        $expense_add->unit_id = $request->get('unit_name');
        $expense_add->country_id = $request->get('country_name');
        $expense_add->customer_id = $request->get('customer_name');
        $expense_add->project_id = $request->get('project_name');
        $expense_add->expense_date = $request->get('expense_date');
        $expense_add->category_id = $request->get('category_name');
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
        
        'expense_amount' => "required|unique:ex_expense,expense_amount,$id"
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
       // exit;
        $expense_delete->delete();
        return redirect('/expenselist');
  }

  //####################Expense CRUD###################################################################################
}
