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
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a class="ajaxlink" href="{{ route('general.create-country') }}">Home</a>
                            </li>&nbsp;
                            <li>
                                <i class="ace-icon fa fa-angle-right"></i> 
                                <!-- ">" sign with space -->
                                <a class="ajaxlink" href="{{ route('general.index') }}">General</a>
                            </li>&nbsp;
                            <li>
                                <i class="ace-icon fa fa-angle-right"></i> 
                                <!-- ">" sign with space -->
                                <a class="ajaxlink" href="{{ route('general.country-list') }}">Countries</a>
                            </li>&nbsp;
                            
                        </ul>
                    </div>
<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Countries List</h6>
        <div class="text-right">
                            <a href="{{ route('general.create-country') }}" class="btn btn-primary">Add New Country</a>
                        </div>        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6">
</div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                    <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 65px;">ISO#</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 450px;">Country Name</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 220px;">Calling Code</th><th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 220px;">SMS Status</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable"  colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">Is Dispatchable</th><th  style="width: 200px;" rowspan="1" colspan="1">Status</th><th style="width: 200px;" rowspan="1" colspan="1">Action</th></tr>
                </thead>
                <tfoot>
                    <tr><th rowspan="1" colspan="1">ISO#</th><th rowspan="1" colspan="1">Country</th><th rowspan="1" colspan="1">Calling Code</th><th rowspan="1" colspan="1">SMS Status</th><th rowspan="1" colspan="1">Is Despatchable</th><th rowspan="1" colspan="1">Status</th><th>Action</th></tr>
                </tfoot>
                <tbody>
                @foreach($countries as $country)
                <tr>
                    <td>{{ $country->iso }}</td>
                    <td>{{ $country->country }}</td>
                    <td>{{ $country->calling_code }}</td>
                    <td>{{ $country->sms_status }}</td>
                    <td>{{ $country->is_dispatchable }}</td>
                    <td>{{ $country->is_active }}</td>
                  

        <td><a href="{{ route('general.edit-country', ['id' => $country->id]) }}"><i class="fas fa-fw fa-wrench" aria-hidden="true"></i></a>
       | <form action="{{ route('general.edit-country', ['id' => $country->id]) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit"><i class="fas fa-fw fa-trash" aria-hidden="true"></i></button>
</form>
      </td>
                    <!-- Add more columns if needed -->
                </tr>
                @endforeach
            </tbody>
            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
        </div>
    </div>
</div>

</div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>




  

</body>

@endsection