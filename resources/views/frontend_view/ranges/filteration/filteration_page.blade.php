@extends('frontend_view.layouts.layout')
    @section('content')
        
    <main class="main-content">
       <div class="container-fluid">
                
              
        @include('frontend_view.layouts.breadcrumb_nav')

               <section class="site-section-hero bg-image bg-header-image" data-stellar-background-ratio="0.5" id="section-home">
                  <div class="row justify-content-center align-items-center">
                      <div class="col-md-10">
                            <h1 class="heading filterpapercolor bold-text" data-aos="fade-right"> Filteration</h1>
                              
                              <p class='button-margin-15' data-aos="fade-up" data-aos-delay="300">
                                <a href="#section-contact" class="btn btn-primary btn-md smoothscroll">Read More</a>
                              </p>
                      </div>
                  </div>
                </section>


                <section class="site-section lighter-bg" id="filter-paper">
                    <div class="container">
                      <div class="row justify-content-center">
                        
                        <div class="col-md-12 text-center general-text-color">
                          <h2 class="heading">Our Products</h2>
                          <p>We are commited to supply all industries testing requirements <br/>through continual research and development.</p>
                        </div>

                        <div class="col-md-12 text-center">

                          <div class="row">
                            
                            <div class="col padding-top-bot-40">
                              <a href="{{  url('frontend/filteration/filter-paper') }}">
                                <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Filter Papers</label>
                              </a>
                            </div>
                            <div class="col padding-top-bot-40">
                              <a href="">
                                <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Extraction Thimbles</label>
                              </a>
                            </div>
                            <div class="col padding-top-bot-40">
                              <a href="">
                                <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Membranes</label>
                              </a>
                            </div>
                            <div class="col padding-top-bot-40">
                              <a href="">
                                <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                <label class="text-uppercase margin-top-10 font-weight-500 text-uppercase">Syring Filters</label>
                              </a>
                            </div>

                          </div>

                        </div>

                      </div>
                    </div>
                </section>

                <section class="site-section lighter-bg" id="section-bio">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">
                        
                        <div class="col-md-12">
                          <h3>General Information</h3>
                        </div>

                        <div class="col-md-12">
                          <div class="d-block d-md-flex mt-5">
                            
                            <div class="col-md-12" >
                              <div class="mr-md-auto mr-2">
                                <ul class="ul-check list-unstyled success">
                                  <li>Simple to look at, easy to use yet made through complex manufacturing procedures for chemical, biological and research laboratories around the world. </li>
                                  <li>Ultimate goal of filtration is to reach the quickest velocity for the level of retention required. </li>
                                  <li>Retention takes place within the paper as well as the surface. </li>
                                  <li>Johnson Test Papers offers an extensive range of qualitative, ashless, and technical filter papers that cover broad applications in laboratory and industry. </li>
                                  <li>Application specific and phase separator papers also available. </li>
                                  <li>Variations in degree of purity, hardness and chemical resistance. </li>
                                  <li>Also available in a pre-pleated format. </li>
                                  <li>Manufactured from high quality cotton linters treated to achieve minimum alpha cellulose content of 95%. </li>
                                  <li>Cotton linters are short fibres found on cotton seeds.
                                      <ul>
                                        <li>Not suitable for textile industry but ideal for absorbent filters.</li>
                                      </ul>
                                  </li>
                                  <li>Also made from pulp obtained by chemically treating plant material. </li>
                                  <li>Tested for basic weight, thickness, air flow, and mechanical strength. </li>
                                  <li>Mainly used for sample clarification or precipitate recovery before material identification. </li>
                                  <li>The following factors determine the retention within the filtration process. 
                                      <ul>
                                        <li>Retention on surface.</li>
                                        <li>Retention depth.</li>
                                        <li>Electrostatic adsorption.</li>
                                        <li>Effects of inertia.</li>
                                        <li>Sedimentation.</li>
                                      </ul>
                                  </li>
                                  <li>Retention efficiency also determined by factors related to the liquid. </li>
                                </ul>
                              </div>
                            </div>

                          </div>
                            
                        </div>

                      </div>
                    </div>
                </section>

                <section class="site-section grey_background">
                  <div class="container">
                    <div class="row justify-content-center">
                      
                      <div class="col-md-12 text-center general-text-color">
                        <h2 class="mb-5 heading themeTextColor">Have an Enquiry ?</h2>
                        <h2>Our expert customer support team are on hand to answer <br/>any of your queries </h2>
                      </div>
                      
                      <div class="col-md-12 text-center contactUs_enquiry_button">
                        <a href="" class="btn btn-primary btn-md">Contact Us</a>
                      </div>

                    </div>
                  </div>
                  </section>

               @include('frontend_view.layouts.footer')
                
            </div>
        </main>
    @endsection