@extends('frontend_view.layouts.layout')
    @section('content')
        
    <!-- <main class="main-content">
       <div class="container-fluid"> -->
                
       @include('frontend_view.layouts.breadcrumb_nav')

                <section class="zero_padding" id="product_banner">
                  <div class="row ">
                      <div class="col-md-12">
                          <img src="{{ url('/assets/images/product/industry/industry_banner.jpg'); }}" alt="Filter Finder Header"/>
                          
                          <div class="top-right">
                              <div class="row justify-content-center align-items-center">
                                  <div class="col-md-12">
                                      <div data-aos="fade-up " data-aos-delay="100" class="aos-init aos-animate">
                                        <h2 data-aos="fade-right" class="border-left-bar px-md-4"> {!! $sub_cat_data[0]->sub_cat_name; !!}</h2>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
                </section>

              <?php $colorclass='';
              if(!empty($range_data) && $range_data[0]->range_id=='1') {
                $colorclass = 'rapid_text_color';
              }else{
                $colorclass = 'filtration_text_color';
              }
              ?>

                

              <?php if(!empty($cat_data) && $cat_data[0]->cat_id=='2') { ?>

                <section class="site-section lighter-bg" id="table_presentation_data">
                  <div class="container">
                      <div class="row justify-content-center">

                        <div class="col-md-10">
                          <h3 class="text-center mb-5 bold-text">{!! $sub_cat_data[0]->sub_cat_name.' '.$sub_cat_data[0]->sc_ranges !!}</h3>
                          <div class="mb-5 content_description"><p>{!! $sub_cat_data[0]->sc_desc !!}</p></div>
                        </div>

                          <div class="col-md-12 general-text-color">
                            <table id="jQuant">
                              <thead>
                                <tr class="gradient-left-to-right">
                                  <th scope="col">Product</th>
                                  <th scope="col">Graduation</th>
                                  <th scope="col" width="15%">Presentation</th>
                                  <th scope="col" width="10%">Code</th>
                                </tr>
                              </thead>
                                <tbody>
                                    <?php if(!empty($sub_cat_data) && $sub_cat_data!='') { 
                                            foreach ($sub_cat_data as $key => $value) { ?>
                                              <tr>
                                                <td>{{ $value->sp_product.' '.$value->sp_range; }}</td>
                                                <td>{{ $value->sp_graduation; }}</td>
                                                <td>{!! $value->sp_presentation; !!}</td>
                                                <td>{!! $value->sp_prod_code; !!}</td>
                                              </tr>
                                    <?php } 
                                        } ?>
                                    <?php if(!empty($category_presentation) && $category_presentation!='') { 
                                            foreach ($category_presentation as $key => $value) { ?>
                                              <tr>
                                                <td>{{ $value->cat_name.' '.$value->cat_ranges }}</td>
                                                <td>{{ '' }}</td>
                                                <td>{{ $value->cp_presentation }}</td>
                                                <td>{{ $value->cp_prod_code }}</td>
                                              </tr>
                                    <?php } 
                                        } ?>
                                  
                                </tbody>
                              </table>
                            
                            <div class="accordion-div">
                              @if(count($subcatdesc_data))
                                <button class="text-uppercase accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> Description</button>
                                
                                <div class="panel">
                                  <p class="mt-3">{!! $subcatdesc_data[0]->sd_desc !!}</p>
                                </div>

                                <button class="text-uppercase accordion collapsed toggle_tr" aria-expended="true"><span class="arrow down"></span> Industries</button>
                                <div class="panel">
                                    <p class="mt-3">
                                    @if($subcatdesc_data->isNotEmpty())
                                      <ul class="ul-check list-unstyled success" style="margin-bottom:0px;">
                                        @foreach($subcatdesc_data as $k=>$data)
                                          @foreach(explode(',', $data->sd_industries) as $info)
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
                                  <p class="mt-3">{!! $subcatdesc_data[0]->sd_download !!}</p>
                                </div>
                              @endif
                                
                            </div>

                          </div>
                        </div>
                    </div>
                </section>

              <?php } else{ ?>

                <section class="site-section lighter-bg" id="grades_table">
                  <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-md-10">
                          <h3 class="text-center mb-5 bold-text">Grades</h3>
                          <div class="mb-5 content_description text-center"><p>{!! $sub_cat_data[0]->sc_desc !!}</p></div>
                        </div>

                        <div class="mobile-Grades-container">
                            <div class="top-grade-bar">
                              <div>Grade</div>
                              <div>Whatman Equivalent</div>
                            </div>
                            <div class="grade-content-area">
                            @php 
                                  $filter_val = '';
                                  $recommendation = ''; 
                                @endphp
                                  @if(\Request::getQueryString())
                                    @php 
                                      $recommendation = \Request::getQueryString(); 
                                      $filter = explode('=',$recommendation);
                                      $filter_val = $filter[1];
                                    @endphp
                                  @endif
                            <?php 
                              if(!empty($grade_data)) {
                                foreach($grade_data as $data) {
                            ?>
                            <div class="grade-items">
                                <div class="grade-box">
                                  <div class="grade-num">{{$data->grade_range}}<span class="arrow"></span> </div>
                                  <div>= No.{{$data->whatman_equivalent}}</div>
                                </div>
                                <div class="dropdonw-content">
                                <ul>
                                  <li>Speed<span>{{$data->filtering_speed}}</span></li>
                                  <li>Filteration Speed (sec) <span>{{$data->filtration_speed}}</span></li>
                                  <li>Thickness (mm) <span>{{$data->thickness}}</span></li>
                                  <li>Retention Capacity <span>{{$data->pore_size}}</span></li>
                                  <li>Weight (g/m<sup>2</sup>) <span>{{$data->weight}}</span></li>
                                  <li>Burst Strength (kg/cm<sup>2</sup>) <span>{{$data->burst_strength}}</span></li>
                                </ul>
                                <?php 
                                if(isset($data->grade_desc) && !empty($data->grade_desc)){
                                ?>
                                <div class="bottom-gradle-content-container">
                                        <div class="header-grade">
                                            <div>Grade {{$data->grade_range}} </div>
                                            <div>Sizes (Diameter/mm)</div>
                                            <div>Product Code</div>
                                        </div>
                                        <div class="grade-points">
                                          <h6>
                                            {{$data->grade_desc}}
                                         </h6>
                                          <ul>
                                          <?php 
                                              if(count($grade_code) > 0 && $data->id==$grade_code[0]->grade_desc_id) {
                                                foreach($grade_code as $index => $gc) { 
                                            ?>
                                             <li><span>{{$gc->gc_size}}</span> <span>{{$gc->gc_prod_code}}</span></li>
                                             
                                            <?php }}?>
                                          </ul>
                                        </div>
                                    </div>
                                <?php }?>
                                </div>
                              </div>
                            <?php }}?>

                            
                              
                            </div>
                        </div>

                        <div class="col-md-12 table-responsive text-center desktop-grades-container padding-top-bot-40">
                            <table class="table-striped ">
                              <thead>
                                <tr class="gradient-left-to-right">
                                  <th scope="col">Grade</th>
                                  <th scope="col">Whatman <br/> Equivalent</th>
                                  <th scope="col">Speed</th>
                                  <th scope="col">Filteration Speed <br/> (sec)</th>
                                  <th scope="col">Thickness <br/> (mm)</th>
                                  <th scope="col">Retention Capacity</th>
                                  <th scope="col">Weight <br/> (g/m<sup>2</sup>)</th>
                                  <th scope="col">Burst Strength <br/> (kg/cm<sup>2</sup>)</th>
                                </tr>
                              </thead>

                                @php 
                                  $filter_val = '';
                                  $recommendation = ''; 
                                @endphp
                                  @if(\Request::getQueryString())
                                    @php 
                                      $recommendation = \Request::getQueryString(); 
                                      $filter = explode('=',$recommendation);
                                      $filter_val = $filter[1];
                                    @endphp
                                  @endif

                              <tbody>

                                <?php 
                                  $display_item = 'display:none';
                                  $span = '';
                                if(!empty($grade_data)) {
                                        foreach($grade_data as $zindex => $data) {

                                          $span = '';
                                          // if($data->id==$grade_code[0]->grade_desc_id) {
                                          //   if(count($grade_code)){
                                          //     $span = '<span style="float:right;">+</span>';
                                          //   }
                                          // }

                                          $grade_desc = '';
                                          if(isset($data->grade_desc) && !empty($data->grade_desc)){
                                            $grade_desc = $data->grade_desc;
                                          }

                                          $cnt = 0;
                                          $grade_code = DB::table('grades_code as gc')
                                                        ->where('gc.grade_desc_id',$data->grade_id)
                                                        ->get();
                                          if(isset($grade_code) && !empty($grade_code)) {
                                              $span = '<span style="float:right;">+</span>';
                                              $cnt = count($grade_code)+1;
                                          }

                                          if($filter_val==$data->grade_range) {
                                            $span = '<span style="float:right;">-</span>';
                                          }

                                          echo '<tr class="parent" id="row'.$data->grade_range.'" title="Click to expand/collapse" style="cursor: pointer;">
                                                  <td>'.$data->grade_range.' '.$span.'</td>
                                                  <td>= No.'.$data->whatman_equivalent.'</td>
                                                  <td>'.$data->filtering_speed.'</td>
                                                  <td>'.$data->filtration_speed.'</td>
                                                  <td>'.$data->thickness.'</td>
                                                  <td>'.$data->pore_size.'</td>
                                                  <td>'.$data->weight.'</td>
                                                  <td>'.$data->burst_strength.'</td>
                                                </tr>';

                                            if(isset($grade_desc) && !empty($grade_desc)) {

                                            if($filter_val==$grade_data[$zindex]->grade_range) {
                                              $display_item = '';
                                            }
                                              
                                              echo '<tr class="child-row1 child-row'.$grade_data[$zindex]->grade_range.'" style="'.$display_item.'">
                                                      <th> </td>  
                                                      <th colspan="4">Grade '.$grade_data[0]->grade_range.' </td>  
                                                      <th> </td>  
                                                      <th> Sizes <br/>(Diameter/mm) </td> 
                                                      <th> Product Code</td>  
                                                    </tr>

                                                    <tr class="child-row1 child-row'.$grade_data[$zindex]->grade_range.'" style="'.$display_item.'">
                                                      <td> </td>  
                                                      <td colspan="4" rowspan='.$cnt.' style="text-align:left; vertical-align: top; width:50%;">'.$grade_desc.'
                                                      <td> &nbsp;</td>  
                                                      <td> </td>
                                                      <td> </td>
                                                    </tr>';
                                                if($grade_code->isNotEmpty()) {
                                                  if($data->id==$grade_code[$zindex]->grade_desc_id) {
                                                    foreach($grade_code as $index => $gc) { 
                                                      echo '<tr class="child-row1 child-row'.$grade_data[$zindex]->grade_range.'" style="'.$display_item.'">
                                                            <td> </td>
                                                            <td> </td>
                                                            <td>'.$gc->gc_size.'</td>
                                                            <td>'.$gc->gc_prod_code.'</td>
                                                            </tr>';   
                                                    }

                                                    echo '<tr class="child-row1 child-row'.$grade_data[$zindex]->grade_range.'" style="text-align:left; '.$display_item.'; background-color:#fff;">
                                                            <td> </td>
                                                            <td colspan="7">Key Features</td>
                                                          </tr>';
                                                  }
                                                }
                                                  
                                              }
                                            
                                        }
                                      }?>
                                
                              </tbody>
                            </table>
                        </div>

                  

                      </div>
                    </div>
                </section>
              <?php } ?>

              <?php if(!empty($cat_data) && $cat_data[0]->cat_id!='2') { ?>

                <section class="site-section lighter-bg " id="other-product">
                    <div class="container">
                      <div class="row justify-content-center general-text-color">

                        <div class="col-md-12 general-text-color">
                          <h3 class="themeTextColor">Other Related Products</h3>
                        </div>

                      </div>
                    </div>
                </section>
              <?php } ?>

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

  document.addEventListener("DOMContentLoaded", function() {
    const gradeNums = document.querySelectorAll(".grade-num");

    gradeNums.forEach(function(gradeNum) {
      gradeNum.addEventListener("click", function() {
        const parentGradeItem = gradeNum.closest(".grade-items");
        if (parentGradeItem) {
          const dropdonwContent = parentGradeItem.querySelector('.dropdonw-content');
          if (dropdonwContent) {
            dropdonwContent.classList.toggle("show");
          } 
        } 
      });
    });
  });
</script>

    @endsection