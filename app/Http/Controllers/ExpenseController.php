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
                      ->orderBy('ex_expense.id', 'DESC')
                      ->get();
      return view('expense.expenselist',compact('expense_data'));
  }
  public function expense_show($id){
      
            $company = Company::all();
            $unit = Unit::all();
            $customer = Customer::all();
            $country = Country::all();
            $project = Project::all();
            $category = Category::all();
            $expense = Expense::findorfail($id);
            return view('expense.expenseview',['company' => $company , 'unit' => $unit , 'customer' => $customer , 'country' => $country , 'project' => $project, 'category' => $category,'expense' => $expense]);    
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
            'company_name' => 'required|not_in:0',
            'unit_name' => 'required|not_in:0',
            'country_name' =>'required|not_in:0',
            'customer_name' => 'required|not_in:0',
            'project_name' => 'required|not_in:0',
            'expense_date' => 'required',
            'category_name' => 'required|not_in:0',
            'expense_amount' => 'required'
        ],[
            'company_name.required' => '*Company field cannot be empty.',
            'unit_name.required' => '*Unit field cannot be empty.',
            'country_name.required' => '*Country field cannot be empty.',
            'customer_name.required' => '*Customer field cannot be empty.',
            'project_name.required' => '*Project field cannot be empty.',
            'expense_date.required' => '*Expense Date field cannot be empty.',
            'category_name.required' => '*Expense Name field cannot be empty.',
            'expense_amount.required' => '*Expense Amount field cannot be empty.',
        ]);
      

        $expense_add = new Expense();
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
        $expense = Expense::findorfail($id);
        $company = Company::all();
        $unit = Unit::where(['company_id' =>$expense->company_id])->get();
        $country = Country::where(['unit_id' =>$expense->unit_id])->get();
        $customer = Customer::where(['country_id' => $expense->country_id])->get(); 
        $project = Project::where(['customer_id' => $expense->customer_id])->get();
        $category = Category::all();
        
        return view('expense.expenseupdate',['company' => $company , 'unit' => $unit , 'customer' => $customer , 'country' => $country , 'project' => $project, 'category' => $category,'expense' => $expense]);     
  }

  public function expense_update(Request $request,$id){
      $request->validate([
        'company_name' => 'required|not_in:0',
        'unit_name' => 'required|not_in:0',
        'country_name' =>'required|not_in:0',
        'customer_name' => 'required|not_in:0',
        'project_name' => 'required|not_in:0',
        'expense_date' => 'required',
        'category_name' => 'required|not_in:0',
        'expense_amount' => 'required'
      ],[
        'company_name.required' => '*Company field cannot be empty.',
        'unit_name.required' => '*Unit field cannot be empty.',
        'country_name.required' => '*Country field cannot be empty.',
        'customer_name.required' => '*Customer field cannot be empty.',
        'project_name.required' => '*Project field cannot be empty.',
        'expense_date.required' => '*Expense Date field cannot be empty.',
        'category_name.required' => '*Expense Name field cannot be empty.',
        'expense_amount.required' => '*Expense Amount field cannot be empty.',
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
        return redirect('/expenselist');
  }

  public function expenseproject_display(Request $request){
      $post = $request->all();
      $project = Project::where(['customer_id' => $post['customer']])->get();
      echo '<option selected disabled>'."---Select---".'</option>';
      foreach($project as $projects){
        
            echo '<option value="'.$projects->id.'">'.$projects->project_name.'</option>';
      }
  }
  public function expenseunit_display(Request $request){
      $post = $request->all();
      $unit = Unit::where(['company_id' => $post['company']])->get();
      echo '<option selected disabled>'."---Select---".'</option>';
      foreach ($unit as $unit) {
          echo '<option value="'.$unit->id.'">'.$unit->unit_name.'</option>';
      }
  }
  public function expensecountry_display(Request $request){ //for country
      $post = $request->all();
      $country = Country::where(['unit_id' => $post['unit_name']])->get();
      echo '<option selected disabled>'."---Select---".'</option>';
      foreach ($country as $countrys) {
          echo '<option value="'.$countrys->id.'">'.$countrys->country_name.'</option>';
      }
  }
  
  public function expensecustomer_display(Request $request){
      $post = $request->all();
      $customer = Customer::where(['country_id' => $post['country']])->get();
      echo '<option selected disabled>'."---Select---".'</option>';
      foreach($customer as $customers){
          echo '<option value= "'.$customers->id.'">'.$customers->customer_name.'</option>';
      }
  }
  //#################### End of Expense CRUD###################################################################################
}
