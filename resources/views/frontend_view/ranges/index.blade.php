@extends('frontend_view.layouts.layout')
  @section('content')
<style>
  .owl-stage .owl-item{
      .item {
        p{
          margin:0px;
          color: #000;
        }
        img {
          height:auto; 
          padding:20px 5px;
          border-radius: 30%;
      }
      img:hover{
        border-radius:50%;
        opacity:0.5;
      }
    }
  }

  .owl-stage .owl-item img{
    height:auto; 
    padding:20px 5px;
    border-radius: 30%;
  }

.bg-scroll {
  background-attachment: scroll !important;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 50%; /* Adjust the width to cover half of the image */
    height: 100%;
    background: rgba(255, 255, 255, 0.7); /* Adjust the last value (0.5) for opacity */
  }
  #meet .overlay{
    background: #000;
  }

</style>
    <div class="container-fluid">
      @include('frontend_view.layouts.breadcrumb_nav')
                
        <section class="intro_section" id="range-slider">
          <div id="carousel-thumb" class="carousel carousel-thumbnails slide" data-ride="carousel" data-interval="2500">
              <div class="carousel-inner" role="listbox">
                    <!-- <div class="carousel-item active carousel-banner"> -->

                <?php if($range_data[0]->prod_id=='1') {  ?>
                <div class="carousel-item active">
                  <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/product/filtration/banner/rapid_test_banner.jpg') }}" alt="First slide" >
                  <div class="row carousel-ban-text-adj">
                    <div class="row col-12">
                      <h1 class="col-12 carousel-header-adj"><b>Rapid Tests</b></h1>
                      <h2 class="col-12 carousel-paragraph themeTextColor">Quick, Accurate & Easy </h2>
                      <p class="nsr22" style="font-weight:200;">Industry leading results </p>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/slider_2.png') }}" alt="Second slide">
                  <div class="row carousel-ban-text-adj">
                    <div class="row col-12">
                      <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                      <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elite. </p>
                      <a href="/internet" class="btn btn-primary btn-large col-md-3">Neque porro</a>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/slider_3.png') }}" alt="Third slide">
                  <div class="row carousel-ban-text-adj">
                      <div class="row col-12">
                        <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                        <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a href="/#" class="btn btn-primary btn-large col-md-3">Neque porro</a>
                      </div>
                    </div>
                  </div>
                </div>
                <?php }else if($range_data[0]->prod_id=='2') { ?>
                  <div class="carousel-item active">
                    <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/product/filtration/banner/filtration_banner.jpg') }}" alt="First slide">
                    <div class="row carousel-ban-text-adj">
                      <div class="row col-12">
                        <h1 class="col-12 carousel-header-adj"><b>Filtration</b></h1>
                        <h2 class="col-12 carousel-paragraph themeTextColor">Provising solutions for all requirements </h2>
                        <p class="nsr22" style="font-weight:200;">Guranteed highest grade quality</p>
                      </div>
                    </div>
                  </div>

                  <?php }else if($range_data[0]->prod_id=='3') { ?>
                  <div class="carousel-item active">
                    <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/product/filtration/banner/pool_testing_banner.jpg') }}" alt="First slide"/>
                    <div class="overlay"></div>
                    <div class="row carousel-ban-text-adj">
                      <div class="row col-12">
                        <h1 class="col-12 carousel-header-adj"><b>Pool & Spa</b></h1>
                        <h2 class="col-12 carousel-paragraph themeTextColor">Columetric & Titrimetric </h2>
                        <p class="nsr22" style="font-weight:200;">Water Analysis with distinctive color reactions </p>
                      </div>
                    </div>
                  </div>

                  <?php }else if($range_data[0]->prod_id=='4') { ?>
                  <div class="carousel-item active">
                    <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/product/aquarium/banner/aquarium_banner.png') }}" alt="First slide">
                    <div class="overlay"></div>
                        <div class="row carousel-ban-text-adj">
                    <div class="row col-12">
                      <h1 class="col-12 carousel-header-adj"><b>Chec2o Aquarium</b></h1>
                      <h2 class="col-12 carousel-paragraph themeTextColor">Multiple & Single </h2>
                      <p class="nsr22" style="font-weight:200;">Testing Strips </p>
                    </div>
                  </div>
                </div>
                  <?php }else if($range_data[0]->prod_id=='5') { ?>
                  <div class="carousel-item active">
                  <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/product/filtration/banner/visual_test_kit_banner.jpg') }}" alt="First slide">
                  <div class="overlay"></div>
                        <div class="row carousel-ban-text-adj">
                    <div class="row col-12">
                      <h1 class="col-12 carousel-header-adj"><b>Visual test Kits</b></h1>
                      <h2 class="col-12 carousel-paragraph themeTextColor">Columetric & Titrimetric </h2>
                      <p class="nsr22" style="font-weight:200;">Water Analysis with distinctive color reactions </p>
                    </div>
                  </div>
                </div>
                  <?php } else if($range_data[0]->prod_id=='8') { ?>
                  <div class="carousel-item active">
                  <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/product/filtration/banner/visual_test_kit_banner.jpg') }}" alt="First slide">
                  <div class="overlay"></div>
                        <div class="row carousel-ban-text-adj">
                    <div class="row col-12">
                      <h1 class="col-12 carousel-header-adj"><b>HealthCare</b></h1>
                      <h2 class="col-12 carousel-paragraph themeTextColor">Columetric & Titrimetric </h2>
                      <p class="nsr22" style="font-weight:200;">Water Analysis with distinctive color reactions </p>
                    </div>
                  </div>
                </div>
                  <?php } else{ ?>

                <div class="carousel-item ">
                  <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/slider_2.png') }}" alt="Second slide">
                        <div class="row carousel-ban-text-adj">
                    <div class="row col-12">
                      <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                      <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elite. </p>
                      <a href="/internet" class="btn btn-primary btn-large col-md-3">Neque porro</a>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/slider_3.png') }}" alt="Third slide">
                  <div class="row carousel-ban-text-adj">
                    <div class="row col-12">
                      <h1 class="col-12 carousel-header-adj">Lorem Ipsum</h1>
                      <p class="col-12 carousel-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                      <a href="/#" class="btn btn-primary btn-large col-md-3">Neque porro</a>
                    </div>
                  </div>
                </div>
              </div>

              <?php } if($range_data[0]->prod_id=='1') { ?>
              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <ol class="carousel-indicators">
                <li data-target="#carousel-thumb" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-thumb" data-slide-to="1"></li>
                <li data-target="#carousel-thumb" data-slide-to="2"></li>
              </ol>
              <?php } ?>

          </div>
        </section>



        <!-- <section class="site-section lighter-bg" id="prod_content_section"> -->
        <section class="site-section lighter-bg" id="meet">
          <div class="container">
            <div class="row justify-content-center general-text-color">

                <div class="col-md-12 text-center general-text-color">
                @if($range_data->isNotEmpty())
                    <h2 class="mb-4 bold-text">{!! $range_pro_data[0]->range_name !!} Range</h2>
                    <p class="mb-5 nsr22">{!! $range_data[0]->range_desc !!}</p>
                  @endif
                </div>
              
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">

                        <div class="row text-center">
                            <?php
                            $col_val=  '';
                              if(!empty($range_pro_data) && isset($range_pro_data) ) {
                                $col_val = count($range_pro_data);
                                if($col_val==1) {
                                  $col_val = '12';
                                }else if($col_val==2) {
                                  $col_val = '6';
                                } else if($col_val>=3) { 
                                  $col_val = '4';
                                }

                                foreach($range_pro_data as $index => $range) {
                                    if(!empty($range->prod_name)) {
                                      $url_ranges_page = strtolower(str_replace(' ', '_', $range->range_name));
                                    ?>
                                      
                                      <div class="col-md-{{$col_val}} ranges_prod">
                                        <a href="{{ url($range->prod_url) }}">
                                          <div class="img_hover_color">
                                                @if($range->prod_images=='')
                                                  <img src="{{ asset('assets/images/product/filter-boxes.png') }}" alt="Landing_images" width="100%" />
                                                @else
                                                  <img src="{{ URL($range->prod_images) }}" alt="<?php echo $range->prod_name; ?>" width="100%"/>
                                                @endif
                                              
                                                <div class="overlay">
                                                  <div class="text" style="width:100%;">
                                                    <text class="text-white">{!! $range->prod_detail !!}</text>
                                                  </div>
                                                </div>
                                          </div>
                                        </a>
                                        @php
                                          $originalString = $range->prod_name;
                                          $search = "®";
                                          $html = "<sup>®</sup>"; // Sup tag
                                          $range->prod_name = Helper::insertHTMLAtStringPosition($originalString, $search, $html);
                                        @endphp

                                          <div class="range_name">
                                            <label class="nsm20">{!! $range->prod_name; !!}</label>
                                          </div>

                                        
                                      </div>

                                  <?php }
                                }
                              }
                            ?>
                        </div><!-- row -->
                    </div> <!-- card header -->
                  </div> <!--card -->
                </div> <!-- col-md-12 -->

            </div><!-- Row -->
          </div><!-- Container -->
        </section>


        <?php if($range_data[0]->prod_id=='3' || $range_data[0]->prod_id=='4' || $range_data[0]->prod_id=='5' || $range_data[0]->prod_id=='8') { ?>
          <section class="site-section-hero bg-image" style="height: 30vh; min-height: 250px; background:#239aff;" data-stellar-background-ratio="0.5" id="blue-banner"> 
            <div class="container">
                <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 30vh;">
                    
                    <div class="col-md-12 ">
                    

                        <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 30vh;">
                            <div class="col-md-8">
                                <div data-aos="fade-up" data-aos-delay="100" class="aos-init text-white aos-animate px-md-4">
                                    {{-- @if($range_data[0]->prod_id=='3') --}}
                                      <h3 class="bold-text">Explore the Water Analysis Range</h3>
                                    {{-- @endif  --}}
                                    <h4 class="mt-0">For All Your Testing Needs at <a class="text-white" href="https://draft.check2o.com/">www.check2o.com/ </a></h4>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <img alt="check20logo" src="{{ URL('assets/images/product/Check2Ologo.png') }}" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
          </section>
        <?php } else { ?>
        <section class="service-logo" style="" data-stellar-background-ratio="0.5" id="industry-section-carousel">
          
          <div class="row justify-content-center align-items-center">
              <div class="col-md-12 text-white text-center">
                    <h2 class="heading bold-text" data-aos="fade-right"> Products By Industry Sectors</h2>
              </div><!-- col-md-7 -->

              <div class="col-md-12">
                <div class="owl-carousel slide-one-item home-slider">
                    <div class="item"> 
                      <a href="{{ URL('product/industries') }}">
                        <img src="{{ asset('../assets/images/product/industry/view_all.jpg') }}" alt="Image" class="mx-auto img-fluid w-50"> <p class="text-center">View All</p>
                      </a>
                    </div>

                  <?php if(!empty($industry_data)){
                    foreach($industry_data as $data){
                      if($data->range_id=='6') { 
                              $redirect_url = URL($data->prod_url);
                              if(!empty($data->prod_images)){
                                $img_url = URL('../assets/images/'.$data->prod_images); 
                              }else{
                                $img_url = URL('../assets/images/product/industry/default-image.png'); 
                              }
                      ?>
                    <div class="item">
                      <a href="<?php echo $redirect_url; ?>">
                        <img src="<?php echo $img_url; ?>" alt="Image" class="mx-auto img-fluid w-50" > <p class="text-center">{{ $data->prod_name }}</p>
                      </a>
                    </div>
                      <?php }

                      }
                  } ?>
                </div>
              </div><!-- col-md-12 -->

            </div><!-- Row -->
        </section>
        <?php } ?>

      @include('frontend_view.layouts.contact_section')
                
    </div>
        <!-- </main> -->
  @endsection