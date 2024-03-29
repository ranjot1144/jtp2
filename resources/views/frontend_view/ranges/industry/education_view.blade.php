@extends('frontend_view.layouts.layout')
    @section('content')

    <style>
        .accordion {
            background-color: #df983f;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
            margin-bottom:5px;
        }
        .accordion:first-of-type{
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
        .accordion:last-of-type{
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        .active, .accordion:hover {
            background-color: #eb7f2d;
        }
        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
        .arrow {
            border: solid #fff;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
            margin-right:10px;
        }
        .up {
            transform: rotate(-135deg);
            -webkit-transform: rotate(-135deg);
        }

        .down {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
        }
    </style>


    @include('frontend_view.layouts.breadcrumb_nav')

    <section class="site-section-hero bg-image" style="background-image: url(&quot;../../../assets/images/product/industry/education_banner.jpg&quot;); height: 47vh; background-position: 50% 1%; min-height: 150px;" id="home-border"> 
        <div class="container">
            <div class="row justify-content-center  align-items-center" style="height: 47vh;">
                <div class="col-md-12 ">

                    <div class="row justify-content-center  align-items-center" style="height: 47vh;">
                        <div class="col-md-12">
                            <div data-aos="fade-up" data-aos-delay="100" class="aos-init text-white aos-animate">
                                <h1 class="heading text-white bold-text">{{ $range_data[0]->prod_name; }}</h1>
                                <p class="nsr30 border-left-bar themeTextColor px-md-4"> Testing </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="site-section lighter-bg" id="section-nav">
        <div class="container">

            <div class="row justify-content-center">
            
                <div class="col-md-12 text-center">
                    <h2 class="themeTextColor bold-text mb-5">We offers a range of science education tests <br/>for water, soil and air sampling.</h2>
                    <p>{{ $range_data[0]->prod_desc }}</p>
                </div>

                <div class="col-md-12">
                        <div class="card">
                              <div class="card-header">
                                <ul class="nav nav-tabs navmenu">
                                    <div class="col-md-12 general-text-color">
                                        <div class="accordion-div">
                                            @php $last_index = 0; @endphp
                                            @if (count($cat_tags_data))
                                                @foreach ($cat_tags_data as $index => $cat_item)
                                                    <button class="accordion accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> {{ $cat_item->cat_name }}</button>
                                                    <div class="panel">
                                                        @php
                                                            $panel_cat_data = DB::table('subcategory as sc')
                                                                ->select('sc.id as subcat_id','sc.sub_cat_name','sc.subcat_url')
                                                                ->where('sc.cat_id', $cat_item->cat_id)
                                                                ->get();
                                                        @endphp
                                                        @if($panel_cat_data->isNotEmpty())
                                                            @foreach($panel_cat_data as $i => $pd)
                                                                <p class="mt-3"><a href="{{ url($pd->subcat_url) }}">{{$pd->sub_cat_name}}</a></p>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    
                                                    @php $last_index = $index; @endphp
                                                @endforeach
                                            @endif 

                                            @if (count($prod_tags_data))
                                                @foreach ($prod_tags_data as $index => $prod_item)
                                                    <button class="accordion accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> {{ $prod_item->prod_name }}</button>
                                                    <div class="panel">
                                                        @php
                                                            $panel_prod_data = DB::table('category as c')
                                                                                ->select('c.id as cat_id','c.cat_name','c.cat_url')
                                                                                ->where('c.prod_id', $prod_item->prod_id)
                                                                                ->get();
                                                        @endphp

                                                        @if($panel_prod_data->isNotEmpty())
                                                            @foreach($panel_prod_data as $ppd)
                                                                @php $cat_name = str_replace("<br/>", " ", $ppd->cat_name); @endphp
                                                                
                                                                <p class="mt-3"><a href="{{ url($ppd->cat_url) }}">{{ $cat_name }}</a></p>
                                                                
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                @endforeach
                                            @endif 
                                        </div>
                                    </div>
                                  

                                </ul>
                              </div>

                              

                              

                              

                        </div>
                    </div>

            </div>

        </div>
    </section>

    @include('frontend_view.layouts.contact_section')

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}


</script>

    @endsection