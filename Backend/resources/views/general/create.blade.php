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
               
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    @include('layouts.footer')
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
          
            <!-- Logout Modal-->

            <!-- Bootstrap core JavaScript-->
           
        </div>
        <!-- End of Content Wrapper -->

</body>
@endsection
