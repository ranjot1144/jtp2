@extends('frontend_view.layouts.layout')
    @section('content')
        
    <!-- Breadcrumb Section Begin -->
    @include('frontend_view.layouts.breadcrumb_nav')
               
        <div class="container-fluid">
                <section class="zero_padding" id="about-us-banner">
                    <div class="container" style="max-width:100%;">
                      <div class="row justify-content-center">
                        <div class="col-md-12 text-center">
                        
                          <figure class="mb-12 aos-init aos-animate zero_margin" data-aos="fade-up">
                              <!-- <img src="http://127.0.0.1:8000/assets/images/person_3.jpg" alt="Image" class="img-fluid w-50 rounded"></figure> -->
                              <div class="row columns_margin_bottom_20">
                                
                                <div class="col-md-4 col-sm-6 aboutusBackColor text-white">
                                  <div class="img_hover_color">
                                      <!-- <div class="teaser_icon"> -->
                                      <div class="">
                                        <img src="{{ asset('assets/images/related_image/made_in_uk.png') }}">
                                      </div>
                                    <h2 class="hover-color2">Established </h2>
                                    <p class="nsr22">Manufactures</p>
                                  </div>
                                </div>
                                
                                <div class="col-md-8 col-sm-6 zero_padding">
                                  <div class="img_hover_color">
                                    <img src="{{ asset('assets/images/jtp_image.png') }}" alt="company-image">
                                  </div>
                                </div>
                                
                              </div>
                            
                            </figure>
                        </div>
                      </div>
                    </div>
                </section>

                <section class="site-section text-center site-section lighter-bg middle-section">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-md-12">
                              <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                                <h2 class="bold-text themeTextColor">We at Johnson Analytica have been manufacturing easy to use rapid tests since 1938</h2>
                              </div>
                          </div>
                      </div>
                  </div>
                </section>



                <!-- <section class="site-section-hero bg-image" style="background-color: rgb(28 119 198); height: 70vh; min-height:250px; background-position:50% 0px; background-attachment:scroll; background-repeat:repeat;" data-stellar-background-ratio="0.5" id="blue-banner">
                  <div class="container">
                      <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 50vh;">
                          
                          <div class="col-md-12">
                          
                              <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 70vh;">
                                
                                <div class="col-md-12">
                                    <div class="row justify-content-center align-items-center" style="min-height: 250px; height: 60vh;background:#f5851e;">
                                        <div class="col-md-8">
                                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate text-white text-center">
                                                <p class="avbook28">Providing fast and accurate results you can trust.
                                                <br/>Our broad range of products covers everything from simple pH testing,
                                                <br/>water analysis, production processes and measurements of special food parameters.</p>
                                                <br/>
                                                <p class="avbook28">The use of rapid tests play a very important role when analysing solutions,
                                                <br/>be it, for education, research and development, healthcare or other specialist industries.
                                                <br/>Since the company was founded in the United Kingdom over 70 years ago,
                                                <br/>Johnson Test Papers has established a brand in well over 45 countries.
                                                <br/>This 70 years of experience has resulted in satisfied customers all over the world relating
                                                our name with quality, short delivery times and competitive pricing.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                              </div>

                          </div>
                      </div>
                  </div>
              </section> -->



              <section class="site-section-hero bg-image" style="height: 70vh; min-height:250px; background-position:40% 0px; background-attachment:scroll;background-repeat:repeat;" data-stellar-background-ratio="0.5">
                <div class="container" style="max-width:100%;">
                    <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 0vh;">
                        
                        <div class="col-md-12">
                            <div class="row justify-content-center  align-items-center" style="min-height: 250px; height: 70vh;">
                                <div class="col-md-12" style="background:#f5851e; padding:2% 15%">
                                    <div data-aos="fade-right" data-aos-delay="100" class="aos-init aos-animate text-white text-center">
                                        <p class="avbook28">Providing fast and accurate results you can trust.
                                        <br/>Our broad range of products covers everything from simple pH testing,
                                        <br/>water analysis, production processes and measurements of special food parameters.</p>
                                        <br/>
                                        <p class="avbook28">The use of rapid tests play a very important role when analysing solutions,
                                        <br/>be it, for education, research and development, healthcare or other specialist industries.
                                        <br/>Since the company was founded in the United Kingdom over 70 years ago,
                                        <br/>Johnson Test Papers has established a brand in well over 45 countries.
                                        <br/>This 70 years of experience has resulted in satisfied customers all over the world relating
                                              our name with quality, short delivery times and competitive pricing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
              </section>


              <section class="site-section lighter-bg content-padding" id="meet">
                  <div class="container">
                    <div class="row justify-content-center general-text-color">
                      
                      <div class="col-md-12 text-center">
                        <h3 class="themeTextColor mt-3 mb-3">Our History</h3>
                      </div>

                      <div class="col-md-12">
                        <div class="d-block d-md-flex mt-5" data-aos="fade-up" data-aos-delay="100">
                          
                          <div class="col-md-6 col-sm-6" style="padding-right:5%;">
                            <div class="mr-md-auto mr-2">
                              <ul class="ul-check list-unstyled success nsm20">
                                <li>British company operating since the 1940's with wordwide distribution. </li>
                                <li>Over 70 years of experience. </li>
                                <li>Distributors in over 45 countries. </li>
                                <li>Embedded tradition of test paper Manufacturing. </li>
                                <li>Specialists in paper impregnation. </li>
                                <li>Development, manufacturing and sales of products for specific industries. </li>
                              </ul>
                            </div>
                          </div>
                          <div  class="col-md-6 col-sm-6">
                            <div class="mr-md-auto avbook20">
                              <label> Since the company was founded in the United Kingdom over 70 years ago, Johnson Test Papers has established a brand in well over 45 countries. This experience has resulted in satisfied customers all over the world relating our name with quality, short delivery times and competitive pricing.</label>
                                <br/><br/>
                              <label> Manufacturing a comprehensive range of products has given us the expertise and know how on being able to solve your individual problems and requirements while providing a quality service and maintaining the standards that Johnson Test Papers has set. </label>
                            </div>
                          </div>

                        </div>
                          
                      </div>

                    </div>
                  </div>
              </section>
                
            </div>

            <img src='{{ URL("assets/images/product/front_footer.jpg") }}' style="height: 20vh; width:-webkit-fill-available;"></img>
            @include('frontend_view.layouts.contact_section')
    @endsection