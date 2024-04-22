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
                                <a class="ajaxlink" href="{{ route('general.city.create-city') }}">Home</a>
                            </li>&nbsp;
                            <li>
                                <i class="ace-icon fa fa-angle-right"></i>
                                <!-- ">" sign with space -->
                                <a class="ajaxlink" href="{{ route('general.index') }}">General</a>
                            </li>&nbsp;
                            <li>
                                <i class="ace-icon fa fa-angle-right"></i>
                                <!-- ">" sign with space -->
                                <a class="ajaxlink" href="{{ route('general.city.city-list') }}">Citites</a>
                            </li>&nbsp;
                            <li class="active">
                                <i class="ace-icon fa fa-angle-right"></i>
                                <!-- ">" sign with space -->
                                Add New city
                            </li>
                        </ul>
                    </div>


                    <div class="row">
                        <!-- Grow In Utility -->

                        <!-- Fade In Utility -->
                        <div class="col-lg-12">
                            <div class="card position-relative">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Add New city</h6>
                                </div>
                                @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                
                                {!! Form::open(['route' => 'general.city.store-city', 'method' => 'POST']) !!}
                                {!! csrf_field() !!}
                                <div class="card-body">
                                    <div class="form-group">
                                        {!! Form::label('City', 'City Name') !!}
                                        {!! Form::text('city', null, ['class' => 'form-control', 'placeholder' =>
                                        'Enter City Name...']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('country_id', 'Country Name') !!}
                                        {!! Form::text('country_id', null, ['class' => 'form-control', 'placeholder'
                                        => 'Enter Country Name']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('zipcode', 'Zip Code') !!}
                                        {!! Form::text('zipcode', null, ['class' => 'form-control', 'placeholder' =>
                                        'Enter Zip Code']) !!}
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