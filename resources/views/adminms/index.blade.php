@extends('layouts.admin')
@section('header')

<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>Employee Profile</h4>
        <div class="pull-right">
            <a class="btn btn-success btn-square btn-sm" href="{{ route('adminms.create') }}"> Create New</a>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">AMS</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Employee Profile</li>
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
                    <!-- <h6 class="card-title"></h6>-->
                    <div class="row">
                        <div class="col-md-12">
                            <table id="myTable" class="table table-striped table-bordered">
                                <thead>
                                    <tr style="font-family: Inter,sans-serif; font-size: .835rem;
    color: #215029">
                                        <th>No</th>
                                        <th>E.Code</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>B U</th>
                                        <th>Intercom</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody><?php $i=0; $i++; ?>
                                    @foreach ($products as $product)
                                    <tr style="font-family: Inter,sans-serif; font-size: .835rem;
    color: #505050">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $product->ecode }}</td>
                                        <td>{{ $product->ename }}</td>
                                        <td>{{ $product->designation }}</td>
                                        <td>{{ $product->businessunit }}</td>
                                        <td>{{ $product->intercom }}</td>
                                        <td>
                                            <span class="dropdown">
                                                <a href="#" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>

                                                <span class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ url('/show',$product->id) }}"
                                                        class="dropdown-item">Show</a>
                                                    <a href="{{ url('/edit',$product->id) }}"
                                                        class="dropdown-item">Edit</a>
                                                    <form action="{{ url('/destroy',$product->id) }}" method="POST">
                                                        @csrf
                                                        <a href="#" class="dropdown-item"><button type="submit"
                                                                style="border: none; background: white">Delete</button></a>
                                                    </form>
                                                </span>
                                            </span>


                                            <!--<a class="btn btn-info btn-square btn-sm"
                                                href="{{ route('adminms.show',$product->id) }}">Show</a>

                                            <a class="btn btn-primary btn-square btn-sm"
                                                href="{{ route('adminms.edit',$product->id) }}">Edit</a>

                                            -->


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
    </div>
</div>
<!-- end::main-content -->
{!! $products->links() !!}
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('#myTable').DataTable();
});
</script>
@endpush