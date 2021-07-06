@extends('layouts.admin')
@section('header')
<!-- begin::main-content -->
<!--<div class="main-content">-->
<!-- begin::page-header -->
<?php
$bu = DB::table('businessunits')->get();
$qua = DB::table('qualifications')->get();
$des = DB::table('designations')->get();
?>
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Add New Profile</h4>
        <div class="pull-right">
            <a class="btn btn-primary btn-square btn-sm" href="{{ route('adminms.index') }}"> Back</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">AMS</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Employee Profile</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create </li>
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

                            <form action="{{ route('adminms.store') }}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                <div data-label="" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label col-form-label-sm">Upload Employee
                                            Image</label>
                                        <div class="col-sm-3">
                                            <img id="blah" src="{{ asset('media/image/user/photo icon.png') }}" alt="your image"
                                                style="max-width:70%;height:70%; border-radius: 70px" />
                                            <input type='file' onchange="readURL(this);" style="margin-left: 7%;" name="file" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm">E.Code</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="ecode" class="form-control form-control-sm"
                                                id="colFormLabelSm" placeholder="Enter Employee Code">
                                        </div>
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Employee Name</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="ename" class="form-control form-control-sm"
                                                id="colFormLabelSm" placeholder="Enter Employee Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Date of Joining</label>
                                        <div class="col-sm-3">
                                            <input type="date" name="doj" class="form-control form-control-sm"
                                                id="colFormLabelSm" placeholder="Enter Date of Joining">
                                        </div>
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Date of Birth</label>
                                        <div class="col-sm-3">
                                            <input type="date" name="dob" class="form-control form-control-sm"
                                                id="colFormLabelSm" placeholder="Enter Date of Birth">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Qualification</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm" name="qualification">
                                                <option value="">Select Qualification</option>
                                                @foreach($qua as $quas)
                                                <option value="{{$quas->qualification}}">{{$quas->qualification}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Designation</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm" name="designation">
                                                <option value="">Select Designation</option>
                                                @foreach($des as $dess)
                                                <option value="{{$dess->designation}}">{{$dess->designation}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Business Unit</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm" name="businessunit">
                                                <option value="">Select Business unit</option>
                                                @foreach($bu as $bus)
                                                <option value="{{$bus->businessunit}}">{{$bus->businessunit}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Contact Number</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="contactnumber" class="form-control form-control-sm"
                                                id="colFormLabelSm" placeholder="Employee Contact Number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Email ID</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="emailid" class="form-control form-control-sm"
                                                id="colFormLabelSm" placeholder="Enter Email ID">
                                        </div>
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Address</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="address" class="form-control form-control-sm"
                                                id="colFormLabelSm" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Intercom Number</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="intercom" class="form-control form-control-sm"
                                                id="colFormLabelSm" placeholder="Enter Intercom Number">
                                        </div>
                                        <label class="col-sm-3 col-form-label col-form-label-sm">Experience</label>
                                        <div class="col-sm-3">
                                            <select name="experience" class="form-control">
                                                <option value="" disabled selected>Select your Experience</option>
                                                <option value="Fresher">Fresher</option>
                                                <option value="1 to 3">1 to 3</option>
                                                <option value="3 to 5">3 to 5</option>
                                                <option value="5 and Above">5 and Above</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-square btn-sm">Submit</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@push('scripts')
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush
