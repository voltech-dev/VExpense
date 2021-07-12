@extends('layouts.main')
@section('header')

<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Add New Project</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{url('projectlist')}}">Project List</a>
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
    {{-- <strong>Whoops!</strong> There were some problems with your input.<br><br> --}}
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
                            <form action="{{ url('update-project',$project_edit->id) }}" method="POST">
                                @csrf
								 @method('PUT') 
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Company</label>
                                    <div class="col-sm-3">
                                        <select class="form-control form-control-sm" name="company_name" id="company_name_id">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($company as $companys)
                                                    <option value="{{$companys->id}}"
														{{$companys->id == $project_edit->company_id ? 'selected' : ''}}>
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
													{{$units->id == $project_edit->unit_id ? 'selected' : ''}}>
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
													{{$countrys->id == $project_edit->country_id ? 'selected' : ''}}>
													{{$countrys->country_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Customer</label>
                                    <div class="col-sm-3">
                                      
												<select class="form-control form-control-sm" name="customer_name" id="customer_name_id">
                                                    <option selected disable>---Select---</option>
                                                     @foreach($customer as $customers)
                                                    <option value="{{$customers->id}}"
													{{$customers->id == $project_edit->customer_id ? 'selected' : ''}}>
													{{$customers->customer_name}}</option>
                                                    @endforeach
                                                </select>
                                    </div>
                                </div>
								
								 <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Project Name</label>
                                    <div class="col-sm-3">
                                       <input type="text" class="form-control form-control-sm" name="project_name"
                                                id="project_name" value="{{$project_edit->project_name}}" autocomplete="off" placeholder="Enter Project Name">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Project Code</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" name="project_code" autocomplete="off" value="{{$project_edit->project_code}}"
                                                id="project_code" placeholder="Enter Project Code">
                                    </div>
                                </div>
								<div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm"> Project Start Date</label>
                                    <div class="col-sm-3">
                                       <input type="date" class="form-control form-control-sm" name="project_start_date" autocomplete="off" value="{{$project_edit->project_start_date}}"
                                                id="project_start_date" placeholder="Enter Project Start Date">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Project End Date </label>
                                    <div class="col-sm-3">
                                        <input type="date" class="form-control form-control-sm" name="project_end_date" autocomplete="off" value="{{$project_edit->project_end_date}}"
                                                id="project_end_date" placeholder="Enter Project End Date">
                                    </div>
                                </div>
                             
                              
                           
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-sm btn-square">Submit</button>
                                </div>
                        </div>
                        </form>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                            <a class="btn btn-primary btn-sm btn-square" href="{{ url('projectlist') }}">
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
     
       $('#country_name_id').change(function(event){
           var country_name = $('#country_name_id').val();
          // alert('hiiii');

          $.ajax({
              url : "{{url('/customer_display')}}",
              type : 'GET',
              data : {country : country_name },
              success : function(data){
                  $('#customer_name_id').html(data);
              },
              error : function(exception){
                  alert('error');
              }
          });
       })
    });   
</script>
@endpush


