@extends('frontend_view.layouts.layout')
    @section('content')

    <section class="site-section-hero bg-image" style="background-image: url(&quot;../../../assets/images/support/news_banner.png&quot;); height: 60vh; background-position: 50% 1%; min-height: 150px;" data-stellar-background-ratio="0.5" id="home-border"> 
        <div class="container">
            <div class="row justify-content-center  align-items-center" style="height: 60vh;">
                <div class="col-md-12 ">

                    <div class="row justify-content-center  align-items-center" style="height: 50vh;">
                        <div class="col-md-12">
                            <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                <h1 class="text-white">News & Developments</h1>
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
                                
                                @if($news_data->isNotEmpty())
                                    @foreach ($news_data as $key => $items)
                                        <div class="col-md-6">
                                            <div class="img_hover_color">
                                                <img src="{{ url('assets/images/support/strip_check.png') }}" alt="news{{$key}}" style="width:60%;">
                                            </div>

                                            <div class="another-text" style="text-align:left; margin:0 22.5%;">
                                                <label class="themeTextColor mt-3 text-uppercase" style="font-weight:700;">{{ $items->news_for }}</label>
                                                <br/>
                                                <p class="bold-text">{!! $items->news_heading !!}</p>
                                                <p>{!! $items->news_text !!}...</p>
                                                @php 
                                                    $originalDate = $items->news_date;
                                                    $newDate = date("M d, Y", strtotime($originalDate));
                                                @endphp
                                                <p style="margin-top:10px;font-weight:300;">{{ $newDate }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                
                            </div>
                        </figure>
                </div>
                    
                        
            </div>
        </div>
    </section>

    @include('frontend_view.layouts.contact_section')
    @endsection