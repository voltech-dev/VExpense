<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Customer;
use App\Models\Unit;
use App\Models\Division;
use App\Models\Country;
use App\Models\Category;
use App\Models\Project;
use DB;

class SetupController extends Controller
{
    //####################Category CRUD###################################################################################
    public function category_list(){
        $category_data = Category::orderBy('id', 'DESC')->get();
        return view('setups.category.categorylist',compact('category_data'));
    }
    public function category_show($id){
        $category_view= Category::find($id);
        return view('setups.category.categoryview',compact('category_view'));
    }

    public function category_create(){
        return view('setups.category.categorycreate');
    }
    public function category_store(Request $request){
       
            $request->validate([
                'category_name' => 'required|unique:ex_category,category_name'
            ],[
                'category_name.required' => '* Category Name field cannot be empty.',
            ]);
         
            Category::create($request->all());
            return redirect('categorylist'); 

    }
    public function category_edit($id){
        $category_edit= Category::find($id);
        return view('setups.category.categoryupdate',compact('category_edit'));
    }
    public function category_update(Request $request,$id){
        $request->validate([
            'category_name' => "required|unique:ex_category,category_name,$id"
        ],[
            'category_name.required' => '* Category Name field cannot be empty.',
        ]);
       
        $update_category = Category::find($id);
        $update_category->category_name = $request->get('category_name');
        $update_category->update();
        return redirect('categorylist');

    }
    public function category_destroy($id){
        $category_destroy= Category::find($id);
        $category_destroy->delete();
        return redirect('categorylist');
    }
    //#################### End of Category CRUD###################################################################################

    //####################Company CRUD###################################################################################
    public function company_list(){
        $company_data = Company::orderBy('id', 'DESC')->get();
        return view('setups.company.companylist',compact('company_data'));
    }
    public function company_show($id){
        $company_view = Company::find($id)->first();
        return view('setups.company.companyview',compact('company_view'));
    }

    public function company_create(){
        return view('setups.company.companycreate');
    }
    public function company_store(Request $request){
       
            $request->validate([
                'company_name' => 'required|unique:ex_company,company_name'
            ],[
                'company_name.required' => '* Company Name field cannot be empty.',
            ]);
         
            Company::create($request->all());
            return redirect('companylist');
    }
    public function company_edit($id){
        $company_edit= Company::find($id);
        return view('setups.company.companyupdate',compact('company_edit'));
    }
    public function company_update(Request $request,$id){
            $request->validate([
                'company_name' => "required|unique:ex_company,company_name,$id"
            ],[
                'company_name.required' => '* Company Name field cannot be empty.',
            ]);
        
            $update_company = Company::find($id);
            $update_company->company_name = $request->get('company_name');
            $update_company->update();
            return redirect('companylist');
    }
    public function company_destroy($id){
                $company_destroy= Company::find($id);
                $company_destroy->delete();
                return redirect('companylist');
    }
     //#################### End of Company CRUD###################################################################################

    //####################Customer CRUD#################################################################################

    public function customer_list(){
        $customer_data = Customer::join('ex_company','ex_customer.company_id','=','ex_company.id')
						->join('ex_unit','ex_customer.unit_id','=','ex_unit.id')
						->join('ex_country','ex_customer.country_id','=','ex_country.id')
						->select('ex_company.*','ex_unit.*','ex_country.*','ex_customer.*')
                        ->orderBy('ex_customer.id', 'DESC')
						->get();
        return view('setups.customer.customerlist',compact('customer_data'));
    }
    public function customer_show($id){
		$company = Company::all();
		$unit = Unit::all();
		$country = Country::all();
        $customer = Customer::find($id);
        return view('setups.customer.customerview',['company' => $company, 'unit' => $unit, 'country' => $country ,'customer' => $customer]);
    }

    public function customer_create(){
		$company = Company::all();
		$unit = Unit::all();
		$country = Country::orderBy('country_name', 'ASC')->get();
        return view('setups.customer.customercreate',['company' => $company, 'unit' => $unit, 'country' => $country]);
    }

    public function customer_store(Request $customer_rec){
        $customer_rec->validate([
            'company_name' => 'required',
            'unit_name' => 'required',
            'country_name' => 'required',
            'customer_name' => 'required|unique:ex_customer,customer_name'
        ],[
            'company_name.required' => '* Company field cannot be empty.',
            'unit_name.required' => '* Unit field cannot be empty.',
            'country_name.required' => '* Country field cannot be empty.',
            'customer_name.required' => '* Customer Name field cannot be empty.',
        ]);
        $customer_add = new Customer;
		$customer_add->company_id = $customer_rec->get('company_name');
		$customer_add->unit_id = $customer_rec->get('unit_name');
		$customer_add->country_id = $customer_rec->get('country_name');
		$customer_add->customer_name = $customer_rec->get('customer_name');
		$customer_add->save();
        return redirect('customerlist');
    }

    public function customer_edit($id){
        $customer = Customer::findorfail($id);
		$company = Company::all();
		$unit = Unit::where(['company_id' => $customer->company_id])->get();
		$country = Country::where(['unit_id' => $customer->unit_id])->get();
       
        return view('setups.customer.customerupdate',['company' => $company, 'unit' => $unit, 'country' => $country ,'customer' => $customer]);
    }

    public function customer_update(Request $update, $id){
        
        $update->validate([
                'company_name' => 'required',
                'unit_name' => 'required',
                'country_name' => 'required',
                'customer_name' => "required|unique:ex_customer,customer_name,$id"
            ],[
                'company_name.required' => '* Company field cannot be empty.',
                'unit_name.required' => '* Unit field cannot be empty.',
                'country_name.required' => '* Country field cannot be empty.',
                'customer_name.required' => '* Customer Name field cannot be empty.',
            ]);
        $customer_update = Customer::where('id','=',$id)->first();

		$customer_update->company_id = $update->get('company_name');
		$customer_update->unit_id = $update->get('unit_name');
		$customer_update->country_id = $update->get('country_name');
		$customer_update->customer_name = $update->get('customer_name');
	    $customer_update->update();
        return redirect('customerlist');

    }                       

    public function customer_destroy($id){
        $destroy_customer = Customer::find($id);
        $destroy_customer->delete();
        return redirect('customerlist');
    }
    
    public function country_display(Request $request){ //for country
        $post = $request->all();
        $country = Country::where(['unit_id' => $post['unit_name']])->get();
        echo '<option selected disabled>'."---Select---".'</option>';
        foreach ($country as $countrys) {
            echo '<option value="'.$countrys->id.'">'.$countrys->country_name.'</option>';
        }
    }
    //####################  End of Customer CRUD#################################################################################

    //####################Unit CRUD###################################################################################

    public function unit_list(){
        $unit_data = Unit::join('ex_company','ex_unit.company_id','=','ex_company.id')
                    ->select('ex_company.*','ex_unit.*')->orderBy('ex_unit.id', 'DESC')
                    ->get();
        return view('setups.unit.unitlist',compact('unit_data'));
    }
    public function unit_show($id){
        $company = Company::all();
		$unit = Unit::findorfail($id);
        return view('setups.unit.unitview',['company' => $company, 'unit'=> $unit]);
    }

    public function unit_create(){
        $company =  Company::all();
        return view('setups.unit.unitcreate',compact('company'));
    }
    public function unit_store(Request $request){
        $request->validate([
            'company_name' => 'required',
            'unit_name' => 'required|unique:ex_unit,unit_name'
               
        ],[
            'company_name.required' => '* Company field cannot be empty.',
            'unit_name.required' => '* Unit Name field cannot be empty.',
        ]);
        $unit = new Unit;
        $unit->company_id = $request->get('company_name');
        $unit->unit_name = $request->get('unit_name');
        $unit->save();
        return redirect('unitlist');
    }

    public function unit_edit($id){
        $company = Company::all();
        $unit = Unit::find($id);
        return view('setups.unit.unitupdate',['company' => $company, 'unit' => $unit]);
    }

    public function unit_update(Request $request, $id){
        $request->validate([
            'company_name' => 'required',
            'unit_name' => "required|unique:ex_unit,unit_name,$id"
               
        ],[
            'company_name.required' => '* Company  field cannot be empty.',
            'unit_name.required' => '* Unit Name field cannot be empty.',
        ]);
        $unit = Unit::where('id','=',$id)->first();
        $unit->company_id = $request->get('company_name');
        $unit->unit_name = $request->get('unit_name');
        $unit->update();
        return redirect('unitlist');
    }
    public function unit_destroy($id){
        $destroy = Unit::find($id);
        $destroy->delete();
        return redirect('unitlist');
    }

    
    //#################### End of Unit CRUD###################################################################################


    //####################Division CRUD###################################################################################
     
     public function division_list(){
         $division_data= Division::join('ex_company','ex_division.company_id','=','ex_company.id')
                        ->join('ex_unit','ex_division.unit_id','=','ex_unit.id')
                        ->select('ex_company.*','ex_unit.*','ex_division.*')
                        ->orderBy('ex_division.id', 'DESC')
                        ->get();
         return view('setups.division.divisionlist',compact('division_data'));

     }

     public function division_create(){
        $company = Company::all();
         $unit = Unit::all();
         return view('setups.division.divisioncreate',['company' => $company , 'unit' => $unit]);
     }

     public function division_store(Request $division){
            $division->validate([
             
                'division_name' => 'required|unique:ex_division,division_name',
                'division_code' => 'required|unique:ex_division,division_code'
            ]);    

           $div = new Division;
           $div->company_id = $division->get('company_name');
           $div->unit_id = $division->get('unit_name');
           $div->division_name = $division->get('division_name');
           $div->division_code = $division->get('division_code');

              $div->save();
                return redirect('divisionlist');
     }

     public function division_edit($id){
         $company = Company::all();
         $unit = Unit::all();
         $division = Division::findorfail($id);
         return view('setups.division.divisionupdate',['company' => $company, 'unit' => $unit  ,'division' => $division]);
     }

     public function division_update(Request $request, $id){

        $request->validate([
              
            'division_name' => "required|unique:ex_division,division_name,$id",
            'division_code' => "required|unique:ex_division,division_code,$id"
        ]); 
            $division_update = Division::where('id','=',$id)->first();
            $division_update->company_id = $request->get('company_name');
            $division_update->unit_id = $request->get('unit_name');
            $division_update->division_name= $request->get('division_name');
            $division_update->division_code= $request->get('division_code');
            $division_update->update();
            return redirect('divisionlist');
     }

     public function division_destroy($id){
         $destroy_division = Division::find($id);
         $destroy_division->delete();
         return redirect('divisionlist');
     }
      //#################### End of Division CRUD###################################################################################

     //############Country CRUD ########################################################################################

     public function country_list(){
        $country_data = Country::join('ex_company','ex_country.company_id','=','ex_company.id')
						->join('ex_unit','ex_country.unit_id','=','ex_unit.id')
						->select('ex_company.*','ex_unit.*','ex_country.*')
                        ->orderBy('ex_country.id', 'DESC')
						->get();

        // print_r($country_data);
         //exit;               
        return view('setups.country.countrylist',compact('country_data'));
    }
    public function country_show($id){
        $company = Company::all();
		$unit = Unit::all();
        $country_view = Country::findorfail($id);
        return view('setups.country.countryview',['company' => $company, 'unit'=> $unit, 'country_view' => $country_view]);
    }


    public function country_create(){
        $company = Company::all();
        $unit = Unit::all();
        return view('setups.country.countrycreate',['company' => $company, 'unit'=> $unit]);
    }
    public function country_store(Request $request){
       
            $request->validate([
                'company_name' => 'required',
                'unit_name' => 'required',
                'country_name' => 'required|unique:ex_country,country_name'
            ],[
                'company_name.required' => '* Company field cannot be empty.',
                'unit_name.required' => '* Unit field cannot be empty.',
                'country_name.required' => '* Country field cannot be empty.',    
            ]);
			$country_save=new Country;
			$country_save->company_id = $request->get('company_name');
			$country_save->unit_id = $request->get('unit_name');
			$country_save->country_name = $request->get('country_name');
            $country_save->save();
            return redirect('countrylist');
    }
    public function country_edit($id){
        $country= Country::findorfail($id);
		$company = Company::all();
		// $unit = Unit::where('company_id',$country->company_id);
        $unit = Unit::where(['company_id' => $country->company_id])->get();
        
        return view('setups.country.countryupdate',['company' => $company, 'unit'=> $unit, 'country' => $country]);
    }
    public function country_update(Request $request,$id){
        $request->validate([
            'company_name' => 'required',
            'unit_name' => 'required',
            'country_name' => "required|unique:ex_country,country_name,$id"
        ],[
            'company_name.required' => '* Company field cannot be empty.',
            'unit_name.required' => '* Unit field cannot be empty.',
            'country_name.required' => '* Country field cannot be empty.',
            
        ]);
       
        $update_country = Country::where('id','=',$id)->first();
		$update_country->company_id = $request->get('company_name');
		$update_country->unit_id = $request->get('unit_name');
        $update_country->country_name = $request->get('country_name');
        $update_country->update();
        return redirect('countrylist');

    }
    public function country_destroy($id){
        $country_destroy= Country::find($id);
        $country_destroy->delete();
        return redirect('countrylist');
    }

    public function unit_display(Request $request){
        $post = $request->all();
        $unit = Unit::where(['company_id' => $post['company']])->get();
        echo '<option selected disabled>'."---Select---".'</option>';
        foreach($unit as $unit){
            echo '<option value="'.$unit->id.'">'.$unit->unit_name.'</option>';
        }
        
    }
    
    //############ End of Country CRUD ##########################################################################################

    //####################Project CRUD###################################################################################
    public function project_list(){
        $project_data = Project::join('ex_company','ex_project.company_id','=','ex_company.id')
                      ->join('ex_unit', 'ex_project.unit_id','=','ex_unit.id')
                      ->join('ex_country','ex_project.country_id','=','ex_country.id')
                      ->join('ex_customer','ex_project.customer_id','=','ex_customer.id')
                      ->select('ex_company.*','ex_unit.*','ex_country.*','ex_customer.*','ex_project.*')
                      ->orderBy('ex_project.id', 'DESC')
                      ->get();
        return view('setups.project.projectlist',compact('project_data'));
    }

    public function project_show($id){
        $company = Company::all();
		$unit = Unit::all();
        $country = Country::all();
		$customer = Customer::all();
        $project = Project::findorfail($id);
        return view('setups.project.projectview',['company' => $company, 'unit'=> $unit, 'country' => $country, 'customer' => $customer, 'project' => $project]);
    }
    public function project_create(){
		$company = Company::all();
		$unit = Unit::all();
		$customer = Customer::all();
		$country =Country::orderBy('country_name', 'ASC')->get();
        return view('setups.project.projectcreate',['company' => $company, 'unit' => $unit, 'country' => $country ,'customer' => $customer]);
    }
    public function project_store(Request $request){
       
            $request->validate([
                'company_name' => 'required',
                'unit_name' => 'required',
                'country_name' => 'required',
                'customer_name' => 'required',
                'project_name' => 'required|unique:ex_project,project_name',
                'project_code' => 'required|unique:ex_project,project_code',
                'project_start_date' =>'required',
				
            ] ,[
                'company_name.required' => '* Company field  cannot be empty.',
                'unit_name.required' => '* Unit field cannot be empty.',
                'country_name.required' => '* Country field cannot be empty.',
                'customer_name.required' => '* Customer Name field cannot be empty.',
                'project_name.required' => '* Project Name field cannot be empty.',
                'project_code.required' => '* Project Code  field cannot be empty.',
                'project_start_date.required' => '* Project Start Date  field cannot be empty.',
            ]);
        $project_add = new Project;
		$project_add->company_id = $request->get('company_name');
		$project_add->unit_id = $request->get('unit_name');
		$project_add->country_id = $request->get('country_name');
		$project_add->customer_id = $request->get('customer_name');
		$project_add->project_name = $request->get('project_name');
		$project_add->project_code = $request->get('project_code');
		$project_add->project_start_date = $request->get('project_start_date');
		$project_add->project_end_date = $request->get('project_end_date');
		$project_add->save();
        return redirect('projectlist');
    
    }
    public function project_edit($id){
        $project_edit= Project::findorfail($id);
		$company = Company::all();
		$unit = Unit::where(['company_id' => $project_edit->company_id])->get();
		$country = Country::where(['unit_id' => $project_edit->unit_id])->get();
		$customer = Customer::where(['country_id' => $project_edit->country_id])->get();
        return view('setups.project.projectupdate',['company' => $company, 'unit' => $unit, 'country' => $country ,'customer' => $customer,'project_edit' => $project_edit]);
    }
    public function project_update(Request $request,$id){
         $request->validate([
                'company_name' => 'required',
                'unit_name' => 'required',
                'country_name' => 'required',
                'customer_name' => 'required',
                'project_name' => "required|unique:ex_project,project_name,$id",
                'project_code' => "required|unique:ex_project,project_code,$id",
                'project_start_date' =>'required',
                'project_end_date' =>'required'
				
            ],[
                'company_name.required' => '* Company field  cannot be empty.',
                'unit_name.required' => '* Unit field cannot be empty.',
                'country_name.required' => '* Country field cannot be empty.',
                'customer_name.required' => '* Customer Name field cannot be empty.',
                'project_name.required' => '* Project Name field cannot be empty.',
                'project_code.required' => '* Project Code  field cannot be empty.',
                'project_start_date.required' => '* Project Start Date  field cannot be empty.',
                'project_end_date.required' => '* Project End Date  field cannot be empty.',
            ]);
         
        $project_add = Project::where('id','=',$id)->first();
		$project_add->company_id = $request->get('company_name');
		$project_add->unit_id = $request->get('unit_name');
		$project_add->country_id = $request->get('country_name');
		$project_add->customer_id = $request->get('customer_name');
		$project_add->project_name = $request->get('project_name');
		$project_add->project_code = $request->get('project_code');
		$project_add->project_start_date = $request->get('project_start_date');
		$project_add->project_end_date = $request->get('project_end_date');
		$project_add->update();
            return redirect('projectlist');

    }
    public function project_destroy($id){
        $project_destroy= Project::find($id);
        $project_destroy->delete();
        return redirect('projectlist');
    }
    public function customer_display(Request $request){
        $post = $request->all();
        $customer = Customer::where(['country_id' => $post['country']])->get();
        echo '<option selected disabled>'."---Select---".'</option>';
        foreach($customer as $customers){
            echo '<option value= "'.$customers->id.'">'.$customers->customer_name.'</option>';
        }
    }
  //############### End of Project CRUD######################################################################################  
}
