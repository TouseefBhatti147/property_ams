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
                            <li class="active">
                                <i class="ace-icon fa fa-angle-right"></i>
                                <!-- ">" sign with space -->
                                Add New Country
                            </li>
                        </ul>
                    </div>


                    <div class="row">
                        <!-- Grow In Utility -->

                        <!-- Fade In Utility -->
                        <div class="col-lg-12">
                            <div class="card position-relative">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add New Country</h6>
                                </div>
                                @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                
                                {!! Form::open(['route' => 'general.store', 'method' => 'POST']) !!}
                                {!! csrf_field() !!}
                                <div class="card-body">
                                    <div class="form-group">
                                        {!! Form::label('country', 'Country Name') !!}
                                        {!! Form::text('country', null, ['class' => 'form-control', 'placeholder' =>
                                        'Enter Country Name...']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('calling_code', 'Calling Code') !!}
                                        {!! Form::text('calling_code', null, ['class' => 'form-control', 'placeholder'
                                        => 'Enter Calling Code...']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('sms_status', 'SMS Status') !!}
                                        {!! Form::select('sms_status', ['' => 'Select SMS Status', '1' => 'Active', '0'
                                        => 'Inactive'], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('is_dispatchable', 'Dispatchable') !!}
                                        {!! Form::select('is_dispatchable', ['' => 'Select Dispatchable', '1' => 'Yes',
                                        '0' => 'No'], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('status', 'Status') !!}
                                        {!! Form::select('status', ['' => 'Select Status', '1' => 'Active', '0' =>
                                        'Inactive'], null, ['class' => 'form-control']) !!}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                {!! Form::close() !!}



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