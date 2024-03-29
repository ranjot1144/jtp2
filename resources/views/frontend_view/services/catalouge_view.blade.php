@extends('frontend_view.layouts.layout')
    @section('content')

    @include('frontend_view.layouts.breadcrumb_nav')

    <section class="zero_padding" id="top-banner">
        <div class="row ">
            <div class="col-md-12 text-center">
                <img src="{{ URL('assets/images/contact_us_image.jpg') }} " alt="contact_img"/>
                <div class="left-centered">
                    <h1 class="bold-text">Browse our <span class="themeTextColor">catalogues</span>  </h1>
                    <h1 class="">for our full product range </h1>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section gradient-left-to-right text-center" id="catalogue-content">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-md-12">
                    <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                        <h1 class="">Catalogues </h1>
                        <p class="mb-3 nsr22">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod <br/>tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                        
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="teaser hover_icon text-center">
                        <div> <img class="catalouge_image rounded-circle" src="{{URL('assets/images/Rapid_test_cover.jpg') }}"> </div>
                            <h3 class="text-uppercase bold-text"><a href="https://www.johnsontestpapers.com/catalogue?name=rapid" class="text-white" target='_blank'> Rapid Test </a></h3>
                        </div>
                    </div>
                <div class="col-md-6 col-sm-6">
                    <div class="teaser hover_icon text-center">
                        <div> <img class="catalouge_image rounded-circle" src="{{ URL('assets/images/Filtration_cover.jpg') }}"> </div>
                            <h3 class="text-uppercase bold-text"><a href="https://www.johnsontestpapers.com/catalogue?name=filtration" class="text-white" target='_blank'> Filtration </a></h3>
                    </div>
                </div>

            </div>
        </div>
        </section>

    @include('frontend_view.layouts.contact_section')
    @endsection