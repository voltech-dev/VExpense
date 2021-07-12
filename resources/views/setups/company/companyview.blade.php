@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Company </h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Setup</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{url('companylist')}}">Company</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                    <form action="#" method="GET">
                        @csrf
					
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm" name="company_name"
                                    id="company_name" value="{{$company_view->company_name}}" readonly />
                            </div>
                            <div class="col-sm-3">
                                
									<a class="btn btn-primary btn-sm btn-square" href="{{ url('companylist') }}">
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

