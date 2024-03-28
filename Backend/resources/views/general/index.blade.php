@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('sb-admin-2.css')}}">
<link rel="stylesheet" href="{{asset('sb-admin-2.min.css')}}">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
<link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.navbar')

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="row">

<!-- Grow In Utility -->
<div class="col-lg-6">

    <div class="card position-relative">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Grow In Animation Utilty</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <code>.animated--grow-in</code>
            </div>
            <div class="small mb-1">Navbar Dropdown Example:</div>
            <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                <a class="navbar-brand" href="#">Navbar</a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <p class="mb-0 small">Note: This utility animates the CSS transform property,
                meaning it will override any existing transforms on an element being animated!
                In this theme, the grow in animation is only being used on dropdowns within the
                navbar.</p>
        </div>
    </div>

</div>

<!-- Fade In Utility -->
<div class="col-lg-6">

    <div class="card position-relative">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Fade In Animation Utilty</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <code>.animated--fade-in</code>
            </div>
            <div class="small mb-1">Navbar Dropdown Example:</div>
            <nav class="navbar navbar-expand navbar-light bg-light mb-4">
                <a class="navbar-brand" href="#">Navbar</a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated--fade-in" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="small mb-1">Dropdown Button Example:</div>
            <div class="dropdown mb-4">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </button>
                <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
            <p class="mb-0 small">Note: This utility animates the CSS opacity property, meaning
                it will override any existing opacity on an element being animated!</p>
        </div>
    </div>

</div>

</div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    @include('layouts.footer')

                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="{{ asset('jquery/jquery.min.js') }}"></script>


            <!-- Core plugin JavaScript-->

            <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('jquery-easing/jquery.easing.min.js') }}"></script>



            <!-- Core plugin JavaScript-->

            <!-- Custom scripts for all pages-->
            <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

            <!-- Page level plugins -->

            <script src="{{ asset('chart.js/Chart.min.js') }}"></script>

            <!-- Page level custom scripts -->

            <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
            <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>

            <script>
            $(document).ready(function() {
                // When plus icon is clicked
                $('.fa-plus').click(function() {
                    // Hide plus icon
                    $(this).removeClass('d-block').addClass('d-none');
                    // Show minus icon
                    $(this).siblings('.fa-minus').removeClass('d-none').addClass('d-block');
                });

                // When minus icon is clicked
                $('.fa-minus').click(function() {
                    // Hide minus icon
                    $(this).removeClass('d-block').addClass('d-none');
                    // Show plus icon
                    $(this).siblings('.fa-plus').removeClass('d-none').addClass('d-block');
                });
            });
            </script>

</body>

@endsection