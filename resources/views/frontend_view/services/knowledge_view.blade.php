@extends('frontend_view.layouts.layout')
    @section('content')

    @include('frontend_view.layouts.breadcrumb_nav')
    <section class="site-section-hero bg-image" style="background-image: url(&quot;../../../assets/images/support/news_banner.png&quot;); height: 60vh; background-position: 50% 1%; min-height: 150px;" id="home-border"> 
        <div class="container">
            <div class="row justify-content-center  align-items-center" style="height: 60vh;">
                <div class="col-md-12 ">

                    <div class="row justify-content-center  align-items-center" style="height: 50vh;">
                        <div class="col-md-12">
                            <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                <h1 class="text-white">Knowledge Hub</h1>
                                <h1 class="themeTextColor">Product Annoucement</h1>
                                <p class="text-white" style="margin-bottom:0px;"><b>StripCheck app release</b></p>
                                <text class="text-white" ><b>What is StripCheck ?</b></text><br/>
                                <text class="text-white" >StripCheck goes beyond the apps currently<br/>available on the market</text>
                                <br/>
                                <p class="text-white"  style="margin-top:10px;">Nov 27, 2023</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="site-section lighter-bg" id="section-nav">
        <div class="container">
            <div class="row justify-content-center general-text-color">


                    
                   <div class="col-md-12 text-center">
                        
                        <figure class="mb-12">
                            <div class="row columns_margin_bottom_20">


                            
                                
                                <div class="col-md-6">
                                    <div class="img_hover_color">
                                        <img src="{{ url('assets/images/support/strip_check.png') }}" alt="Snow" style="width:55%;">
                                    </div>

                                    <div class="another-text" style="text-align:left; margin:0 22.5%;">
                                        <label class="themeTextColor" style="margin-top:10px;font-weight:700;">Development</label>
                                        <br/>
                                        <p><b>StripCheck app release <br/>What is StripCheck ?</b></p>
                                        <p>StripCheck goes beyond the apps currently<br/>available on the market</p>
                                        <p style="margin-top:10px;">Nov 27, 2023</p>
                                    </div>

                                </div>
                                
                                <div class="col-md-6">
                                    <div class="img_hover_color">
                                        <img src="{{ url('assets/images/support/strip_check.png') }}" alt="Snow"  style="width:55%;">
                                    </div>

                                    <div class="another-text" style="text-align:left; margin:0 22.5%;">
                                        <label class="themeTextColor" style="margin-top:10px;font-weight:700;">Development</label>
                                        <br/>
                                        <p><b>StripCheck app release <br/>What is StripCheck ?</b></p>
                                        <p>StripCheck goes beyond the apps currently<br/>available on the market</p>
                                        <p style="margin-top:10px;">Nov 27, 2023</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="img_hover_color">
                                        <img src="{{ url('assets/images/support/strip_check.png') }}" alt="Snow"  style="width:55%;">
                                    </div>

                                    <div class="another-text" style="text-align:left; margin:0 22.5%;">
                                        <label class="themeTextColor" style="margin-top:10px;font-weight:700;">Development</label>
                                        <br/>
                                        <p><b>StripCheck app release <br/>What is StripCheck ?</b></p>
                                        <p>StripCheck goes beyond the apps currently<br/>available on the market</p>
                                        <p style="margin-top:10px;">Nov 27, 2023</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="img_hover_color">
                                        <img src="{{ url('assets/images/support/strip_check.png') }}" alt="Snow"  style="width:55%;">
                                    </div>

                                    <div class="another-text" style="text-align:left; margin:0 22.5%;">
                                        <label class="themeTextColor" style="margin-top:10px;font-weight:700;">Development</label>
                                        <br/>
                                        <p><b>StripCheck app release <br/>What is StripCheck ?</b></p>
                                        <p>StripCheck goes beyond the apps currently<br/>available on the market</p>
                                        <p style="margin-top:10px;">Nov 27, 2023</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="img_hover_color">
                                        <img src="{{ url('assets/images/support/strip_check.png') }}" alt="Snow"  style="width:55%;">
                                    </div>

                                    <div class="another-text" style="text-align:left; margin:0 22.5%;">
                                        <label class="themeTextColor" style="margin-top:10px;font-weight:700;">Development</label>
                                        <br/>
                                        <p><b>StripCheck app release <br/>What is StripCheck ?</b></p>
                                        <p>StripCheck goes beyond the apps currently<br/>available on the market</p>
                                        <p style="margin-top:10px;">Nov 27, 2023</p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="img_hover_color">
                                        <img src="{{ url('assets/images/support/strip_check.png') }}" alt="Snow"  style="width:55%;">
                                    </div>

                                    <div class="another-text" style="text-align:left; margin:0 22.5%;">
                                        <label class="themeTextColor" style="margin-top:10px;font-weight:700;">Development</label>
                                        <br/>
                                        <p><b>StripCheck app release <br/>What is StripCheck ?</b></p>
                                        <p>StripCheck goes beyond the apps currently<br/>available on the market</p>
                                        <p style="margin-top:10px;">Nov 27, 2023</p>
                                    </div>
                                </div>

                            </div>
                        </figure>
                </div>
                    
                        
            </div>
        </div>
    </section>

    @include('frontend_view.layouts.contact_section')
    @endsection