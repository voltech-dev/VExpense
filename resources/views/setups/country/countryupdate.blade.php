@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Country</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('countrylist')}}">Country List</a>
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
                    <form action="{{ url('/update-country',$country->id)}}" method="POST">
                        @csrf
						@method('PUT')

                        {{ csrf_field() }}

                      <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Company</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" name="company_name" id="company_name_id">
                                                    {{-- <option value="{{$country->id}}" selected>{{$country->country_name}}</option> --}}
                                                    <option disabled>---Select---</option>
                                                     @foreach($company as $company)
                                                    <option value="{{$company->id}}"
														{{$company->id == $country->company_id ? 'selected' : ''}}>
														{{$company->company_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" name="unit_name" id="unit_name_id">
                                            <option selected></option>
                                                    <option disabled>---Select---</option>
                                                     @foreach($unit as $units)
                                                    <option value="{{$units->id}}"
													{{$units->id == $country->unit_id ? 'selected' : ''}}>
													{{$units->unit_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Country </label>
                                    <div class="col-sm-3">
                                       <input type="text" class="form-control form-control-sm" name="country_name"
                                                id="country_name" autocomplete="off" value="{{$country->country_name}}" placeholder="Enter Country Name">
                                    </div>
                            <div class="col-sm-3">
                                <button type="submit" name="submit" id="submit"
                                    class="btn btn-success btn-square btn-sm">Add
                                    </button>
									<a class="btn btn-primary btn-sm btn-square" href="{{ url('countrylist') }}">
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
{{-- This Ajax for interlinking  all the Set-up's --}}
@push('scripts')
<script type="text/javascript">
$(document).ready(function(){   
     //alert("hiii");
    
    $('#company_name_id').change(function(event){
        var company_name =$("#company_name_id").val();
         //alert(company_name);

       $.ajax({
            url : "{{url('/companydisplay')}}",
            type: 'GET',
            data : {
                company : company_name
            },
            //console.log(data);
           // datatype : 'json',
            success : function(data){
              //  console.log(data);
                $('#unit_name_id').html(data);
                
            },
            error: function(exception){
                alert('error');
            }
        });
        });
    });
 //});

</script>
@endpush
