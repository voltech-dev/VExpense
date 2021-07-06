<html>

<head>
    <title>VDMS @yield('VDMS - Voltech Design Management System')</title>
    <link rel="icon" href="{{ asset('media/image/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">
    <!-- Prism -->
    <link rel="stylesheet" href="{{ asset('vendors/prism/prism.css') }}" type="text/css">
    <!-- Data table -->
    <link rel="stylesheet" href="{{ asset('vendors/dataTable/dataTables.min.css') }}" type="text/css">
    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}" type="text/css">
    <!-- date picker -->
    <link rel="stylesheet" href="{{ asset('vendors/datepicker/daterangepicker.css') }}" type="text/css">
   
</head>

<body>
    <div class="header">
        <div>
            <ul class="navbar-nav">
                <!-- begin::navigation-toggler -->
                <li class="nav-item navigation-toggler">
                    <a href="#" class="nav-link" title="Hide navigation">
                        <i data-feather="arrow-left"></i>
                    </a>
                </li>
                <li class="nav-item navigation-toggler">
                    <h3 class="mb-0">VDMS - Voltech Design Management Systems</h3>
                    </a>
                </li>
                <li class="nav-item navigation-toggler mobile-toggler">
                    <a href="#" class="nav-link" title="Show navigation">
                        <i data-feather="menu"></i>
                    </a>
                </li>
                <!-- end::navigation-toggler -->
            </ul>
        </div>

        <div>
            <ul class="navbar-nav">
                <!-- begin::user menu -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="User menu" data-toggle="dropdown">
                        <i data-feather="settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                        <div class="p-4 text-center d-flex justify-content-between"
                            data-backround-image="assets/media/image/image1.jpg">
                            <h6 class="mb-0">Settings</h6>
                        </div>
                        <div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                        <label class="custom-control-label" for="customSwitch1">Allow
                                            notifications.</label>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>
                <!-- end::user menu -->
            </ul>

            <!-- begin::mobile header toggler -->
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
            <!-- end::mobile header toggler -->
        </div>
    </div>
    <!-- end::header -->

    <!-- begin::main -->
    <div id="main">

        <!-- begin::navigation -->
        <div class="navigation">

            <div class="navigation-menu-tab">
                <div>
                    <div class="navigation-menu-tab-header" data-toggle="tooltip"
                        title="{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}"
                        data-placement="right">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                            <figure class="avatar avatar-sm">
                                <img src="{{ asset('media/image/user/women_avatar1.jpg') }}" class="rounded-circle"
                                    alt="avatar">
                            </figure>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                            <div class="p-3 text-center" data-backround-image="{{ asset('media/image/image1.jpg') }}">
                                <figure class="avatar mb-3">
                                    <img src="{{ asset('media/image/user/women_avatar1.jpg') }}" class="rounded-circle"
                                        alt="image">
                                </figure>
                                <h6 class="d-flex align-items-center justify-content-center">
                                    Roxana Roussell
                                    <a href="#" class="btn btn-primary btn-sm ml-2" data-toggle="tooltip"
                                        title="Edit profile">
                                        <i data-feather="edit-2"></i>
                                    </a>
                                </h6>
                            </div>
                            <div class="dropdown-menu-body">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item">Profile</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
        this.closest('form').submit();" class="list-group-item text-danger" data-sidebar-target="#settings">Sign
                                            Out!</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex-grow-1">
                    <ul>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Dashboards"
                                data-nav-target="#dashboards">
                                <i data-feather="bar-chart-2"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Business Management System"
                                data-nav-target="#bvs">
                                <i data-feather="command"></i>
                            </a>
                        </li>
                        <li>
                            <a  class="active" href="#" data-toggle="tooltip" data-placement="right"
                                title="Project Management System" data-nav-target="#pms">
                                <i data-feather="layers"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Time Management System"
                                data-nav-target="#tms">
                                <i data-feather="copy"></i>
                            </a>
                            <ul>
                                <!--  <li><a href="client" data-toggle="tooltip" data-placement="right" title="Clients"
                                        data-nav-target="#clients">Client</a></li>-->
                            </ul>
                        </li>
                        <li>
                            <a class="#" href="#" data-toggle="tooltip" data-placement="right"
                                title="Admin Management System" data-nav-target="#ams">
                                <i data-feather="monitor"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li>
                            <a href="#" data-toggle="tooltip" data-placement="right" title="Settings">
                                <i data-feather="settings"></i>
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
        this.closest('form').submit();"><i data-feather="log-out"></i>

                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- begin::navigation menu -->
            <div class="navigation-menu-body">
                <!-- begin::navigation-logo -->
                <div>
                    <div id="navigation-logo">
                        <a href="index-2.html">
                            <img class="logo" src="{{ asset('media/image/logo1.png') }}" alt="logo1">
                            <img class="logo-light" src="{{ asset('media/image/logo-light1.png') }}" alt="light logo1">
                        </a>
                    </div>
                </div>
                <!-- end::navigation-logo -->

                <div class="navigation-menu-group">

                    <div id="dashboards">
                        <ul>
                            <li class="navigation-divider">Dashboards</li>
                            <li class="navigation-divider">Business</li>
                            <li class="navigation-divider">Project</li>
                            <li class="navigation-divider">Timesheet</li>
                            <li class="navigation-divider">Admin</li>
                        </ul>
                    </div>

                    <div id="bvs">
                        <ul>
                            <li class="navigation-divider">Dashboards</li>
                            <li><a href="">Enquiry</a>
                                <ul>
                                    <li><a href="{{ route('businessms.index') }}">Enquiry List</a></li>
                                    <li><a href="{{ url('/create') }}">Enquiry Form</a></li>
                                </ul>
                            </li>
                            <li><a href="">Offer</a>
                                <ul>
                                    <li><a href="{{ url('/offercreatenew') }}">Offer Form</a></li>
                                    <li><a href="{{ url('/offershow') }}">Offer List</a></li>
                                    <li><a href="{{ url('/lod_list') }}">LOD & Man Hours</a></li>
                                    <li><a href="{{ url('/technicalproposal_list') }}">Technical Proposal</a></li>
                                    <li><a href="{{ url('/costingsheet_list') }}">Costing Sheet</a></li>
                                </ul>
                            </li>
                            <li><a href="">Order</a>
                                <ul>
                                    <!--<li><a href="{{ url('/create') }}">Order Form</a></li>-->
                                    <li><a href="{{ url('/orderlist') }}">Order List</a></li>
                                   <!-- <li><a href="{{ url('/create') }}">LOD & Man Hours</a></li>
                                    <li><a href="{{ url('/create') }}">Technical Proposal</a></li>
                                    <li><a href="{{ url('/create') }}">Costing Sheet</a></li>-->
                                </ul>
                            </li>
                            <!--<li><a href="dashboard-two.html">Tender Register</a></li>
                            <li><a href="dashboard-two.html">Offer Form Register</a>
                                <ul>
                                    <li><a href="index-2.html">Offer for Engineering Service</a></li>
                                    <li><a href="index-2.html">LOD Schedule</a></li>
                                    <li><a href="index-2.html">LOD Civil & Electrical</a></li>
                                    <li><a href="index-2.html">Manhours</a></li>
                                </ul>
                            </li>
                            <li><a href="dashboard-three.html">Projects</a>
                                <ul>
                                    <li><a href="index-2.html">Order Booked - Consolidation</a></li>
                                    <li><a href="index-2.html">Order Register</a></li>
                                </ul>
                            </li>
                            <li><a href="dashboard-four.html">Client Master</a></li>-->


                        </ul>
                    </div>
                    <div class="open" id="pms">
                        <ul>
                            <li class="navigation-divider">Dashboards</li>
                            <li><a href="">Project Review</a>
                                <ul>
                                    <li><a href="{{url('/pms_projectlistview')}}">Project List</a></li>
                                    <li><a href="{{url('/pms_projectcreationform')}}">Project Form</a></li>
                                    <li><a href="{{url('/pms_projectassigns')}}">Project Assign</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="dashboard-two.html">Tender Register</a></li>
                            <li><a href="dashboard-two.html">Offer Form Register</a>
                                <ul>
                                    <li><a href="index-2.html">Offer for Engineering Service</a></li>
                                    <li><a href="index-2.html">LOD Schedule</a></li>
                                    <li><a href="index-2.html">LOD Civil & Electrical</a></li>
                                    <li><a href="index-2.html">Manhours</a></li>
                                </ul>
                            </li>
                            <li><a href="dashboard-three.html">Projects</a>
                                <ul>
                                    <li><a href="index-2.html">Order Booked - Consolidation</a></li>
                                    <li><a href="index-2.html">Order Register</a></li>
                                </ul>
                            </li>
                            <li><a href="dashboard-four.html">Client Master</a></li>-->


                        </ul>
                    </div>
                    <div id="ams">
                        <ul>
                            <li class="navigation-divider">Dashboards</li>
                            <li><a href="{{ route('adminms.index') }}">Employee Profile</a></li>
                            

                            <li><a href="">Setup</a>
                                <ul>
                                    <li><a href="{{ url('/qualificationindex') }}">Qualification</a></li>
                                    <li><a href="{{ url('/designationindex1') }}">Designation</a></li>
                                    <li><a href="{{url('/businessunitindex')}}">Business Unit</a></li>
                                </ul>
                            </li>

                            <!--<li><a href="dashboard-three.html">Asset</a></li>
                            <li><a href="dashboard-four.html">Vendor PO Creation</a></li>
                            <li><a href="index-2.html">Vendor PO Register</a></li>
                            <li><a href="dashboard-two.html">Quality Policy</a></li>
                            <li><a href="dashboard-three.html">Project Billing Status</a></li>
                            <li><a href="dashboard-four.html">Invoice</a></li>
                            <li><a href="index-2.html">Project Statement</a></li>
                            <li><a href="dashboard-two.html">PDC Request</a></li>
                            <li><a href="dashboard-three.html">Vendor PO & Billing</a></li>-->
                        </ul>
                    </div>


                </div>
            </div>
            <!-- end::navigation menu -->

        </div>
        <!-- end::navigation -->

        <main class="main-content">
            @yield('header')

            @yield('content')

            <!-- begin::footer -->
            <footer>
                <div class="container-fluid">
                    <div>© 2020 VDMS Made by <a href="#">Team ERP</a></div>
                    <div>
                        <nav class="nav">
                            <a href="http://voltechgroup.com/" class="nav-link">voltechgroup.com</a>
                        </nav>
                    </div>
                </div>
            </footer>
            <!-- end::footer -->
        </main>
        <!-- end::main-content -->
    </div>


    <!-- end::main -->
    <!-- Required Jquery 
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>
    <!-- Plugin scripts -->
    <script src="{{ asset('vendors/bundle.js') }}"></script>

    <!-- Prism -->
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>

    <!-- Javascript -->
    <script src="{{ asset('vendors/dataTable/jquery.dataTables.min.js') }}"></script>

    <!-- Bootstrap 4 and responsive compatibility -->
    <script src="{{ asset('vendors/dataTable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/dataTable/dataTables.responsive.min.js') }}"></script>


    <!-- begin::custom scripts -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <!-- end::custom scripts -->
    <!--start::pdf-->
    <script src="{{ asset('js/jspdf.min.js') }}"></script>
    <!-- end::pdf-->
    <!-- datepicker -->
    <script src="{{ asset('vendors/datepicker/daterangepicker.js') }}"></script>

    <!--  logout function -->
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
    <!-- end of logout function -->

    <!--<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>-->
    @stack('scripts')
</body>

</html>