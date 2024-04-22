@extends('layouts.app')

@section('content')

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
                        <div class="col-sm-2 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="https://ams.fdhlpk.com/images/country-icon.png" style="height: 60px;">
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                        <a href="{{ route('general.country.country-list') }}">Countries</a>
   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="https://ams.fdhlpk.com/images/city-icon.png" style="height: 60px;">
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                        <a href="{{ route('general.city.city-list') }}"> Cities</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="https://ams.fdhlpk.com/images/profession-icon.png" style="height: 60px;">
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                            Professions
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <i class="fa fa-leaf" style="font-size:55px !important;"></i>
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                            Associate Companies
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <i class="fa fa-list-alt" style="font-size:55px !important;"></i>
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                            Department Categories
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <i class="fa fa-building" style="font-size:55px !important;"></i>
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                            Department
                                        </div>
                                    </div>
                                </div>
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

    </div>

</body>

@endsection
