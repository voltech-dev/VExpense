@extends('layouts.main')
@section('header')

<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Category</h4>
        <div class="pull-right">
            <a class="btn btn-success btn-square btn-sm" href="{{ url('/categorycreate') }}"> Create </a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Setup</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Category</li>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="myTable" class="table table-striped table-bordered dataTable dtr-inline"
                        style="font-family: Inter,sans-serif; font-size: .835rem;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Category Name </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody> <?php $i=0; $i++; ?>
                            @foreach( $category_data as $category_record)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td><a href="{{ url('/categoryedit',$category_record->id) }}">{{ $category_record->category_name }}</a>
                                </td>
                                
                                   <td>
                                                <form action="{{ url('categorydelete',$category_record->id) }}" method="POST">
                                                  
                                                    <a class="btn btn-primary"
                                                        href="{{ url('categoryedit',$category_record->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
													
													
                                                    <button type="submit" onclick="return confirm('Are you sure want to delete?')"
													href="" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
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
