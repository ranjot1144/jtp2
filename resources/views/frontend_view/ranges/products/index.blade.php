@extends('frontend_view.layouts.layout')
    @section('content')
        
    <!-- <main class="main-content">
       <div class="container-fluid"> -->

       <style>
        .main-content-srip-image::before {
          content: "";
          display: block;
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-image: linear-gradient(to right, #f15b29 ,20%, #f5851e); /* Change the color and opacity as needed */
          opacity:0.9;
        }
        </style>
            @include('frontend_view.layouts.breadcrumb_nav')

            @php 
              $cat_name = '';
              $colorclass = ''; 
            @endphp

            @if(isset($cat_data[0]->cat_name) && !empty($cat_data[0]->cat_name) ) 
              @php
                $cat_name = $cat_data[0]->cat_name;
                $cat_range = $cat_data[0]->cat_ranges;
              @endphp
            @endif

            @if($range_data->isNotEmpty() ) 
              @if(!empty($range_data) && $range_data[0]->range_id=='1')
                @php $colorclass = 'rapid_text_color'; @endphp
              @elseif(!empty($range_data) && $range_data[0]->range_id=='2')
                @php $colorclass = 'filtration_text_color'; @endphp
              @elseif(!empty($range_data) && $range_data[0]->range_id=='4')
                @php $colorclass = 'aquarium_text_bac_color'; @endphp
              @elseif(!empty($range_data) && $range_data[0]->range_id=='8')
                @php $colorclass = 'health_text_col'; @endphp
              @endif
            @else
              @php $colorclass = 'filtration_text_color'; @endphp
            @endif

               <?php if($range_data->isNotEmpty()) {
                          if($range_data[0]->prod_id=='8') { // For Filter Finder ?>

                  <section class="zero_padding" id="product_banner">
                      <div class="row ">
                          <div class="col-md-12">
                              <img src=" {{ URL('/assets/images/filter_finder/filter_finder_header.jpg') }} " alt="Filter Finder Header1"/>
                              <div class="top-left">
                                <div class="row justify-content-center align-items-center">
                                      <div class="col-md-12">
                                          <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                            <h2 class="bold-text" data-aos="fade-right"> Find Your equivalent <span class="themeTextColor">Filter</span></h2>
                                            <h3 class="text-white" data-aos="fade-right">Within our Johnson Test Papers Range</h3>
                                          </div>
                                      </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </section>


                  <section class="site-section lighter-bg" id="filter_finder_section">
                    <div class="container">
                      <div class="row justify-content-center ">
                        
                        <div class="col-md-12 general-text-color">
                          <p class="text-center mb-2">Johnson</p>
                          <h2 class="mb-5 text-center"><b>{!! $range_data[0]->prod_name !!}</b></h2>
                          <div class="content_description text-center">{!! $prod_desc_data[0]->pd_desc !!}</div>
                        </div>
                      </div>
                    </div>
                  </section>


                  <section class="site-section-hero " style="background-image: url(&quot;../../assets/images/filter_finder/filter_finder_background_strip.jpg&quot;); height: 25vh; background-position: center; min-height:250px;" data-stellar-background-ratio="0.5" id="test-strip-filteration"> 
                    <div class="container">
                        <div class="row justify-content-center align-items-center" style="min-height: 250px; height: 30vh;">

                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <img src="{{ URL('assets/images/small_images/uk_flag.png'); }}" alt="Made In UK Image" class="img-fluid" style="width:30%;"/>
                                <div class="text-white">
                                    <p>Step One</p>
                                    <p>Select Manufacturer</p>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <img src="{{ URL('assets/images/small_images/tick.png'); }}" alt="High Quality Image" class="img-fluid" style="width:30%;"/>
                                <div class="text-white">
                                    <p>Step Two</p>
                                    <p>Select a Grade</p>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <img src="{{ URL('assets/images/small_images/test_tube.png'); }}" alt="Original Image" class="img-fluid" style="width:30%;"/>
                                <div class="text-white">
                                    <p>Step Three</p>
                                    <p>View Result</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>

                <section class="site-section lighter-bg " id="section-contact">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-md-12">

                        <form action="#">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                          <div class="row form-group">
                              <div class="col-md-6">
                                
                                <label for="manufacturer"><b>Manufacturer</b></label>
                                <select name="manufacturer_select" id="manufacturer" class="form-control" autocomplete="off" required>
                                  <option default selected disabled>Please select Manufacturer</option>
                                    @if($man_data->isNotEmpty())
                                      @foreach($man_data as $val)
                                        <option value="{{$val->id}}">{{$val->manufacturer_name}}</option>
                                      @endforeach
                                    @endif
                                </select>
                              </div>

                              <div class="col-md-6">
                                <label for="grade"><b>Grade</b></label>
                                <select name="grade_select" id="filter-grades" class="form-control" autocomplete="off" required>
                                  <option default selected>Please select Grade</option>
                                </select>
                              </div>
                          

                            <div class="col-md-4">
                              <h3 class="mt-5">Our recommendation:</h3>
                            </diV>
                            <div class="col-md-6">
                              <h3 class="mt-5 recommendation_id"></h3>
                            </diV>

                          </div>

                        </form>                        
                        <div class="col-md-12 text-center contactUs_enquiry_button">
                            <a href="" class="btn btn-primary btn-md manage_link">View Product</a>
                        </div>

                      </div>
                    </div>
                  </div>
                </section>

                <?php }  else{ ?>


                <section class="zero_padding" id="product_banner">
                  <div class="row">
                      <div class="col-md-12">
                          <img src="{{ url('/assets/images/product/industry/industry_banner.jpg'); }}" alt="Filter Finder Header" style="width:100%; display:block;"/>
                            @if($range_data[0]->range_id=='1')
                            <div class="top-left">
                              <div class="row justify-content-center align-items-center">
                                  <div class="col-md-12">
                                      <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                                        <h2 class="themeTextColor bold-text mb-3 border-left-bar px-md-4" data-aos="fade-right"> {!! $range_data[0]->prod_name !!}</h2>
                                        <p class="nsr25 line_height mt-5">{!! $range_data[0]->prod_desc !!}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                            @endif
                            @if($range_data[0]->range_id=='2' || $range_data[0]->range_id=='8')
                            <div class="top-left">
                              <div class="row justify-content-center align-items-center">
                                  <div class="col-md-12">
                                      <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                                        <h2 class="{{$colorclass}} bold-text mb-3 border-left-bar px-md-4" data-aos="fade-right"> {!! $range_data[0]->prod_name !!}</h2>
                                        <p class="nsr25 line_height mt-5">{!! $range_data[0]->prod_desc !!}</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                            @endif
                      </div>
                  </div>
                </section>


              @if($range_data->isNotEmpty())
                @if($range_data[0]->prod_id=='5') 
                  <section class="site-section lighter-bg" id="grade-finder" style="border-bottom:1px solid #d3d3d3;">
                    <div class="container">
                      <div class="row justify-content-center ">
                        
                        <div class="col-md-12 general-text-color mb-5">
                          <h3 class="mb-4 text-center bold-text">Grade Finder</h3>
                          <p>{!! $prod_desc_data[0]->pd_desc; !!}</p>
                        </div>

                        <div class="col-md-12">

                            <form action="#">
                            <meta name="csrf-token" content="{{ csrf_token() }}">

                              <div class="row form-group">
                                  <div class="col-md-3">
                                    <label for="manufacturer"><b>Available Thimbles: </b></label>
                                  </div>

                                  <div class="col-md-3">
                                    <label for="grade">Type</label>
                                    <select name="grade_select" id="grade" class="form-control" autocomplete="off" required>
                                      <option selected disabled>Select Type</option>
                                        <?php foreach($cat_data as $cat) { ?>
                                          <option value="{{$cat->cat_id}}" cat_url=<?php echo $cat->cat_url; ?>>{{ $cat->cat_name }}</option>
                                        <?php } ?>
                                    </select>
                                  </div>
                                  
                                  <div class="col-md-3">
                                    <label for="grade_select">Diameter</label>
                                    <select name="grade_select" id="diameter" class="form-control" autocomplete="off" required>
                                      <option selected disabled>Select Diameter</option>
                                    </select>
                                  </div>

                                  <div class="col-md-3">
                                    <label for="height">Height</label>
                                    <select name="grade_select" id="height" class="form-control" autocomplete="off" required>
                                      <option selected disabled>Select Height</option>
                                    </select>
                                  </div>
                              </div>

                              <div class="row form-group mt-5">
                                  <div class="col-md-12 text-center">
                                    <!-- <input type="submit" value="View Product" class="btn btn-primary btn-md"> -->
                                    <a href="#" id="view-product" value="View Product" class="btn btn-primary btn-md">View Product</a>
                                  </div>
                              </div>

                            </form>
                              
                        </div>
                      </div>
                    </div>
                </section>
                @endif
              @endif


                <section class="site-section lighter-bg content-padding" id="prod_content_section">
                    <div class="container">
                      <div class="row justify-content-center ">
                        
                        <div class="col-md-12 general-text-color">
                            @if($range_data->isNotEmpty())
                              @if ($range_data[0]->range_id=='2')
                                <!-- <h3 class="mb-4 text-center bold-text">{{ $range_data[0]->prod_name; }}</h3> -->
                              @endif

                              @if ($range_data[0]->range_id=='1' && $range_data[0]->prod_id=='1')
                                <!-- <h3 class="text-center">Our Range of</h3> -->
                              @endif
                              
                                @if ($range_data[0]->range_id=='1' || $range_data[0]->range_id=='2' || $range_data[0]->range_id=='8')
                                          @php
                                            $originalString = $range_data[0]->prod_name;
                                            $search = "®";
                                            $html = "<sup>®</sup>"; // Sup tag
                                            $range_data[0]->prod_name = Helper::insertHTMLAtStringPosition($originalString, $search, $html);
                                          @endphp

                                  @if($range_data[0]->range_id!='8')
                                    <h2 class="mb-4 text-center bold-text">{!! trim($range_data[0]->prod_name,"s"); !!} Range</h2>
                                  @else
                                    <h2 class="mb-4 text-center bold-text">{!! $range_data[0]->prod_name !!} Range</h2>
                                  @endif
                                    
                                  @if($range_data[0]->prod_id!='5')
                                      @if($prod_desc_data->isNotEmpty())

                                          @php
                                            $originalString = $prod_desc_data[0]->pd_desc;
                                            $search = "®";
                                            $html = "<sup>®</sup>"; // Sup tag
                                            $prod_desc_data[0]->pd_desc = Helper::insertHTMLAtStringPosition($originalString, $search, $html);
                                          @endphp

                                          @if($range_data[0]->prod_id=='1')
                                            <div class="text-center content_description"><p>{!! $prod_desc_data[0]->pd_desc; !!}</p></div>
                                          @else
                                            <div class="content_description"><p>{!! $prod_desc_data[0]->pd_desc; !!}</p></div>
                                          @endif
                                      @endif
                                  @endif
                                @endif
                            @endif
                        </div>

                        <div class="col-md-12">
                          <div class="card">
                        
                          @if($range_data[0]->prod_id=='30')

                          <div class="col-md-12 general-text-color">
                            <table id="jQuant">
                              <thead>
                                <tr class="gradient-left-to-right gradient-row">
                                  <th scope="col" width="25%">Product</th>
                                  <th scope="col">Graduation</th>
                                  <th scope="col" width="15%">Presentation</th>
                                  <th scope="col" width="10%">Code</th>
                                </tr>
                              </thead>
                                <tbody>
                                    <?php if(!empty($category_presentation) && $category_presentation!='') { 
                                            foreach ($category_presentation as $key => $value) { ?>
                                              <tr>
                                                <td>{{ $value->cp_product.' '.$value->cp_range }}</td>
                                                <td>{!! $value->cp_graduation; !!}</td>
                                                <td>{!! $value->cp_presentation !!}</td>
                                                <td>{!! $value->cp_prod_code !!}</td>
                                              </tr>
                                    <?php } 
                                        } ?>
                                  
                                </tbody>
                              </table>
                          </div>

                          @else
                            <div class="card-header">
                              <div class="row text-center image-list">
                                <?php 
                                  if(!empty($cat_data) && $cat_data!='') {
                                    $url = '';
                                    $col = 'col-md-4';
                                    if(count($cat_data)>3 && count($cat_data)!=5) {
                                        $col = 'col-md-3';
                                      }else if(count($cat_data)==2) {
                                        $col = 'col-md-6';
                                      }else if(count($cat_data)==5) {
                                        $col = 'col-md-4';
                                      }

                                    foreach($cat_data as $data) {
                                      $url = $data->cat_url;
                                  ?>
                                        <div class="{{ $col }} ranges_prod">
                                          <a href="{{ URL($data->cat_url) }}">

                                            @if($data->cat_image!='')
                                              <img src="{{ URL($data->cat_image); }}" alt="Snow" class="img-fluid tab_hover" style="height:300px;">
                                            @else
                                              <img src="{{ url('assets/images/j-quant.png'); }}" alt="Snow" class="img-fluid tab_hover" style="height:300px;">
                                            @endif

                                          </a>
                                            <div class="prod_name">
                                              @php $originalString = $data->cat_name;
                                                    $search = "®";
                                                    $html = "<sup>®</sup>"; // Sup tag
                                                    $data->cat_name = Helper::insertHTMLAtStringPosition($originalString, $search, $html);
                                              @endphp
                                                <label class="" style="margin:20px 0 0;"><b>{!! $data->cat_name !!}</b></label></br>
                                              <label><b>{!! $data->cat_ranges !!}</b></label>
                                            </div>
                                        </div>
                                <?php  }
                                  }  ?>

                              </div>
                              <?php if(count($cat_data)>12) { ?>
                                <div class="content_count">
                                  <p class="text-center showing-result"></p>
                                  <a class="load-more"> Load More <span class="loading"><span></span></span></a>
                                </div>
                              <?php } ?>
                            </div>

                            @endif

                          </div>
                        </div>

                      </div>
                    </div>
                </section>
                <?php } } ?>


              <?php if($range_data[0]->range_id =='1') { ?>
                @if($range_data[0]->prod_id=='1')
                <section class="lighter-bg" id="phTestingStrip_image">
                      
                        <div class="row">
                          <div class="col-md-12 main-content-srip-image">
                              <!-- <img src="{{ asset('assets/images/filter_finder/filter_finder_header.jpg') }}" alt="Filter Finder Header"/>
                              <div class="image-center">
                                <div class="row justify-content-center align-items-center">
                                      <div class="col-md-12 text-center">
                                          <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                            <h2 class="bold-text" data-aos="fade-right"> Quick, Accurate & Easy </h2>
                                            <h3 class="text-white" data-aos="fade-right">pH Testing</h3>
                                          </div>
                                      </div>
                                </div>
                              </div> -->
                              <img src="{{ asset('assets/images/filter_finder/filter_finder_header.jpg') }} " alt="contact_img"/>
                              <div class="centered text-center">
                                    <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                        <h2 class="bold-text" data-aos="fade-right"> Quick, Accurate & Easy </h2>
                                        <h3 class="text-white" data-aos="fade-right">pH Testing</h3>
                                    </div>
                              </div>
                          </div>
                        </div>
                </section>
                        @else

                @if(count($prod_desc_data) && $prod_desc_data[0]->pd_features!='')
                  <section class="site-section lighter-bg content-padding" id="prod-section-nav">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">

                        <div class="col-md-12">
                          <div class="card">

                              <div class="card-header">

                                <ul class="nav nav-tabs navmenu">
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers active" data-myAttri="tab-1">
                                    <a  href="#tab-1" class="nav-link">Key Features</a>
                                  </li>
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-2">
                                    <a href="#tab-2" class="nav-link">Applications</a>
                                  </li>
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-3">
                                    <a href="#tab-3" class="nav-link">Industries</a>
                                  </li>
                                </ul>

                              </div>

                              <div class="card-body" id='tab-1-active'>
                                <?php if(count($prod_desc_data)) { 
                                  echo $prod_desc_data[0]->pd_features;
                                 } ?>
                              </div>

                              <div class="card-body" id='tab-2-active' style="display:none;">
                                <?php if($prod_desc_data->isNotEmpty()) { 
                                  echo $prod_desc_data[0]->pd_application;
                                 } ?>
                              </div>

                              <div class="card-body" id='tab-3-active' style="display:none;">
                                <?php if($prod_desc_data->isNotEmpty()) { 
                                  echo $prod_desc_data[0]->pd_industries;
                                } ?>
                              </div>

                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </section>
                  @endif
                @endif
              <?php } 

              if($range_data[0]->range_id=='2' && ($range_data[0]->prod_id!='8' || $range_data[0]->prod_id!='18')) { ?>

                <!-- <section class="site-section lighter-bg" id="section-bio">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">
                        
                        <div class="col-md-12">
                          <h4>General Information</h4>
                        </div>

                        <div class="col-md-12">
                          <div class="d-block d-md-flex">
                            
                            <div class="col-md-12" >
                              <div class="mr-md-auto mr-2">
                                @if($prod_desc_data->isNotEmpty())
                                  {!! $prod_desc_data[0]->pd_desc; !!}
                                @endif

                                <p class="button-margin-15" >
                                  <a href="#section-contact" class="btn btn-primary btn-md smoothscroll">Read More</a>
                                </p>

                              </div>
                            </div>
                            

                          </div>
                            
                        </div>

                      </div>
                    </div>
                </section> -->
                <?php } ?>


               @include('frontend_view.layouts.contact_section')
                
            <!-- </div>
        </main> -->
    @endsection