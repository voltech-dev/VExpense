@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Customer</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('customerlist')}}">Customer</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
    </div>
</div>
<!-- end::page-header -->
@endsection

@section('content')
<!-- end::page-header -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if($errors->any())
	<div class="alert alert-danger">
		<ul>
	@foreach($errors->all() as $errors)
		<li>{{$errors}}</li>
	@endforeach
	</ul>
	</div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/update-customer',$customer->id)}}" method="POST">
                        @csrf
						@method('PUT')

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Company</label>
                            <div class="col-sm-3">
							<select class="form-control-md" name="company_name" id="company_name">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($company as $company)
                                                    <option value="{{$company->id}}"
													{{$company->id == $customer->company_id ?'selected' : ''}}>
													{{$company->company_name}}</option>
                                                    @endforeach
                                                </select>
                               
                            </div>
							<label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                                    <div class="col-sm-3">
                                        <select class="form-control-md" name="unit_name" id="unit_name">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($unit as $unit)
                                                    <option value="{{$unit->id}}"
													{{$unit->id == $customer->unit_id ?'selected' : ''}}>
													{{$unit->unit_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
						</div>
						<div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Country</label>
                            <div class="col-sm-3">
							<select class="form-control-md" name="country_name" id="country_name">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($country as $country)
                                                    <option value="{{$country->id}}"
														{{$country->id == $customer->country_id ?'selected' : ''}}>
														{{$country->country_name}}</option>
                                                    @endforeach
                                                </select>
                               
                            </div>
							<label class="col-sm-3 col-form-label col-form-label-sm">Customer Name</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" name="customer_name"
                                                id="customer_name" value="{{$customer->customer_name}}" placeholder="Enter Customer Name">
                                    </div>
						</div>
						<div class="form-group row">
                            <div class="col-sm-3">
                                <button type="submit" name="submit" id="submit"
                                    class="btn btn-success btn-square btn-sm">Add
                                    </button>
									<a class="btn btn-primary btn-sm btn-square" href="{{ url('customerlist') }}">
                                Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
