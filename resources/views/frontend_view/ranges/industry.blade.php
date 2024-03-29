@extends('frontend_view.layouts.layout')
    @section('content')


    @include('frontend_view.layouts.breadcrumb_nav')
    <section class="zero_padding">
        <div class="row ">
            <!-- <div class="col-md-12">
                <img src="{{ url('/assets/images/product/industry/industry_banner.jpg'); }}" alt="Filter Finder Header" style="width:100%; height:450px;"/>
                <div class="top-left">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12">
                            <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                <h2 class="bold-text" data-aos="fade-right"> Supplying Your Testing Needs</h2>
                                <h2 class="themeTextColor mb-3">For All Industries </h2>
                                <p class="nsr22">Reliable, Percise & Innovative </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="carousel-item active">
                    <img class="d-block w-100 carousel-img-fit" src="{{ URL('/assets/images/product/industry/industry_banner.jpg') }}" alt="First slide"/>
                    <div class="overlay"></div>
                    <div class="row carousel-ban-text-adj">
                      <div class="row col-12">
                        <h1 class="col-12 carousel-header-adj"><b>Supplying Your Testing Needs</b></h1>
                        <h2 class="col-12 carousel-paragraph themeTextColor">For All Industries  </h2>
                        <p class="nsr22" style="font-weight:200;">Reliable, Percise & Innovative </p>
                      </div>
                    </div>
                  </div>
        </div>
    </section>


    <section class="site-section lighter-bg" id="industry_body">
        <div class="container">

            <div class="row justify-content-center">
            
                <div class="col-md-12 text-center">
                    <h1 class="themeTextColor">Industries</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod<br/>
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                </div>

                <div class="col-md-12">

                        <div class="container">
                            <div class="row justify-content-center text-uppercase ">

                            
                            @if ($industry_data->isNotEmpty())
                                @foreach($industry_data as $val)
                                @php 
                                    $col = '';
                                    $color = '';
                                @endphp
                                    @if($val->id=="9")
                                        @php 
                                            $col = 'lab_col';
                                            $color = '#9AA5B6';
                                        @endphp
                                    @elseif($val->id=="10")
                                        @php 
                                            $col = 'health_col';
                                            $color = '#42AD49';
                                        @endphp
                                    @elseif($val->id=="11")
                                        @php 
                                            $col = 'food_col';
                                            $color = '#F47F72';
                                        @endphp
                                    @elseif($val->id=="12")
                                        @php 
                                            $col = 'edu_col';
                                            $color = '#febd1b';
                                        @endphp
                                    @elseif($val->id=="13")
                                        @php 
                                            $col = 'env_col';
                                            $color = '#244C26';
                                        @endphp
                                    @elseif($val->id=="14")
                                        @php 
                                            $col = 'cos_col';
                                            $color = '#A61D36';
                                        @endphp
                                    @elseif($val->id=="15")
                                        @php 
                                            $col = 'ind_col';
                                            $color = '#C18F5D';
                                        @endphp
                                    @elseif($val->id=="28")
                                        @php 
                                            $col = 'water_col';
                                            $color = '#12A2B9';
                                        @endphp
                                    @endif
                                <div class="col-md-3 col-sm-6">
                                    <div class="teaser hover_icon text-center">
                                        <div style="border-top:5px solid {{$color}};border-top-left-radius:5px; border-top-right-radius:5px;"> 
                                            <img class="mt-3 image-90" src="{{ url('/assets/images/'.$val->prod_images) }}" style="height:auto; border-radius:50%;" /> </div>
                                            <p class="mt-3 hover-color2 {{$col}} industry_content_css">
                                                <a href="{{ url($val->prod_url) }}" class="text-white bold-text"> {{ $val->prod_name; }}</a>
                                            </p>
                                        </div>
                                </div>
                                @endforeach
                            @endif
                                
                                <!-- <div class="col-md-3 col-sm-6">
                                    <div class="teaser hover_icon text-center">
                                    <div> 
                                        <img class="image-100" src="{{ url('assets/images/industry/lab.png') }}" style="height:170px; border-radius:50%;"> </div>
                                        <h4 class="topmargin_20 hover-color2 lab_col industry_content_css"> Laboratory</h4>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="teaser hover_icon text-center">
                                    <div> 
                                        <img class="image-100" src="{{ url('assets/images/industry/healthcare.png') }}" style="height:170px; border-radius:50%;"> </div>
                                        <h4 class="topmargin_20 hover-color2 health_col industry_content_css"> Healthcare</h4>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="teaser hover_icon text-center">
                                    <div> 
                                        <img class="image-100" src="{{ url('assets/images/industry/food.png') }}" style="height:170px; border-radius:50%;"> </div>
                                        <h4 class="topmargin_20 hover-color2 food_col industry_content_css"> Food & Beverages</h4>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="teaser hover_icon text-center">
                                    <div> 
                                        <img class="image-100" src="{{ url('assets/images/industry/education.png') }}"  style="height:170px; border-radius:50%;"> </div>
                                        <h4 class="topmargin_20 hover-color2 edu_col industry_content_css"> <a href="{{ url('frontend/product/industry/education') }}">Education</a></h4>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-6">
                                    <div class="teaser hover_icon text-center">
                                    <div> 
                                        <img class="image-100" src="{{ url('assets/images/industry/environment.png') }}" style="height:170px; border-radius:50%;"> </div>
                                        <h4 class="topmargin_20 hover-color2 env_col industry_content_css"> Environmental</h4>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="teaser hover_icon text-center">
                                    <div> 
                                        <img class="image-100" src="{{ url('assets/images/industry/cosmetic.png') }}" style="height:170px; border-radius:50%;"> </div>
                                        <h4 class="topmargin_20 hover-color2 cos_col industry_content_css"> Cosmetics</h4>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="teaser hover_icon text-center">
                                    <div> 
                                        <img class="image-100" src="{{ url('assets/images/industry/industrial.png') }}" style="height:170px; border-radius:50%;"> </div>
                                        <h4 class="topmargin_20 hover-color2 ind_col industry_content_css"> Industrial</h4>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6">
                                    <div class="teaser hover_icon text-center">
                                    <div> 
                                        <img class="image-100" src="{{ url('assets/images/industry/water_treatment.png') }}"  style="height:170px; border-radius:50%;"> </div>
                                        <h4 class="topmargin_20 hover-color2 water_col industry_content_css"> Water Treatment</h4>
                                    </div>
                                </div> -->

                            </div>
                        </div>            
                </div>
            </div>

        </div>
    </section>

    @include('frontend_view.layouts.contact_section')
    @endsection