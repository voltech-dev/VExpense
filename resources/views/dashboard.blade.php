@extends('layouts.main')
@section('header')

<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <h4>DashBoard</h4>
        <div class="pull-right">
           
        </div>

    </div>
</div>
@endsection

@section('content')

<!-- begin::main-content -->


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-secondary-gradient">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h6 class="card-title mb-3">Welcome
                                {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} !</h6>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="card-title mb-3">BMS</h6>
                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                <!-- <h2 class="mb-0 mr-2 font-weight-bold">1.425</h2>
                                    <p class="small text-muted mb-0 line-height-20">
                                    <span class="text-success">+ 5%</span> than last week
                                    </p>-->
                            </div>
                        </div>
                        <div>
                            <div class="avatar avatar-lg">
                                <div class="avatar-title bg-success-bright text-success rounded-circle">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="card-title mb-3">PMS</h6>
                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                <!--<h2 class="mb-0 mr-2 font-weight-bold">554</h2>
                                    <p class="small text-muted mb-0 line-height-20">
                                    <span class="text-danger">- 2%</span> than last week
                                    </p>-->
                            </div>
                        </div>
                        <div>
                            <div class="avatar avatar-lg">
                                <div class="avatar-title bg-warning-bright text-warning rounded-circle">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="card-title mb-3">TMS</h6>
                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                <!--    <h2 class="mb-0 mr-2 font-weight-bold">900</h2>
                                    <p class="small text-muted mb-0 line-height-20">
                                    <span class="text-success">+ 9%</span> than last week
                                    </p>-->
                            </div>
                        </div>
                        <div>
                            <div class="avatar avatar-lg">
                                <div class="avatar-title bg-info-bright text-info rounded-circle">
                                    <i class="fa fa-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="card-title mb-3">AMS</h6>
                            <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                <!--<h2 class="mb-0 mr-2 font-weight-bold">900</h2>
                                    <p class="small text-muted mb-0 line-height-20">
                                    <span class="text-success">+ 9%</span> than last week
                                    </p>-->
                            </div>
                        </div>
                        <div>
                            <div class="avatar avatar-lg">
                                <div class="avatar-title bg-info-bright text-info rounded-circle">
                                    <i class="fa fa-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title">Recent Projects</h6>
                        <div>
                            <a href="#" class="mr-3">
                                <i class="fa fa-refresh"></i>
                            </a>
                            <span class="dropdown">
                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                </a>
                                <span class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Project</th>
                                    <th class="text-center">Task</th>
                                    <th class="text-center">Members</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-right">Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">Frontend Development</a>
                                    </td>
                                    <td class="text-center">25</td>
                                    <td class="text-center">
                                        <div class="avatar-group">
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/women_avatar2.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/women_avatar4.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/man_avatar3.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/man_avatar1.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-info">In Progress</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1" style="height: 5px;">
                                                <div class="progress-bar bg-info" style="width: 53%;"></div>
                                            </div>
                                            <small class="ml-2">%53</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Backend Development</a>
                                    </td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">
                                        <div class="avatar-group">
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/women_avatar2.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/women_avatar4.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/man_avatar3.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/man_avatar1.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/man_avatar5.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/man_avatar2.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-warning">Pending</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1" style="height: 5px;">
                                                <div class="progress-bar bg-warning" style="width: 80%;"></div>
                                            </div>
                                            <small class="ml-2">%80</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">UI-Kit Development</a>
                                    </td>
                                    <td class="text-center">32</td>
                                    <td class="text-center">
                                        <div class="avatar-group">
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/women_avatar2.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/women_avatar4.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-success">Active</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1" style="height: 5px;">
                                                <div class="progress-bar bg-success" style="width: 35%;"></div>
                                            </div>
                                            <small class="ml-2">%35</small>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">UI-Kit Development 2</a>
                                    </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">
                                        <div class="avatar-group">
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/women_avatar1.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/women_avatar3.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                            <figure class="avatar avatar-sm">
                                                <img src="{{ asset('media/image/user/women_avatar2.jpg') }}"
                                                    class="rounded-circle" alt="avatar">
                                            </figure>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-info">In Progress</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="progress flex-grow-1" style="height: 5px;">
                                                <div class="progress-bar bg-info" style="width: 50%;"></div>
                                            </div>
                                            <small class="ml-2">%50</small>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title">Upcoming Meeting</h6>
                        <a href="#">View All</a>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="text-center">
                            <div class="avatar">
                                <span
                                    class="avatar-title bg-info-bright text-info rounded-circle font-size-22">17</span>
                            </div>
                        </div>
                        <div class="m-l-20">
                            <h5 class="mb-2">
                                <a class="text-dark">UI Discussion</a>
                            </h5>
                            <p class="mb-0">Execute core that as result.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="text-center">
                            <div class="avatar">
                                <span
                                    class="avatar-title bg-danger-bright text-danger rounded-circle font-size-22">21</span>
                            </div>
                        </div>
                        <div class="m-l-20">
                            <h5 class="mb-2">
                                <a class="text-dark">Project Schdule</a>
                            </h5>
                            <p class="mb-0">Special cloth alert always.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="text-center">
                            <div class="avatar">
                                <span
                                    class="avatar-title bg-warning-bright text-warning rounded-circle font-size-22">25</span>
                            </div>
                        </div>
                        <div class="m-l-20">
                            <h5 class="mb-2">
                                <a class="text-dark">Design Discussion</a>
                            </h5>
                            <p class="mb-0">Let us wax poetic about.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="text-center">
                            <div class="avatar">
                                <span
                                    class="avatar-title bg-success-bright text-success rounded-circle font-size-22">10</span>
                            </div>
                        </div>
                        <div class="m-l-20">
                            <h5 class="mb-2">
                                <a class="text-dark">UI Discussion</a>
                            </h5>
                            <p class="mb-0">Let us wax poetic about.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection