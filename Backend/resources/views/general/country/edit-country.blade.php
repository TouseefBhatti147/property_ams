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
                                <a class="ajaxlink" href="{{ route('general.country.create-country') }}">Home</a>
                            </li>&nbsp;
                            <li>
                                <i class="ace-icon fa fa-angle-right"></i>
                                <!-- ">" sign with space -->
                                <a class="ajaxlink" href="{{ route('general.index') }}">General</a>
                            </li>&nbsp;
                            <li>
                                <i class="ace-icon fa fa-angle-right"></i>
                                <!-- ">" sign with space -->
                                <a class="ajaxlink" href="{{ route('general.country.country-list') }}">Countries</a>
                            </li>&nbsp;
                            <li class="active">
                                <i class="ace-icon fa fa-angle-right"></i>
                                <!-- ">" sign with space -->
                                Update Country
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <!-- Grow In Utility -->

                        <!-- Fade In Utility -->
                        <div class="col-lg-12">
                          <form method="POST" action="{{ route('general.country.update-country', ['country' => $country->id]) }}">    
                        
                        @csrf
                        @method('PUT')
                
                        <div class="form-group">
                            <label for="name">Country Name</label>
                            <input type="text" class="form-control" id="country" name="country" value="{{ $country->country }}">
                        </div>
                        <div class="form-group">
                            <label for="iso">Calling Code</label>
                            <input type="text" class="form-control" id="calling_code" name="calling_code" value="{{ $country->calling_code }}">
                        </div>
                        <div class="form-group">
                            <label for="iso">ISO</label>
                            <input type="text" class="form-control" id="iso" name="iso" value="{{ $country->iso }}">
                        </div>
                        <div class="form-group">
                            <label for="iso">SMS Status </label>
                            <select class="form-control" id="sms_status" name="sms_status">
                            <option value="1" {{ $country->sms_status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $country->sms_status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="iso">Dispatchable</label>
                            <select class="form-control" id="is_dispatchable" name="is_dispatchable">
                            <option value="1" {{ $country->is_dispatchable == 1 ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ $country->is_dispatchable == 0 ? 'selected' : '' }}>No</option>
                        </select>
                        </div> 
                        <!-- Add other fields as needed -->
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
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