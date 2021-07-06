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
        $category_data = Category::all();
        return view('setups.category.categorylist',compact('category_data'));
    }

    public function category_create(){
        return view('setups.category.categorycreate');
    }
    public function category_store(Request $request){
       
            $request->validate([
                'category_name' => 'required|unique:category,category_name'
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
            'category_name' => "required|unique:category,category_name,$id"
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

 //####################Company CRUD###################################################################################
    public function company_list(){
        $company_data = Company::all();
        return view('setups.company.companylist',compact('company_data'));
    }

    public function company_create(){
        return view('setups.company.companycreate');
    }
    public function company_store(Request $request){
       
            $request->validate([
                'company_name' => 'required|unique:company,company_name'
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
            'company_name' => "required|unique:company,company_name,$id"
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

    //####################Customer CRUD#################################################################################

    public function customer_list(){
        $customer_data = Customer::join('company','customer.company_id','=','company.id')
						->join('unit','customer.unit_id','=','unit.id')
						->join('country','customer.country_id','=','country.id')
						->select('company.*','unit.*','country.*','customer.*')
						->get();
        return view('setups.customer.customerlist',compact('customer_data'));
    }

    public function customer_create(){
		$company = Company::all();
		$unit = Unit::all();
		$country = Country::orderBy('country_name', 'ASC')->get();
        return view('setups.customer.customercreate',['company' => $company, 'unit' => $unit, 'country' => $country]);
    }

    public function customer_store(Request $customer_rec){
        $customer_rec->validate([
                    'customer_name' => 'required|unique:customer,customer_name'
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
		$company = Company::all();
		$unit = Unit::all();
		$country = Country::orderBy('country_name', 'ASC')->get();
        $customer = Customer::find($id);
        return view('setups.customer.customerupdate',['company' => $company, 'unit' => $unit, 'country' => $country ,'customer' => $customer]);
    }

    public function customer_update(Request $update, $id){
        
        $update->validate([
            'customer_name' => "required|unique:customer,customer_name,$id"
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
    //####################Unit CRUD###################################################################################

    public function unit_list(){
        $unit_data = Unit::join('company','unit.company_id','=','company.id')
                    ->select('company.*','unit.*')
                    ->get();
        return view('setups.unit.unitlist',compact('unit_data'));
    }

    public function unit_create(){
        $company =  Company::all();
        return view('setups.unit.unitcreate',compact('company'));
    }
    public function unit_store(Request $request){
        $request->validate([
            'unit_name' => 'required|unique:unit,unit_name'
               
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
            'unit_name' => "required|unique:unit,unit_name,$id"
               
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

     //####################Division CRUD###################################################################################
     
     public function division_list(){
         $division_data= Division::join('company','division.company_id','=','company.id')
                        ->join('unit','division.unit_id','=','unit.id')
                        ->select('company.*','unit.*','division.*')
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
             
                'division_name' => 'required|unique:division,division_name',
                'division_code' => 'required|unique:division,division_code'
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
              
            'division_name' => "required|unique:division,division_name,$id",
            'division_code' => "required|unique:division,division_code,$id"
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

     //############Country CRUD #################################################################################

     public function country_list(){
        $country_data = Country::join('company','country.company_id','=','company.id')
						->join('unit','country.unit_id','=','unit.id')
						->select('company.*','unit.*','country.*')
						->get();

        // print_r($country_data);
         //exit;               
        return view('setups.country.countrylist',compact('country_data'));
    }

    public function country_create(){
        $company = Company::all();
        $unit = Unit::all();
        return view('setups.country.countrycreate',['company' => $company, 'unit'=> $unit]);
    }
    public function country_store(Request $request){
       
            $request->validate([
                'country_name' => 'required|unique:country,country_name'
            ]);
			$country_save=new Country;
			$country_save->company_id = $request->get('company_name');
			$country_save->unit_id = $request->get('unit_name');
			$country_save->country_name = $request->get('country_name');
            $country_save->save();
            return redirect('countrylist');
    

    }
    public function country_edit($id){
		$company = Company::all();
		$unit = Unit::all();
        $country= Country::findorfail($id);
        return view('setups.country.countryupdate',['company' => $company, 'unit'=> $unit, 'country' => $country]);
    }
    public function country_update(Request $request,$id){
        $request->validate([
            'country_name' => "required|unique:country,country_name,$id"
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


    //####################Project CRUD###################################################################################
    public function project_list(){
        $project_data = Project::join('company','project.company_id','=','company.id')
                      ->join('unit', 'project.unit_id','=','unit.id')
                      ->join('country','project.country_id','=','country.id')
                      ->join('customer','project.customer_id','=','customer.id')
                      ->select('company.*','unit.*','country.*','customer.*','project.*')
                      ->get();
        return view('setups.project.projectlist',compact('project_data'));
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
                'project_name' => 'required|unique:project,project_name',
                'project_code' => 'required|unique:project,project_code',
                'project_start_date' =>'required'
				
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
		$company = Company::all();
		$unit = Unit::all();
		$country = Country::orderBy('country_name','ASC')->get();
		$customer = Customer::all();
        $project_edit= Project::find($id);
        return view('setups.project.projectupdate',['company' => $company, 'unit' => $unit, 'country' => $country ,'customer' => $customer,'project_edit' => $project_edit]);
    }
    public function project_update(Request $request,$id){
         $request->validate([
                'project_name' => "required|unique:project,project_name,$id",
                'project_code' => "required|unique:project,project_code,$id",
                'project_end_date' =>'required'
				
            ]);
         
        $project_add = Project::where('id','=',$id);
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
    public function project_destroy($id){
        $project_destroy= Project::find($id);
        $project_destroy->delete();
        return redirect('projectlist');
    }
}
