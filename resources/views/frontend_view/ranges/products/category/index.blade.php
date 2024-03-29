@extends('frontend_view.layouts.layout')
    @section('content')
        
    <!-- <main class="main-content">
       <div class="container-fluid"> -->


<style>
  #table_presentation_data {
    table {
      thead {
        th:first-child{
          border-top-left-radius: 20px;
          padding-left: 40px;
        }
        th:last-child{
          border-top-right-radius: 20px;
        }
      }
      tbody {
        td:first-child{
          background-color: transparent;
          border-radius: 0;
          font-weight: normal;
          padding-left: 40px;
        }
        td:nth-child(2){
          border-left: 0px;
        }
      }
      
    }
    .table-striped tbody tr:nth-of-type(even) {
        background-color: transparent;
    }
    .table-striped tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }
  }


.accordion-div{
  padding: 20px 0px;
}
.accordion {
  background-color: #eb7f2d;
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
  margin-bottom:3px;
}
.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}


.hiddenRow {
    padding: 0;
}
tbody {
  border: 5px solid #fff;
}
.toggle_me{
  padding: 10px;
}
.padding-10{
  padding: 10px;
}

.cellulose-table-container{
  display: flex;
  flex-direction: column;
  width: 100%;
  gap: 7px;
}
.cellulose-table-container .heading-box{
  height: 53px;
    border-radius: 30px 30px 0 0;
    padding: 11px 57px;
    align-items: center;
    width: 100%;
    display: flex;
    justify-content: space-between;
    background: linear-gradient(to right, #d3552e, 35%, #F58621);
}

.cellulose-table-container .heading-box h4{
    color: #fff;
    font-size: 17px;
}

.cellulose-item-content{
  display: flex;
    justify-content: space-between;
    padding: 10px 56px;
    border-radius: 4px;
}

.cellulose-item{
  background: #e36c28;
  padding: 10px 34px;
  cursor: pointer;
  border-radius: 4px;
  color: #ffff;
    font-weight: 600;
    font-size: 16px;

}

.cellulose-item-content:nth-child(odd) {
        background-color: #ffffff; 
    }

    .cellulose-item-content:nth-child(even) {
        background-color: #dddbdb; 
    }

    .parent-cellulose-item{
      transition : 2s;
      max-height: 0;
      overflow: hidden;
      transition: max-height 1s ease;
    }

    .open{
        max-height: 1000px;
    }

  
    .outer-cellulose-content .arrow{
        transform: rotate(45deg);
    }
    .outer-cellulose-content .arrow.rotate{
      transform: rotate(225deg);
      margin-bottom: 0
    }

    .outer-cellulose-content:last-child .cellulose-item{
          border-radius: 0 0 30px 30px;
    }

    @media (max-width: 786px){
      .cellulose-item-content, .cellulose-table-container .heading-box{
        padding: 10px;
      }
      .cellulose-table-container .heading-box h4, .cellulose-item-content > div{
        font-size: 10px !important;
      }
      .cellulose-item-content{
        gap: 8px;
      }
    }
  </style>
       @include('frontend_view.layouts.breadcrumb_nav')
            @php 
              $cat_name = '';
              $colorclass = ''; 
            @endphp

            @if(isset($cat_data[0]->cat_name) && !empty($cat_data[0]->cat_name) ) 
              @php
                $cat_name = $cat_data[0]->cat_name;
                $cat_range = $cat_data[0]->cat_ranges;
              @endphp
            @endif

            @if($range_data->isNotEmpty() ) 
              @if(!empty($range_data) && $range_data[0]->range_id=='1')
                @php $colorclass = 'rapid_text_color'; @endphp
              @endif
            @else
              @php $colorclass = 'filtration_text_color'; @endphp
            @endif

               <!-- <section class="site-section-hero bg-image bg-header-image" data-stellar-background-ratio="0.5" id="section-home">
                  <div class="row justify-content-center align-items-center">
                      <div class="col-md-10">
                            <h1 class="heading bold-text {{ $colorclass }}" data-aos="fade-right"> {!! $cat_name !!}</h1>
                            <h3 class="text-white">{!! $cat_range !!}</h3>
                      </div>
                  </div>
                </section> -->
                <section class="zero_padding" id="product_banner">
                  <div class="row ">
                      <div class="col-md-12">
                          <img src="{{ url('/assets/images/product/industry/industry_banner.jpg'); }}" alt="Filter Finder Header"/>
                          @php $top_position = 'top-left'; @endphp
                          @if ( ($range_data[0]->range_id==1 && ($cat_data[0]->cat_id=='1' || $cat_data[0]->cat_id=='103' || $cat_data[0]->cat_id=='104' || $range_data[0]->prod_id=='16') ) )
                            @php $top_position = 'top-right'; @endphp
                          @endif

                          <!-- @if ( ($range_data[0]->range_id==1 && $range_data[0]->prod_id=='2') || ($range_data[0]->range_id==2 && $cat_data[0]->cat_id!='5') )
                          @endif -->

                          
                          <div class="{{ $top_position }}">
                              <div class="row justify-content-center align-items-center">
                                  <div class="col-md-12">
                                      <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                        <h2 data-aos="fade-right" class="{{ $colorclass }} bold-text mb-3 border-left-bar px-md-4 aos-init aos-animate"> {!! $range_data[0]->prod_name !!}</h2>
                                        <h3 class="">{{ preg_replace('/<br\W*?\/?>/', ' ', $cat_name.' '.$cat_range) }}</h3>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- <div class="bottom-right">
                              <a href="#" class="btn btn-primary btn-large">Purchase</a>
                          </div> -->
                          

                      </div>
                  </div>
                </section>


                <section class="site-section lighter-bg content-padding" id="prod_content_section">
                    <div class="container">
                      <div class="row justify-content-center">
                        @if ($range_data->isNotEmpty() && $range_data[0]->range_id!='5')
                          @if ($cat_data[0]->cat_id=='6' || $cat_data[0]->cat_id=='2')
                            <div class="col-md-12 general-text-color">
                              <!-- <h3 class="text-center mb-4">Grades</h3> -->
                              <h3 class="text-center mb-4 bold-text">{{ trim($cat_data[0]->cat_name,"s") }} Range</h3>
                              <div class="mb-5 content_description"><p>{{ $cat_data[0]->cat_main_desc }}</p></div>
                            </div>
                          @elseif ($range_data[0]->range_id==2 && ($cat_data[0]->cat_id=='4' || $cat_data[0]->cat_id=='5'))
                          <div class="col-md-12 general-text-color">
                            <h2 class="mb-3 bold-text text-center">{{ preg_replace('/<br\W*?\/?>/', ' ', $cat_name.' '.$cat_range) }}</h2>
                            <div class="mb-5 content_description text-center">{!! $cat_data[0]->cat_main_desc !!}</div>
                          </div>
                            <!-- <div class="col-md-12 text-center general-text-color">
                              <h3 class="mb-5">Categories</h3>
                            </div> -->
                            @elseif ($range_data[0]->range_id==2 && ($cat_data[0]->cat_id=='8' || $cat_data[0]->cat_id=='9'))
                          <div class="col-md-12 general-text-color">
                          <h2 class="mb-3 bold-text text-center">{{ preg_replace('/<br\W*?\/?>/', ' ', $cat_name.' '.$cat_range) }}</h2>
                            <div class="mb-5 content_description"><p>{!! $cat_data[0]->cat_main_desc !!}</p></div>
                          </div>

                          @else
                          <div class="col-md-12 general-text-color">
                              @php
                                $originalString = $cat_name;
                                $search = "®";
                                $html = "<sup>®</sup>"; // Sup tag
                                $cat_name = Helper::insertHTMLAtStringPosition($originalString, $search, $html);
                              @endphp
                            <h2 class="text-center mb-5 bold-text">{!! preg_replace('/<br\W*?\/?>/', ' ', $cat_name.' '.$cat_range) !!}</h2>
                              <div class="mb-5 content_description"><p>{!! $cat_data[0]->cat_main_desc !!}</p></div>
                              @if(count($cat_desc))
                               <div class="mb-5 content_description"><p>{!! $cat_desc[0]->cd_maindesc !!}</p></div>
                              @endif
                          </div>
                            @if($range_data[0]->range_id=='2')
                            <!-- <div class="col-md-12 text-center general-text-color">
                              <h3>Categories</h3>
                            </div> -->
                            @endif
                          @endif
                        @endif

                        <?php  
                        if($range_data->isNotEmpty() && $range_data[0]->range_id=='2') { ?>
                          @if($cat_data[0]->cat_id=='123') <!--Glass Fibre Filters-->

                          <table class="table-striped w-full">
                              <thead class="">
                                <tr class="gradient-left-to-right">
                                  <th scope="col" width="12%">Grade</th>
                                  <th scope="col">Whatman <br/> Equivalent</th>
                                  <th scope="col">Speed</th>
                                  <th scope="col">Thickness (mm)</th>
                                  <th scope="col">Retension Rate (%)</th>
                                  <th scope="col">Weight (g/m<sup>2</sup>)</th>
                                  <th scope="col">Filtration Speed (Sec)</th>
                                  <th scope="col">Air Permeability</th>
                                  <th scope="col">Max Operating Temperature (<sup>o</sup>C)</th>
                                </tr>
                              </thead>
                              <tbody>
                                  
                                  <tr class="parent" id="row1" title="Click to expand/collapse" style="cursor: pointer;">
                                    <td class="text-white" style="font-weight: 600; background-color: #F47922; border-radius: 30px 0px 0px 30px;">50A <span style="float:right;">+</span></td>
                                    <td>GFA</td>
                                    <td>Fast, High Load</td>
                                    <td>0.29</td>
                                    <td>99.993</td>
                                    <td>56</td>
                                    <td>19</td>
                                    <td>33</td>
                                    <td>500</td>
                                  </tr>

                                      <tr class="child-row1" title="Click to expand/collapse" style="cursor: pointer; display:none;">
                                        <td class="p-3 text-sm text-gray-700 bold-text" style="color:#000;background:#fff;">Diameter(mm)</td>
                                        <td>21</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>47</td>
                                        <td>55</td>
                                        <td>90</td>
                                        <td>110</td>
                                        <td>125</td>
                                      </tr>
                                  
                                      <tr class="child-row1" title="Click to expand/collapse" style="cursor: pointer; display:none;">
                                        <td class="p-3 text-sm text-gray-700 bold-text" style="color:#000;">Prod. Code</td>
                                        <td>50A021</td>
                                        <td>50A024</td>
                                        <td>50A025</td>
                                        <td>50A047</td>
                                        <td>50A055</td>
                                        <td>50A090</td>
                                        <td>50A110</td>
                                        <td>50A125</td>
                                      </tr>

                                      

                                  <tr class="parent" id="row2" title="Click to expand/collapse" style="cursor: pointer;">
                                    <td class="text-white" style="font-weight: 600; background-color: #F47922; border-radius: 30px 0px 0px 30px;">50B <span style="float:right;">+</span></td>
                                    <td>GFB</td>
                                    <td>Medium - Fast, Very High Load</td>
                                    <td>1</td>
                                    <td>99.993</td>
                                    <td>140</td>
                                    <td>44</td>
                                    <td>11</td>
                                    <td>500</td>
                                  </tr>

                                      <tr class="child-row2" id="50b" title="Click to expand/collapse" style="cursor: pointer; display:none;">
                                        <td class="p-3 text-sm text-gray-700 bold-text" style="color:#000;background:#fff;">Diameter(mm)</td>
                                        <td>21</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>47</td>
                                        <td>55</td>
                                        <td>90</td>
                                        <td>110</td>
                                        <td>125</td>
                                      </tr>
                                  
                                      <tr class="child-row2" title="Click to expand/collapse" style="cursor: pointer; display:none;">
                                        <td class="p-3 text-sm text-gray-700 bold-text" style="color:#000;background:#fff;">Prod. Code</td>
                                        <td>50A021</td>
                                        <td>50A024</td>
                                        <td>50A025</td>
                                        <td>50A047</td>
                                        <td>50A055</td>
                                        <td>50A090</td>
                                        <td>50A110</td>
                                        <td>50A125</td>
                                      </tr>

                                  <tr class="parent" id="row3" title="Click to expand/collapse" style="cursor: pointer;">
                                    <td class="text-white" style="font-weight: 600; background-color: #F47922; border-radius: 30px 0px 0px 30px;">50C <span style="float:right;">+</span></td>
                                    <td>GFC</td>
                                    <td>Medium - Fast, Very High Load</td>
                                    <td>0.28</td>
                                    <td>99.995</td>
                                    <td>54</td>
                                    <td>25</td>
                                    <td>54</td>
                                    <td>500</td>
                                  </tr>

                                      <tr class="child-row3" title="Click to expand/collapse" style="cursor: pointer; display:none;">
                                        <td class="p-3 text-sm text-gray-700 bold-text" style="color:#000;background:#fff;">Diameter(mm)</td>
                                        <td>21</td>
                                        <td>24</td>
                                        <td>25</td>
                                        <td>47</td>
                                        <td>55</td>
                                        <td>90</td>
                                        <td>110</td>
                                        <td>125</td>
                                      </tr>
                                      <tr class="child-row3" id="50c" title="Click to expand/collapse" style="cursor: pointer; display:none;">
                                        <td class="p-3 text-sm text-gray-700 bold-text" style="color:#000;background:#fff;">Prod. Code</td>
                                        <td>50C021</td>
                                        <td>50C024</td>
                                        <td>50C025</td>
                                        <td>50C047</td>
                                        <td>50C055</td>
                                        <td>50C090</td>
                                        <td>50C110</td>
                                        <td>50C125</td>
                                      </tr>
                                  

                              </tbody>
                            </table>

                          @elseif($cat_data[0]->cat_id=='124') <!-- Quartz Filter -->

                          <p>
                            Quartz filtration membranes are advanced materials used in various filtration processes, particularly in industries where high purity and efficiency are paramount. These membranes are typically composed of layers of quartz, a hard and chemically inert mineral, which is processed into a porous structure suitable for filtration purposes. <br/><br/>
                            Quartz membranes exhibit excellent temperature and pressure resistance, allowing them to withstand extreme operating conditions without compromising filtration performance. This makes them suitable for use in high-temperature processes or applications involving elevated pressures. These membranes find applications across various industries, including pharmaceuticals, biotechnology, semiconductor manufacturing, food and beverage processing, wastewater treatment, and chemical processing. They are used for diverse filtration tasks, such as particle removal, sterilization, purification, and separation of substances. <br/><br/>
                            Please contact us for sizing, pricing and availability.  </a>
                          </p>

                              
                          @endif

                          <?php if($range_data[0]->prod_id=='7') {
                            ?>

                            <table class="table-striped technical_spec">
                              <thead>
                                <tr>
                                  <th scope="col" style="background:#fff;width:40%;">&nbsp;</th>
                                  <th scope="col" colspan="4" class="gradient-left-to-right text-center" style="border-radius: 15px 15px 0px 0px; width:100%;border-right:2px solid;">Technical Specification</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">

                              <?php foreach($syringe_table_data as $index => $td) {
                                      if($td->cfd_val2!='') { ?>

                                      <tr>
                                          <th class="themebackgroundColor" style="text-align:left;"><?php echo $td->cfd_desc; ?></th>
                                          <td><?php echo $td->cfd_val1; ?></th>
                                          <td><?php echo $td->cfd_val2; ?></td>
                                          <td><?php echo $td->cfd_val3; ?></td>
                                          <td><?php echo $td->cfd_val4; ?></th>
                                      </tr>

                                      <?php } else { ?>
                                        <tr>
                                          <th class="themebackgroundColor" style="text-align:left;"><?php echo $td->cfd_desc; ?></th>
                                          <td colspan=4><?php echo $td->cfd_val1; ?></th>
                                        </tr>
                                      <?php if($index=='10'){ ?>
                                        <tr style="background:#fff;">
                                          <th style="text-align:left;">Product Codes</th>
                                          <td colspan=4></th>
                                        </tr>
                                      <?php }
                                      
                                    }
                                      $index++;
                                    } ?>
                              </tbody>
                            </table>

                            <?php
                          } if($range_data[0]->prod_id=='6'){ ?>
                          
                          <table class="table-striped technical_spec">
                              <thead>
                                <tr>
                                  <th scope="col" style="background:#fff;width:40%;">&nbsp;</th>
                                  <th scope="col" colspan="2" class="gradient-left-to-right text-center" style="border-radius: 15px 15px 0px 0px; width:100%;border-right:2px solid;">Technical Specification</th>
                                </tr>
                              </thead>
                              <tbody class="text-center">

                              <?php foreach($membrane_table_data as $index => $td) {
                                      if($td->cfm_val2!='') { ?>

                                      <tr>
                                          <th class="themebackgroundColor" style="text-align:left;"><?php echo $td->cfd_desc; ?></th>
                                          <td><?php echo $td->cfm_val1; ?></th>
                                          <td><?php echo $td->cfm_val2; ?></td>
                                      </tr>

                                      <?php } else { ?>
                                        <tr>
                                          <th class="themebackgroundColor" style="text-align:left;"><?php echo $td->cfd_desc; ?></th>
                                          <td colspan=4><?php echo $td->cfm_val1; ?></th>
                                        </tr>
                                      <?php if($index=='8'){ ?>
                                        <tr style="background:#fff;">
                                          <th style="text-align:left;">Product Codes</th>
                                          <td colspan=4></th>
                                        </tr>
                                      <?php }
                                      
                                    }
                                      $index++;
                                    } ?>
                              </tbody>
                            </table>

                        <?php
                          }
                        }
                          ?>

                        <?php if($range_data->isNotEmpty() && $range_data[0]->range_id=='1') { 

                            if($cat_data[0]->cat_id=='2') { ?>
                              <div class="col-md-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <div class="row text-center image-list">
                                        <?php 
                                          if(!empty($sub_cat_data) && $sub_cat_data!='') {
                                            $url = '';
                                            $col = 'col-md-4';
                                            if(count($sub_cat_data)>3) {
                                              $col = 'col-md-3';
                                            }else if(count($sub_cat_data)==2) {
                                              $col = 'col-md-6';
                                            }

                                            foreach($sub_cat_data as $data) {
                                              $url = $data->subcat_url;
                                          ?>
                                            <div class="{{ $col }} ranges_prod">
                                              <a href="{{ URL($data->subcat_url) }}">

                                                @if($data->sc_images!='')
                                                  <img src="{{ URL($data->sc_images); }}" alt="Snow" class="img-fluid tab_hover" style="height:300px;">
                                                @else
                                                  <img src="{{ url('assets/images/j-quant.png'); }}" alt="Snow" class="img-fluid tab_hover" style="height:300px;">
                                                @endif

                                              </a>
                                                <div class="prod_name">
                                                  <label class="bold-text" style="margin:20px 0 0;">{!! $data->sub_cat_name !!}</label></br>
                                                  <label class="bold-text">{!! $data->sc_ranges.'' !!}</label>
                                                </div>
                                            </div>
                                        <?php  }
                                          }  ?>

                                      </div>
                                      <?php if(count($cat_data)>12) { ?>
                                        <div class="content_count">
                                          <p class="text-center showing-result"></p>
                                          <a class="load-more"> Load More <span class="loading"><span></span></span></a>
                                        </div>
                                      <?php } ?>
                                    </div>

                                  </div>
                              </div>

                            <?php }else{ ?>  
                              <div class="col-md-12 general-text-color">
                            <table id="jQuant">
                              <thead>
                                <tr class="gradient-left-to-right gradient-row">
                                  <th scope="col" width="25%">Product</th>
                                  <th scope="col">Graduation</th>
                                  <th scope="col" width="15%">Presentation</th>
                                  <th scope="col" width="10%">Code</th>
                                </tr>
                              </thead>
                                <tbody>
                                    <?php if(!empty($category_presentation) && $category_presentation!='') { 
                                            foreach ($category_presentation as $key => $value) { ?>
                                              <tr>
                                                <td>{{ $value->cp_product.' '.$value->cp_range }}</td>
                                                <td>{{ $value->cp_graduation; }}</td>
                                                <td>{!! $value->cp_presentation !!}</td>
                                                <td>{!! $value->cp_prod_code !!}</td>
                                              </tr>
                                    <?php } 
                                        } ?>
                                  
                                </tbody>
                              </table>
                            
                            <div class="accordion-div">
                          @if($range_data[0]->prod_id!=1)
                            @if(count($cat_desc))
                                <button class="text-uppercase accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> Description</button>

                                <div class="panel">
                                  <p class="mt-3">{!! $cat_desc[0]->cd_description !!}</p>
                                </div>

                                <button class="text-uppercase accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> Industries</button>
                                <div class="panel">
                                  <p class="mt-3">
                                    @if($cat_desc->isNotEmpty())
                                      <ul class="ul-check list-unstyled success" style="margin-bottom:0px;">
                                        @foreach($cat_desc as $k=>$data)
                                          @foreach(explode(',', $data->cd_industries) as $info)

                                          
                                            @if($info=='Laboratory')
                                              <li><a href="{{ URL('product/industries/laboratory') }}">{{$info}}</a></li>
                                            @elseif(trim($info)=='Healthcare')
                                              <li><a href="{{ URL('product/industries/healthcare') }}">{{$info}}</a></li>
                                            @elseif(trim($info)=='Food & Beverages')
                                              <li><a href="{{ URL('product/industries/food_beverages') }}">{{$info}}</a></li>
                                            @elseif(trim($info)=='Education')
                                              <li><a href="{{ URL('product/industries/education') }}">{{$info}}</a></li>
                                            @elseif(trim($info)=='Environmental')
                                              <li><a href="{{ URL('product/industries/environmental') }}">{{$info}}</a></li>
                                            @elseif(trim($info)=='Disinfection & Sanitation')
                                              <li><a href="{{ URL('product/industries/cosmetic') }}">{{$info}}</a></li>
                                            @elseif(trim($info)=='Industrial Water Testing')
                                              <li><a href="{{ URL('product/industries/industrial') }}">{{$info}}</a></li>
                                            @elseif(trim($info)=='Domestic Water Testing')
                                              <li><a href="{{ URL('product/industries/water') }}">{{$info}}</a></li>
                                            @else
                                              <li>{{$info}}</li>
                                            @endif

                                          @endforeach
                                        @endforeach
                                      </ul>
                                    @endif
                                  </p>
                                </div>

                                <button class="text-uppercase accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> Downloads</button>
                                <div class="panel">
                                  <p class="mt-3">{!! $cat_desc[0]->cd_download !!}</p>
                                </div>
                            @endif
                          @endif
                            </div>

                          </div>
                        <?php 
                      } }else if ($range_data->isNotEmpty() && ($range_data[0]->range_id=='3' || $range_data[0]->range_id=='4' || $range_data[0]->range_id=='5' || $range_data[0]->range_id=='8') ) { ?>

                              <table id="jQuant">
                              <thead>
                                <tr class="gradient-left-to-right">
                                  <th scope="col">Product</th>
                                  <th scope="col" width="45%">Graduation</th>
                                  <th scope="col" width="15%">Presentation</th>
                                  <th scope="col" width="10%">Code</th>
                                </tr>
                              </thead>
                                <tbody>
                                    <?php if(!empty($category_presentation) && $category_presentation!='') { 
                                            foreach ($category_presentation as $key => $value) { ?>
                                              <tr>
                                                <td>{{ $value->cp_product.' '.$value->cp_range }}</td>
                                                <td style='width="20%";'>{!! $value->cp_graduation; !!}</td>
                                                <td>{!! $value->cp_presentation !!}</td>
                                                <td>{!! $value->cp_prod_code !!}</td>
                                              </tr>
                                    <?php } 
                                        } ?>
                                  
                                </tbody>
                              </table>
                        <div class="col-md-12 general-text-color">
                            <div class="accordion-div">
                                @if(count($cat_desc))
                                  <button class="accordion toggle_tr"><span class="arrow down"></span> Description</button>
                                    <div class="panel">
                                        @if($cat_desc[0]->cd_description!='')
                                            <p>{!! $cat_desc[0]->cd_description !!}</p>
                                        @endif
                                      <!-- <p>{!! $cat_data[0]->cat_desc !!}</p> -->
                                    </div>

                                  <button class="accordion toggle_tr"><span class="arrow down"></span>Industries</button>
                                    <div class="panel">
                                        @if($cat_desc[0]->cd_industries!='')
                                            <p>{!! $cat_desc[0]->cd_industries !!}</p>
                                        @endif
                                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                                    </div>

                                  <button class="accordion toggle_tr"><span class="arrow down"></span>Downloads</button>
                                    <div class="panel">
                                        @if($cat_desc[0]->cd_download!='')
                                            <p>{!! $cat_desc[0]->cd_download !!}</p>
                                        @endif
                                      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                                    </div>
                                @endif

                                
                            </div>
                        </div>
                      <?php }else{ ?>


                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              
                              <div class="row">

                                <?php if($range_data->isNotEmpty() && $range_data[0]->prod_id=='5' ) {  ?>
                                  <div class="col-md-12 general-text-color">


                                    <div class="cellulose-table-container">
                                        <div class="heading-box">
                                          <h4>Diameter</h4>
                                          <h4>Presentation	</h4>
                                          <h4>Product Code</h4>
                                        </div>
                                                          @php 
                                                            $filter_val = '';
                                                            $recommendation = ''; 
                                                            $visibility = '';
                                                          @endphp
                                                            @if(\Request::getQueryString())
                                                              @php 
                                                                $recommendation = \Request::getQueryString(); 
                                                                $filter = explode('=',$recommendation);
                                                                $filter_val = $filter[1];
                                                              @endphp
                                                            @endif
                                                            @foreach($ext_thimb as $index => $val)
                                                              <div class="outer-cellulose-content">
                                                                <div class="cellulose-item"><span class="arrow"></span>{{'Ø '. $val->et_diameter}}</div>
                                                                      @php 
                                                                        $new_index = ''; 
                                                                        $visibility=''; 
                                                                      @endphp
                                                                    <div class="parent-cellulose-item">
                                                                          <?php $ranges = DB::table('extraction_thimble_ranges as er')
                                                                                          ->where('er.et_id', $val->id)->get();
                                                                            ?>
                                                                            @foreach($ranges as $data)
                                                            
                                                                                  <div class="cellulose-item-content">
                                                                                    <div>{{ 'Ø '. $data->er_diameter.' x '.$data->er_height.' mm'; }}</div>
                                                                                    <div>{{ $data->er_presentation }}</div>
                                                                                    <div>{{ $data->er_prod_code }}</div>
                                                                                  </div>
                                                                                @if($filter_val==$data->er_diameter)
                                                                                  @php  $new_index = $index; @endphp
                                                                                    
                                                                                @endif
                                                                            @endforeach
                                                                      </div>
                                                                </div>
                                                            @endforeach
                                    </div>

                                  </div>
                              </div>
                            
                                <div class="row text-center image-list">
                                  <?php } else{
                                            if($cat_data[0]->cat_id=='6'){ ?>

                        <div class="col-md-12 mb-3 themeTextColor">
                          <h3 class="">Chromatography Papers</h3>
                        </div>

                                                <table class="table-striped">
                                                  <thead>
                                                    <tr class="gradient-left-to-right">
                                                      <th scope="col" width="20%;">Grade</th>
                                                      <th scope="col" width="20%;">Weight<br/>(g/m2)</th>
                                                      <th scope="col" width="20%;">Thickness<br/>(mm)</th>
                                                      <th scope="col" width="20%;">Capillary Rose<br/>(Mm/30 min)</th>
                                                      <th scope="col" width="20%;">Absoption</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                        <tr>
                                                          <td>60CF 1</td>
                                                          <td>90</td>
                                                          <td>0.19</td>
                                                          <td>93</td>
                                                          <td>Medium Fast</td>
                                                        </tr>
                                                        <tr>
                                                          <td>60CF 2</td>
                                                          <td>125</td>
                                                          <td>0.24</td>
                                                          <td>93</td>
                                                          <td>Medium Fast</td>
                                                        </tr>
                                                        <tr>
                                                          <td>60CF 3</td>
                                                          <td>150</td>
                                                          <td>0.32</td>
                                                          <td>145</td>
                                                          <td>Fast</td>
                                                        </tr>

                                                        <tr>
                                                          <td>60CF 4</td>
                                                          <td>195</td>
                                                          <td>0.35</td>
                                                          <td>115</td>
                                                          <td>Fast</td>
                                                        </tr>
                                                        <tr>
                                                          <td>60CF 5</td>
                                                          <td>200</td>
                                                          <td>0.41</td>
                                                          <td>145</td>
                                                          <td>Fast</td>
                                                        </tr>
                                                        <tr>
                                                          <td>60CF 6</td>
                                                          <td>320</td>
                                                          <td>0.90</td>
                                                          <td>240</td>
                                                          <td>Very Fast</td>
                                                        </tr>
                                                                                                          
                                                  </tbody>
                                                </table>


                                                <div class="col-md-12 mb-3 themeTextColor">
                                                  <h3 class="">Blotting Papers</h3>
                                                </div>

                                                <table class="table-striped">
                                                  <thead>
                                                    <tr class="gradient-left-to-right">
                                                      <th scope="col" width="25%;">Grade</th>
                                                      <th scope="col" width="25%;">Weight<br/>(g/m2)</th>
                                                      <th scope="col" width="25%;">Thickness<br/>(mm)</th>
                                                      <th scope="col" width="25%;">Capillary Rose<br/>(Mm/30 min)</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                        <tr>
                                                          <td>70BF 1</td>
                                                          <td>195</td>
                                                          <td>0.35</td>
                                                          <td>70</td>
                                                        </tr>
                                                        <tr>
                                                          <td>70BF 2</td>
                                                          <td>250</td>
                                                          <td>0.50</td>
                                                          <td>75</td>
                                                        </tr>
                                                        <tr>
                                                          <td>70BF 3</td>
                                                          <td>330</td>
                                                          <td>0.76</td>
                                                          <td>130</td>
                                                        </tr>

                                                        <tr>
                                                          <td>70BF 4</td>
                                                          <td>550</td>
                                                          <td>1.30</td>
                                                          <td>160</td>
                                                        </tr>
                                                                                                          
                                                  </tbody>
                                                </table>

                                                <div class="col-md-12 mb-3 themeTextColor">
                                                  <h3 class="">Blotting Membranes</h3>
                                                </div>

                                                <table class="table-striped">
                                                  <thead>
                                                    <tr class="gradient-left-to-right">
                                                      <th scope="col" width="25%;">Grade</th>
                                                      <th scope="col" width="25%;">Pore Size<br/>(µM)</th>
                                                      <th scope="col" width="25%;">Size</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                        <tr>
                                                          <td>Cellulose Nitrate</td>
                                                          <td>0.22</td>
                                                          <td>300 mm * 3 m</td>
                                                        </tr>
                                                        <tr>
                                                          <td>Cellulose Nitrate</td>
                                                          <td>0.45</td>
                                                          <td>300 mm * 3 m</td>
                                                        </tr>
                                                  </tbody>
                                                </table>

                                            <?php }else{
                                                  if(!empty($sub_cat_data) && $sub_cat_data!='') {
                                                    $col = 'col-md-4';
                                                    if(count($sub_cat_data)>3) {
                                                      $col = 'col-md-3';
                                                    }else if(count($sub_cat_data)==2) {
                                                      $col = 'col-md-6';
                                                    }else if(count($sub_cat_data)==1) {
                                                      $col = 'col-md-12';
                                                    }

                                                    foreach ($sub_cat_data as $key => $value) {
                                                      $url = url($value->subcat_url);

                                                      echo '<div class="'.$col.' ranges_prod">
                                                        <a href="'.$url.'">
                                                          <img src="https://www.johnsontestpapers.com/images/products/filter-boxes.jpg" alt="Snow" class="img-fluid">
                                                        </a>
                                                        <div class="range_name text-center">
                                                          <label class="bold-text" style="margin-top:20px;">'.$value->sub_cat_name.'<br/>'.$value->sc_ranges.'</label>
                                                        </div>
                                                      </div>';
                                                    }
                                                  }
                                                }
                                  ?>

                                  
                              </div>

                              <?php if(count($sub_cat_data)>12) { ?>
                                <p class="text-center showing-result padding-top-bot-40"></p>
                                <a class="load-more"> Load More <span class="loading"><span></span></span></a>
                              <?php }  } ?>

                            </div>
                          </div>
                        </div>

                        <?php } ?>

                      </div>
                    </div>
                </section>

                <?php 
                //if(!empty($range_data) && ($range_data[0]->prod_id=='1' || $range_data[0]->range_id=='2') && !empty($cat_data) && $cat_data[0]->cat_id=='2') { 
                //if(!empty($range_data) && ($range_data[0]->prod_id=='1' || $range_data[0]->range_id=='2')) { 
                  ?>
                @if(!empty($range_data) && ($range_data[0]->prod_id=='1' || $range_data[0]->range_id=='2'))
                  @if(count($cat_desc) && $cat_desc[0]->cd_description!='')
                <section class="site-section lighter-bg" id="prod-section-nav">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">

                        <div class="col-md-12">
                          <div class="card">

                              <div class="card-header">

                                <ul class="nav nav-tabs navmenu">
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers active" data-myAttri="tab-1">
                                    <a  href="#tab-1" class="nav-link">Key Features</a>
                                  </li>
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-2">
                                    <a href="#tab-2" class="nav-link">Applications</a>
                                  </li>
                                  <li class="col-md-4 text-center text-uppercase nav-item navbar-filter-papers" data-myAttri="tab-3">
                                    <a href="#tab-3" class="nav-link">Industries</a>
                                  </li>
                                </ul>

                              </div>

                              <div class="card-body" id='tab-1-active'><p>
                                <?php if(count($cat_desc)) {
                                        if($cat_desc[0]->cd_description!='') {
                                          echo $cat_desc[0]->cd_description;
                                        }
                                } ?>
                              </p></div>

                              <div class="card-body" id='tab-2-active' style="display:none;"><p>
                                  <?php if(count($cat_desc)) {
                                            if($cat_desc[0]->cd_download!='') {
                                              echo $cat_desc[0]->cd_download;
                                            }
                                  } ?>
                              </p></div>

                              <div class="card-body" id='tab-3-active' style="display:none;"><p>
                                  <?php if(count($cat_desc)) {
                                            if($cat_desc[0]->cd_industries!='') {
                                              echo $cat_desc[0]->cd_industries;
                                            }
                                  } ?>
                              </p></div>

                          </div>
                        </div>
                        
                      </div>
                    </div>
                </section>
                @endif
              @endif
        <?php //} ?>


                @if($range_data[0]->prod_id!='5' && $cat_data[0]->cat_id!='5' && $cat_data[0]->cat_id!='123')
                  @if($cat_tags->isNotEmpty())
                  <section class="site-section lighter-bg " id="other-product">
                      <div class="container">
                        <div class="row justify-content-center general-text-color">

                          <div class="col-md-12 general-text-color">
                            <h3 class="<?php echo $colorclass; ?>">Other Related Products</h3>
                          </div>

                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <div class="row text-center image-list">
                                    
                                      @foreach($cat_tags as $index=> $tags)
                                        <div class="col-md-4 ranges_prod">
                                          <a href="{{ URL($tags->cat_url) }}">
                                            @if($tags->cat_image!='')
                                              <img src="{{ url('assets/images/j-quant.png'); }}" alt="{{$tags->cat_name}}" class="img-fluid tab_hover" style="height:300px;" />
                                            @else
                                              <img src="{{ url('assets/images/j-quant.png'); }}" alt="image{{$index}}" class="img-fluid tab_hover" style="height:300px;" />
                                            @endif
                                          </a>
                                            <div class="prod_name">
                                              <label class="bold-text" style="margin:20px 0 0;">{!! $tags->cat_name !!}</label></br>
                                              <label class="bold-text">{!! $tags->cat_ranges !!}</label>
                                            </div>
                                        </div>
                                      @endforeach
                                    
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                  </section>
                  @endif
                @endif
            
                


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


const celluloseItem = document.querySelectorAll('.cellulose-item');

celluloseItem.forEach(toggle => {
    toggle.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        const submenu = toggle.nextElementSibling;
        const dropdownArrow = this.querySelector('.cellulose-item .arrow');
        dropdownArrow.classList.toggle('rotate');
        submenu.classList.toggle('open');
    });
});


</script>
    @endsection