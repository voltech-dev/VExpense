@extends('layouts.main')
@section('header')

<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Add New Expense</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{url('expenselist')}}">Expense List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
    </div>
</div>
<!-- end::page-header -->
@endsection

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"></h6>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ url('save-expense') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Company</label>
                                    <div class="col-sm-3">
                                        <select class="form-control-md" name="company_name" id="company_name">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($company as $company)
                                                    <option value="{{$company->id}}">{{$company->company_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                                    <div class="col-sm-3">
                                        <select class="form-control-md" name="unit_name" id="unit_name">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($unit as $unit)
                                                    <option value="{{$unit->id}}">{{$unit->unit_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Customer</label>
                                    <div class="col-sm-3">
                                        <select class="form-control-md" name="customer_name" id="customer_name">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($customer as $customer)
                                                    <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Country</label>
                                    <div class="col-sm-3">
                                        <select class="form-control-md" name="country_name" id="country_name">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($country as $country)
                                                    <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                </div>
								
								 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Project</label>
                                    <div class="col-sm-3">
                                        <select class="form-control-md" name="project_name" id="project_name">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($project as $project)
                                                    <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Expense Date</label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control form-control-sm" name="expense_date"
                                                id="expense_date" placeholder="Enter Expense Date">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Expense Name</label>
                                    <div class="col-sm-3">
                                        <select class="form-control-md" name="category_name" id="category_name">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($category as $category)
                                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Expense Amount</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" name="expense_amount"
                                                id="expense_amount" placeholder="Enter Expense Amount">
                                    </div>
                                </div>
                             
                              
                           
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-sm btn-square">Submit</button>
                                </div>
                        </div>
                        </form>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                            <a class="btn btn-primary btn-sm btn-square" href="{{ url('expenselist') }}">
                                Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection


