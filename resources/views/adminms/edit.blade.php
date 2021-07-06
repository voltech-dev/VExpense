@extends('layouts.admin')
@section('header')

<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Employee Details Edit</h4>
        <div class="pull-right">
            <a class="btn btn-primary btn-sm" href="{{ route('adminms.index') }}"> Back</a>
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
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
    </div>
</div>
<!-- end::page-header -->
@endsection
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
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
                    <form action="{{ url('/ams_update',$product->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                     <!--   @method('PUT')-->
                        <div data-label="" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                                        <label class="col-sm-5 col-form-label col-form-label-sm">Employee
                                            Image</label>
                                        <div class="col-sm-3">
                                            <img id="blah" src="<?php if ($product->filename == ''){
                                                
                                               echo asset('media/image/user/photo icon.png');
                                            }else{
                                                echo asset('../storage/uploadedimageofusers/'.$product->filename); 
                                            }?>" alt="{{ URL::asset('../storage/uploadedimageofusers/'.$product->filename) }}"
                                                style="max-width:70%;height:70%; border-radius: 70px" />
                                            <input type='file' onchange="readURL(this);" style="margin-left: 7%;" name="file" />
                                        </div>
                                    </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Employee Code</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->ecode}}" name="ecode" placeholder="Enter Employee Code">
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Employee Name</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->ename}}" name="ename" placeholder="Enter Employee Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Date of Joining</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->doj}}" name="doj" placeholder="Enter Date of Joining">
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Date of Birth</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->dob}}" name="dob" placeholder="Enter Date of Birth">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Qualification</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->qualification}}" name="qualification"
                                        placeholder="Enter Qualification">
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Designation</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->designation}}" name="designation"
                                        placeholder="Enter Designation">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Business Unit</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->businessunit}}" name="businessunit"
                                        placeholder="Enter Business Unit">
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Contact Number</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->contactnumber}}" name="contactnumber"
                                        placeholder="Enter Contact Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Email ID</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->emailid}}" name="emailid" placeholder="Enter Email ID">
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Address</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->address}}" name="address" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Intercom Number</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control form-control-sm" id="colFormLabelSm"
                                        value="{{$product->intercom}}" name="intercom"
                                        placeholder="Enter Intercom Number">
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Experience</label>
                                <div class="col-sm-3">
                                    <select name="experience" class="form-control">
                                        <option value="" disabled selected>{{ $product->experience }}</option>
                                        <option value="Fresher">Fresher</option>
                                        <option value="1 to 3">1 to 3</option>
                                        <option value="3 to 5">3 to 5</option>
                                        <option value="5 and Above">5 and Above</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
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