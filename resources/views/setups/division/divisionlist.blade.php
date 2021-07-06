@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Division List</h4>
        <div class="pull-right">
            <a class="btn btn-success btn-square btn-sm" href="{{ url('divisioncreate') }}"> New Division</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Division</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Division List</li>
            </ol>
        </nav>
    </div>
</div>
@endsection



@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="myTable" class="table table-striped table-bordered dataTable dtr-inline" style="font-family: Inter,sans-serif; font-size: .835rem;">
                        <thead>
                            <tr >
                               
									<th>S.No</th>
									<th>Company Name</th>
									<th>Unit Name</th>
									<th>Division Name</th>
									<th>Division Code</th>
                                    <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						@php
							$i=0;
						@endphp
                            @foreach( $division_data as $division_record)
                            <tr >
                             
									<td>{{++$i}}</td>
                                     <td>{{$division_record->company_name}}</td>
									<td>{{$division_record->unit_name}}</td>
									<td>{{$division_record->division_name}}</td>
									<td>{{$division_record->division_code}}</td>
                                 <td>
                                                <form action="{{ url('delete-division',$division_record->id) }}" method="POST">
                                                  
                                                    <a class="btn btn-primary"
                                                        href="{{ url('divisionedit',$division_record->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('#myTable').DataTable({
        "scrollY": "400px",
        "scrollCollapse": true
    });
});
</script>
@endpush


