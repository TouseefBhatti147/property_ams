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

                    </div>
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                            href="#reports">Reports</a>
                                    </h6>
                                    <span style="float:right"><a data-toggle="collapse" href="#reports"><i
                                                class="fas fa-minus mr-2 d-none"></i><i
                                                class="fas fa-plus mr-2"></i></a></span>
                                </div>
                                <div class="card-body reports">

                                    <div id="reports" class="panel-collapse collapse row">

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Monthly)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Monthly)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Monthly)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Monthly)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Monthly)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-success shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Annual)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-info shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                Tasks
                                                            </div>
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col-auto">
                                                                    <div
                                                                        class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                        50%</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="progress progress-sm mr-2">
                                                                        <div class="progress-bar bg-info"
                                                                            role="progressbar" style="width: 50%"
                                                                            aria-valuenow="50" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pending Requests Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-warning shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                Pending Requests</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Color System -->


                        </div>


                    </div>
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                            href="#marketing">Marketing </a></h6>
                                    <span style="float:right"><a data-toggle="collapse" href="#marketing"><i
                                                class="fas fa-minus mr-2 d-none"></i><i
                                                class="fas fa-plus mr-2"></i></a></span>
                                </div>
                                <div class="card-body">

                                    <div id="marketing" class="panel-collapse collapse row">

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Monthly)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-success shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Annual)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-info shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                Tasks
                                                            </div>
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col-auto">
                                                                    <div
                                                                        class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                        50%</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="progress progress-sm mr-2">
                                                                        <div class="progress-bar bg-info"
                                                                            role="progressbar" style="width: 50%"
                                                                            aria-valuenow="50" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pending Requests Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-warning shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                Pending Requests</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Color System -->


                        </div>


                    </div>
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-12">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-2">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                            href="#tracking">Tracking</a></h6>
                                    <span style="float:right"><a data-toggle="collapse" href="#tracking"><i
                                                class="fas fa-minus mr-2 d-none"></i><i
                                                class="fas fa-plus mr-2"></i></a></span>
                                </div>
                                <div class="card-body">

                                    <div id="tracking" class="panel-collapse collapse row">

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-primary shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Monthly)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-success shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                Earnings (Annual)</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Earnings (Monthly) Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-info shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                Tasks
                                                            </div>
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col-auto">
                                                                    <div
                                                                        class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                        50%</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="progress progress-sm mr-2">
                                                                        <div class="progress-bar bg-info"
                                                                            role="progressbar" style="width: 50%"
                                                                            aria-valuenow="50" aria-valuemin="0"
                                                                            aria-valuemax="100"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pending Requests Card Example -->
                                        <div class="col-xl-3 col-md-6 mb-4">
                                            <div class="card border-left-warning shadow h-100 py-2">
                                                <div class="card-body">
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col mr-2">
                                                            <div
                                                                class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                Pending Requests</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Color System -->


                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#transfer"> Transfers</a></h6> <span style="float:right"><a
                                                    data-toggle="collapse" href="#transfer"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>

                                        </div>
                                        <div class="card-body">

                                            <div id="transfer" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#appointment">Appointments / Visits</a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#appointment"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="appointment" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#deskappointment"> File Transfer Desk Appointments</a></h6>
                                            <span style="float:right"><a data-toggle="collapse"
                                                    href="#deskappointment"><i class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="deskappointment" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#members">Members</a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#members"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="members" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#support"> Members Support</a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#support"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="support" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#property"> Property</a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#property"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="property" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#society"> Society Administration</a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#society"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="society" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#balloting"> Balloting</a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#balloting"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="balloting" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#recovery"> Recovery </a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#recovery"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="recovery" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#record">Files Record Room </a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#record"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="record" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#qr">QR Identification </a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#qr"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="qr" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#modification">Modification History & Transaction Log </a>
                                            </h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#modification"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="modification" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#errors">Errors Reporting </a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#errors"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="errors" class="panel-collapse collapse row">

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Monthly)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $40,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Earnings (Annual)</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        $215,000
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Earnings (Monthly) Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Tasks
                                                                    </div>
                                                                    <div class="row no-gutters align-items-center">
                                                                        <div class="col-auto">
                                                                            <div
                                                                                class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                                50%</div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="progress progress-sm mr-2">
                                                                                <div class="progress-bar bg-info"
                                                                                    role="progressbar"
                                                                                    style="width: 50%"
                                                                                    aria-valuenow="50" aria-valuemin="0"
                                                                                    aria-valuemax="100"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i
                                                                        class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pending Requests Card Example -->
                                                <div class="col-xl-3 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Pending Requests</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        18</div>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>
                            <div class="row">
                                <!-- Content Column -->
                                <div class="col-lg-12">
                                    <!-- Project Card Example -->
                                    <div class="card shadow mb-2">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary"><a data-toggle="collapse"
                                                    href="#configuration">Configuration</a></h6>
                                            <span style="float:right"><a data-toggle="collapse" href="#configuration"><i
                                                        class="fas fa-minus mr-2 d-none"></i><i
                                                        class="fas fa-plus mr-2"></i></a></span>
                                        </div>
                                        <div class="card-body">

                                            <div id="configuration" class="panel-collapse collapse row">


                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        <a href="{{ url('/some-url') }}">Property</a>
                                                                    </div>

                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/property-icon.png') }}" alt="Description of the image">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        General</div>

                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/general-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        Finance
                                                                    </div>
                                                                  
                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/finance-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Security</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/security-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        Tracking</div>

                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/tracking-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-success shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                                        CSC Calendar</div>

                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/calender-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-info shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-info text-uppercase mb-1">
                                                                        MS Nos.
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/msnos-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Email Templates</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/email-template-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        SMS Templates</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/message-template-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Maintenance Schedule</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/maintenance-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        Time Slots</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/timeslots-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-md-6 mb-4">
                                                    <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div
                                                                        class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                                        AMS Documentation</div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                        </div>
                                                                </div>
                                                                <div class="col-auto">
                                                                <img src="{{ asset('img/icon/documentation-icon.png') }}" alt="Description of the image">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Color System -->


                                </div>


                            </div>

                        </div>
                        <!-- /.container-fluid -->

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

  



  

</body>

@endsection