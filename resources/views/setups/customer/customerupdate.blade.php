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
							<select class="form-control form-control-sm" name="company_name" id="company_name_id">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($company as $companys)
                                                    <option value="{{$companys->id}}"
													{{$companys->id == $customer->company_id ?'selected' : ''}}>
													{{$companys->company_name}}</option>
                                                    @endforeach
                                                </select>
                               
                            </div>
							<label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" name="unit_name" id="unit_name_id">
                                                   <option selected disable>---Select---</option>
                                                     @foreach($unit as $units)
                                                    <option value="{{$units->id}}"
													{{$units->id == $customer->unit_id ?'selected' : ''}}>
													{{$units->unit_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
						</div>
						<div class="form-group row">
                            <label class="col-sm-3 col-form-label col-form-label-sm">Country</label>
                            <div class="col-sm-3">
							<select class="form-control form-control-sm" name="country_name" id="country_name_id">
                                                     <option selected disable>---Select---</option>
                                                     @foreach($country as $countrys)
                                                    <option value="{{$countrys->id}}"
														{{$countrys->id == $customer->country_id ?'selected' : ''}}>
														{{$countrys->country_name}}</option>
                                                    @endforeach 
                                                </select>
                               
                            </div>
							<label class="col-sm-3 col-form-label col-form-label-sm">Customer Name</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" name="customer_name"
                                                id="customer_name_id" autocomplete="off" value="{{$customer->customer_name}}" placeholder="Enter Customer Name">
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
{{-- This Ajax for interlinking  all the Set-up's --}}
@push('scripts')
<script type ="text/javascript">
    $(document).ready(function(){
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

       $('#unit_name_id').change(function(event){
            var unit_name = $('#unit_name_id').val();
          // alert(unit_name);
            $.ajax({
                url : "{{url('/unitdisplay')}}",
                type : 'GET',
                data : { unit_name : unit_name},
                success : function(data){
                    $('#country_name_id').html(data);
                },
                error : function(exception){
                    alert('error');
                }
            });
       });
     
    });
    
</script>
@endpush

