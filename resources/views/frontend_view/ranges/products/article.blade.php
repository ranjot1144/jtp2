@extends('frontend_view.layouts.layout')
    @section('content')

    @include('frontend_view.layouts.breadcrumb_nav')
        <div class="container-fluid">
                <section class="site-section zero_padding" id="article">
                    <div class="container" style="max-width:100%;">
                      <div class="row justify-content-center">
                        <div class="col-md-12"  style="background:#88b343;">
                        
                          <figure class="mb-12 aos-init aos-animate zero_margin" data-aos="fade-up">

                              <div class="row columns_margin_bottom_20">
                                
                                <div class="col-md-4 col-sm-6 d-flex justify-content-center mt-5">
                                  <div class="img_hover_color text-white">
                                    @if ($range_data->isNotEmpty())
                                      <h2 class="bold-text mb-3 border-left-bar px-md-4 aos-init aos-animate" data-aos="fade-right"> {{ $range_data[0]->prod_name; }}</h2>
                                        <p class="nsr25"> {!! $range_data[0]->prod_desc; !!}</p>
                                    @endif
                                  </div>
                                </div>
                                
                                <div class="col-md-8 col-sm-6 zero_padding">
                                  <div class="img_hover_color">
                                    @if($article_data->isNotEmpty())
                                      @if($article_data[0]->pa_img!='')
                                        @php $image_url = URL($article_data[0]->pa_img); @endphp
                                          <img src="{{ $image_url }}" alt="article_image" style="height:450px;" />
                                        @else
                                          <img src="{{ asset('assets/images/jtp_image.png') }}" alt="article_image" style="height:450px;" />
                                      @endif

                                    @endif
                                  </div>
                                </div>
                                
                              </div>
                            
                            </figure>
                        </div>
                      </div>
                    </div>
                </section>

                <section class="site-section lighter-bg" id="meet">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">
                        
                        <div class="col-md-12">
                          <div class="d-block d-md-flex mt-5">
                            @if($article_data->isNotEmpty())
                              {!! $article_data[0]->pa_desc!!}
                            @endif
                          </div>
                            
                        </div>

                      </div>
                    </div>
                </section>
             
               @include('frontend_view.layouts.contact_section')
                
            </div>
    @endsection