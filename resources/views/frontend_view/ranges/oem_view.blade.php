@extends('frontend_view.layouts.layout')
    @section('content')


    @include('frontend_view.layouts.breadcrumb_nav')
    <section class="bg-image" style="background-image: url(&quot;../../assets/images/product/oem/oem_banner.jpg&quot;); height: 60vh; background-position: 50% 1%; min-height: 150px;background-attachment:scroll;background-repeat:repeat;" data-stellar-background-ratio="0.5" id="home-border"> 
        <div class="row justify-content-center align-items-center" style="height:60vh;min-height:300px;">
            <div class="col-md-7">
                    <h1 class="heading text-uppercase" data-aos="fade-right">Launch <span class="themeTextColor">Your</span></h1>
                    <h1 class="heading text-uppercase" data-aos="fade-up" style="margin-left:40px;">Own <span class="themeTextColor">Brand</span></h1>
                <p class='button-margin-15 text-white text-uppercase' data-aos="fade-up" data-aos-delay="300" style="font-size:30px;">Private Label Manufacturing</p>
                <p class='button-margin-15 text-uppercase themeTextColor' data-aos="fade-up" data-aos-delay="300" style="font-size:30px;">OEM <span style="font-size:20px; color:#000;'">One Stop Service!</span></p>
            </div>
        </div>
    </section>


    <section class="site-section gradient-left-to-right text-center" id="oem_gradient_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate text-uppercase">
                        <h3>
                            <span class="icon-check2"><span><label style="margin-left:10px;">Any Combinitation of Test Parameters</label><br/>
                            <span class="icon-check2"><span><label style="margin-left:10px;">Customisable Detection Range</label><br/>
                            <span class="icon-check2"><span><label style="margin-left:10px;">Flexible Packaging options</label><br/>
                            <span class="icon-check2"><span><label style="margin-left:10px;">Low Quantity Start-Up</label><br/>
                            <span class="icon-check2"><span><label style="margin-left:10px;">Bespoke End To End Service</label><br/>
                            <span class="icon-check2"><span><label style="margin-left:10px;">In-house R&D Team</label><br/>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section-hero bg-image" style="background-image: url(&quot;../../assets/images/product/oem/oem_strip.jpg&quot;); height: 30vh; background-position: 50% 20.164px; min-height:250px;background-attachment:scroll;background-repeat:repeat;" data-stellar-background-ratio="0.5" id="oem-strip"> 
        <div class="container" style="max-width:1440px;">
            <div class="row justify-content-center align-items-center" style="min-height: 250px; height: 30vh;">
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <img src="{{ URL('assets/images/small_images/uk_flag.png'); }}" alt="Made In UK Image" class="img-fluid" style="width:30%;"/>
                    <div class="text-white">
                        <p>Made In UK</p>
                        <p>Test Strip & Filtration</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <img src="{{ URL('assets/images/small_images/tick.png'); }}" alt="High Quality Image" class="img-fluid" style="width:30%;"/>
                    <div class="text-white">
                        <p>High Quality</p>
                        <p>Test Strip & Filtration</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <img src="{{ URL('assets/images/small_images/test_tube.png'); }}" alt="Original Image" class="img-fluid" style="width:30%;"/>
                    <div class="text-white">
                        <p>Original</p>
                        <p>Test Strip & Filtration</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                    <img src="{{ URL('assets/images/small_images/tick.png'); }}" alt="Custom Order Image" class="img-fluid" style="width:30%;"/>
                    <div class="text-white">
                        <p>Custom Order</p>
                        <p>Test Strip & Filtration</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="site-section lighter-bg" id="contact_us">
        <div class="container">


            <div class="row justify-content-center">
            
            <div class="col-md-12 text-center">
                <h3 class="themeTextColor"><b>Any product customised with your company branding to suite your requirements</b></h3>
            </div>

            <div class="col-md-12">

                <div class="d-block d-md-flex mt-5">
                
               <div class="col-md-6 col-sm-6" >
                    <div class="mr-md-auto">
                        <label>&nbsp;</label>
                        <label> Private label or customised requests can be easily fulfilled with any of our class leading rapid tests or filtration products, whatever the requirements. We will work with you to design the artwork, help you with your company branding and provide custom designed colour charts.</label>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6" >
                    <div class="mr-md-auto mr-2">
                    <ul class="ul-check list-unstyled success">
                        <label>Available Options:</label>
                        <li>From individually sealed test strips to any quantity in a tube. </li>
                        <li>Tailor made solutions for innovative ideas. </li>
                        <li>British made, offering the most cost effective product with class leading quality. </li>
                    </ul>
                    </div>
                </div>
                

                </div>
            </div>            



        </div>
    </section>

    @include('frontend_view.layouts.contact_section')
    @endsection