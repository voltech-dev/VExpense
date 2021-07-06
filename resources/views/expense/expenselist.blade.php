@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Expense List</h4>
        <div class="pull-right">
            <a class="btn btn-success btn-square btn-sm" href="{{ url('expensecreate') }}"> New Expense</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Expense</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Expense List</li>
            </ol>
        </nav>
    </div>
</div>
@endsection
@section('content')
<!-- end::page-header -->
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
                                    <th>Project</th>
                                    <th>Expense Date</th>
                                    <th>Expense Name </th>
                                    <th>Expense Amount</th>
                                    <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						@php
							$i=0;
						@endphp
                            @foreach($expense_data as $expense)
                            <tr >
                             
										<td>{{++$i}}</td>
                                        <td>{{$expense->company_name}}</td>
                                        <td>{{$expense->unit_name}}</td>
                                        <td>{{$expense->country_name}}</td>
                                        <td>{{$expense->customer_name}}</td>
                                        <td>{{$expense->project_name}}</td>
                                        <td>{{$expense->expense_date}}</td>
                                        <td>{{$expense->category_name}}</td>
                                        <td>{{$expense->expense_amount}}</td>
                                 <td>
                                                <form action="#" method="POST">
                                                  
                                                    <a class="btn btn-primary"
                                                        href="{{ url('expenseedit',$expense->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm(Are you sure want to delete?)"
													href="{{ url('delete-expense',$expense->id) }}"	class="btn btn-danger">Delete</button>
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
