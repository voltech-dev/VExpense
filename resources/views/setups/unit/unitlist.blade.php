@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Unit List</h4>
        <div class="pull-right">
            <a class="btn btn-success btn-square btn-sm" href="{{ url('unitcreate') }}"> New Unit</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Unit</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Unit List</li>
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
                                    <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						@php
							$i=0;
						@endphp
                            @foreach( $unit_data as $unit_record)
                            <tr >
                             
									<td>{{++$i}}</td>
                                    <td>{{$unit_record->company_name}}</td>
									<td>{{$unit_record->unit_name}}</td>
                                 <td>
                                                <form action="#" method="POST">
                                                  
                                                    <a class="btn btn-primary"
                                                        href="{{ url('unitedit',$unit_record->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure want to delete?')"
													href="{{ url('delete-unit',$unit_record->id) }}"class="btn btn-danger">Delete</button>
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



