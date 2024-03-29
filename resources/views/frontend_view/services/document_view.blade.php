@extends('frontend_view.layouts.layout')
    @section('content')

    <style>
        

    </style>


    @include('frontend_view.layouts.breadcrumb_nav')

    <section class="zero_padding" id="top-banner">
        <div class="row ">
            <div class="col-md-12 text-center">
                <img src="{{ URL('assets/images/product/doc_cer.png') }} " alt="contact_img"/>
                <div class="centered">
                    <h2 class="bold-text">Documents & Certificates</h2>
                </div>
            </div>
        </div>
    </section>



    <section class="site-section lighter-bg" id="document-section-nav">
        <div class="container">
            <div class="row justify-content-center general-text-color">

                <div class="col-md-12 text-center general-text-color">
                  <h2 class="mb-4 themeTextColor">Certificate & Technical Data Sheets</h2>
                    <p class="mb-5 nsr22">Lorem ipsum dolor sit amet, connsetetur sadipscing elit, sed diam nonumy eirmiod<br/> 
                                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                </div>

                <div class="col-md-12">
                    <div class="card">


                    @if(Session::has('error'))
                        <p class="alert {{ Session::get('alert-class', 'alert-danger') }} text-center">{{ Session::get('error') }}</p>
                    @endif
                
                        <div class="card-header">
                            <ul class="nav nav-tabs navmenu">
                                <li class="col-md-3 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-1">
                                    <a  href="#tab-1" class="nav-link">Certificate Of Analysis</a>
                                </li>
                                <li class="col-md-3 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-2">
                                    <a href="#tab-2" class="nav-link">Certificate of Conformity</a>
                                </li>
                                <li class="col-md-3 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-3">
                                    <a href="#tab-2" class="nav-link">Material Safety Data Sheet</a>
                                </li>
                                <li class="col-md-3 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-4">
                                    <a href="#tab-2" class="nav-link">Technical Data Sheet</a>
                                </li>
                                <!-- <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-3">
                                    <a href="#tab-3" class="nav-link">Material Saftey Data Sheet</a>
                                </li> -->
                            </ul>
                        </div>

                        <div class="card-body" id='tab-1-active' style="display:none;">

                        {{-- display validation error message --}}
                            @if ($message = Session::get('1st-danger'))
                                <div class="alert warning alert-block">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            
                            @if ($message = Session::get('1st-success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            <form method="post" action="{{ URL('support/document') }}" class="form-inline">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="COAform" value="coa">

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <!-- <label for="p_name">Product Name</label> -->
                                        <input name="productcode" type="text" id="p_name" class="form-control" placeholder="Enter the Product Code">
                                    </div>

                                    <div class="col-md-4">
                                        <!-- <label for="batch_num">Batch Number</label> -->
                                        <input type="text" name="batch" id="batch_num" class="form-control" placeholder="Enter the Batch Number">
                                    </div>
                                
                                    <div class="col-md-4" style="top:0; margin:auto; text-align:center;">
                                        <input type="submit" value="Search" class="btn btn-primary btn-md">
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="card-body" id='tab-2-active' style="display:none;">

                            {{-- display validation error message --}}
                            @if ($message = Session::get('2nd-danger'))
                                <div class="alert warning alert-block">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            
                            @if ($message = Session::get('2nd-success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            <form method="post" action="{{ URL('support/document') }}" class="form-inline">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="COAform" value="coc">

                                <div class="row form-group">
                                    <div class="col-md-8">
                                        <!-- <label for="name">Product Name</label> -->
                                        <input type="text" name="prod_name" id="name" class="form-control" placeholder="Enter the Product Name" required>
                                    </div>
                                
                                    <div class="col-md-4" style="top:0; margin:auto; text-align:center;">
                                        <input type="submit" value="Search" class="btn btn-primary btn-md">
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="card-body" id='tab-3-active' style="display:none;">

                            {{-- display validation error message --}}
                            @if ($message = Session::get('2nd-danger'))
                                <div class="alert warning alert-block">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            
                            @if ($message = Session::get('2nd-success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            <form method="post" action="{{ URL('support/document') }}" class="form-inline">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="COAform" value="msds">

                                <div class="row form-group">
                                    <div class="col-md-8">
                                        <!-- <label for="name">Product Name</label> -->
                                        <input type="text" name="productcode" id="name" class="form-control" placeholder="Enter the Product Name" required>
                                    </div>
                                
                                    <div class="col-md-4" style="top:0; margin:auto; text-align:center;">
                                        <input type="submit" value="Search" class="btn btn-primary btn-md">
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="card-body" id='tab-4-active' style="display:none;">

                            {{-- display validation error message --}}
                            @if ($message = Session::get('2nd-danger'))
                                <div class="alert warning alert-block">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            
                            @if ($message = Session::get('2nd-success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif

                            <form method="post" action="{{ URL('support/document') }}" class="form-inline">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="COAform" value="tds">

                                <div class="row form-group">
                                    <div class="col-md-8">
                                        <!-- <label for="name">Product Name</label> -->
                                        <input type="text" name="prod_name" id="name" class="form-control" placeholder="Enter the Product Name" required>
                                    </div>
                                
                                    <div class="col-md-4" style="top:0; margin:auto; text-align:center;">
                                        <input type="submit" value="Search" class="btn btn-primary btn-md">
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
                        
            </div>
        </div>
    </section>

    @include('frontend_view.layouts.contact_section')
    @endsection