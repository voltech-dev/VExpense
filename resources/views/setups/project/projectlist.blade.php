@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Project List</h4>
        <div class="pull-right">
            <a class="btn btn-success btn-square btn-sm" href="{{ url('projectcreate') }}">Add New Project</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Project</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Project List</li>
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
									<th>Company </th>
									<th>Unit </th>
									<th>Country </th>
									<th>Customer </th>
									<th>Project Name</th>
									<th>Project Code</th>
									<th>Project Start Date</th>
									<th>Project End Date</th>
                                    <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						@php
							$i=0;
						@endphp
                            @foreach( $project_data as $projectrecord)
                            <tr >
                             
									<td>{{++$i}}</td>
									<td>{{$projectrecord->company_name}}</td>
									<td>{{$projectrecord->unit_name}}</td>
									<td>{{$projectrecord->country_name}}</td>
									<td>{{$projectrecord->customer_name}}</td>
                                    <td>{{$projectrecord->project_name}}</td>
									<td>{{$projectrecord->project_code}}</td>
									<td>{{$projectrecord->project_start_date}}</td>
									<td>{{$projectrecord->project_end_date}}</td>
                                 <td>
                                    <a class="btn btn-outline-primary"
                                    href="{{ url('projectshow',$projectrecord->id) }}"><small><i class="fas fa-eye"></i></small></a>
                                    <a class="btn btn-outline-primary"
                                    href="{{ url('projectedit',$projectrecord->id) }}"><small><i class="fas fa-edit"></i></small></a>
                                                <form action="{{ url('projectdelete',$projectrecord->id) }}" method="POST">
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"onclick="return confirm('Are you sure want to delete?')"
													href="" class="btn btn-outline-danger"><small><i class="fas fa-trash"></i></small></button>
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



