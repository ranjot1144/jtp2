@extends('frontend_view.layouts.layout')
    @section('content')

<style>
.centered {
  position: absolute;
  top: 30%;
  left: 25%;
  transform: translate(-50%, -50%);
}
</style>

    <!-- Breadcrumb Section Begin -->
    @include('frontend_view.layouts.breadcrumb_nav')
    
    <!-- <section class="site-section-hero bg-image" style="background-image: url(&quot;../assets/images/contact_us.png&quot;); height: 60vh; background-position: 50% 1%; min-height: 150px;" data-stellar-background-ratio="0.5" id="home-border">  -->
    <section class="zero_padding" id="top-banner">
        <div class="row ">
            <div class="col-md-12">
                <img src="{{ URL('/assets/images/support/environmental_imprint.jpg') }}" alt="banner"/>
                <h1 class="centered bold-text">
                    <span class="text-white">Environmental </span>
                    <br/><span style="">Imprint </span>
                </h1>
            </div>
        </div>
    </section>

    <section class="site-section lighter-bg" id="imprint_content">
        <div class="container">

            <div class="row justify-content-center">
            
                <div class="col-md-12 text-center general-text-color aos-init aos-animate" data-aos="fade-right">
                    <h3 class="themeTextColor mt-0 mb-0"><b> We are commited to the environment, our packaging is made from 50% recycled materials and is widely recyclable. </b></h3>

                    <p class="mt-5 mb-5 nsr22">Best efforts are made to reduce our carbon footprint, such as unplugging devices <br/>and ensuring machinery is only operated when needed.</p>
                    <p class="mt-5 nsr22">Our production is also considered, so any waste material during the production <br/>process are either reassembled or recycled.</p>
                </div>
                


            </div> <!-- row close-->
        </div> <!-- Container close -->
    </section>

    @include('frontend_view.layouts.contact_section')
    @endsection