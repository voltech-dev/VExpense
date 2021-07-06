@extends('layouts.admin')
@section('header')

<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Employee Details</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">AMS</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Employee Profile</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Employee Details</li>
            </ol>
        </nav>
    </div>
</div>
@endsection
@section('content')
<!-- end::page-header -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
<!--------- ----------->
<div class="row">
<div class="col-md-4">
<div class="card">
                        <div class="card-body text-center">
                            <figure class="avatar avatar-lg m-b-20">
                                <img src="<?php if ($product->filename == ''){
                                                
                                                echo asset('media/image/user/photo icon.png');
                                             }else{
                                                 echo asset('../storage/uploadedimageofusers/'.$product->filename); 
                                             }?>" class="rounded-square" alt="Your image">
                            </figure>
                            <h5 class="mb-1">{{$product->ename}}</h5>
                            <p class="text-muted small">{{$product->designation}}</p>
                        </div>
                        <hr class="m-0">
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-4 text-info">
                                    <h4 class="font-weight small">0</h4>
                                    <span class="small">Projects</span>
                                </div>
                                <div class="col-4 text-warning">
                                    <h4 class="font-weight small">{{$product->doj}}</h4>
                                    <span class="small">Active From</span>
                                </div>
                                <div class="col-4 text-success">
                                    <h4 class="font-weight small"><?php 
                                    $now = time(); // or your date as well
                                    $your_date = strtotime($product->doj);
                                    $datediff = $now - $your_date;                                    
                                    echo round($datediff / (60 * 60 * 24));
                                    ?></h4>
                                    <span class="small">Active Days</span>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
<div class="col-md-8">
<!----------- --------->

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div data-label="" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">

                            <div class="row mb-2">
                                <div class="col-6 text-muted">ECode:</div>
                                <div class="col-6">{{$product->ecode}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">DOB:</div>
                                <div class="col-6">{{$product->dob}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">DOJ:</div>
                                <div class="col-6">{{$product->doj}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Qualification:</div>
                                <div class="col-6">{{$product->qualification}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Designation:</div>
                                <div class="col-6">{{$product->designation}}</div>
                            </div>                           
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Experience:</div>
                                <div class="col-6">{{$product->experience}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Business Unit:</div>
                                <div class="col-6">{{$product->businessunit}}</div>
                            </div> 
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Contact Number:</div>
                                <div class="col-6">{{$product->contactnumber}}</div>
                            </div>                           
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Email ID:</div>
                                <div class="col-6">{{$product->emailid}}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Intercom Number:</div>
                                <div class="col-6">{{$product->intercom}}</div>
                            </div> 
                            <div class="row mb-2">
                                <div class="col-6 text-muted">Address:</div>
                                <div class="col-6">{{$product->address}}</div>
                            </div> 

                            </div>
                        </div>
                    </div>
                    </br>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                                    
                    <a href="{{ route('adminms.index') }}" class="btn btn-outline-light btn-sm">
                                <i data-feather="chevrons-left" class="mr-2"></i>Back
                            </a>
                       <!-- <a class="btn btn-primary btn-sm" href="{{ route('adminms.index') }}"> Back</a>-->
                    </div>
                </div>
            </div>

<!----------- ---------->

</div>
</div>
<!----------  --------->

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