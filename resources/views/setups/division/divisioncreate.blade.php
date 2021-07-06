@extends('layouts.main')
@section('header')

<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Add New Division</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#"></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Division List</a>
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
                            <form action="{{ url('save-division') }}" method="POST">
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
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Division Name</label>
                                    <div class="col-sm-3">
                                       <input type="text" class="form-control form-control-sm" name="division_name"
                                                id="division_name" placeholder="Enter Division Name">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Division Code</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" name="division_code"
                                                id="division_code" placeholder="Enter Division Code">
                                    </div>
                                </div>
                             
                              
                           
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-sm btn-square">Submit</button>
                                </div>
                        </div>
                        </form>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                            <a class="btn btn-primary btn-sm btn-square" href="{{ url('divisionlist') }}">
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


