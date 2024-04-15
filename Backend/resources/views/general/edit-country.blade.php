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
                        <!-- Grow In Utility -->

                        <!-- Fade In Utility -->
                        <div class="col-lg-12">
                            <div class="card position-relative">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Update Country</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="country">Country Name</label>
                                        <input type="country" class="form-control" id="country"
                                            aria-describedby="country" placeholder="Enter Country Name...">

                                    </div>
                                    <div class="form-group">
                                        <label for="calling_code">Calling Code</label>
                                        <input type="calling_code" class="form-control" id="calling_code"
                                            placeholder="Enter Calling Code...">
                                    </div>
                                    <div class="form-group">
                                        <label for="calling_code">SMS Status</label>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="calling_code">Dispatchable</label>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="calling_code">Status</label>
                                        <select class="form-control" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Page Content -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @endsection