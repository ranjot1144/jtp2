<?php 
$range_data = DB::table('range as r')
              ->orderBy('r.order_wise','ASC')
              ->get();
$prod_data = DB::table('product as r')
              ->orderBy('r.order_wise','ASC')
              ->get();
?>

       
      <header>
          
          <div class="megamenu_d grey_background">

              <div class="site-logo">
                <a href="{{ url('/') }} ">
                  <img class="mx-auto d-block image-90" alt="logo" src="{{ URL('/assets/images/logo.png')}}" />
                </a>
              </div>

              <a href="#" data-flexmenu="flexmenu1"></a>
              
              <ul id="flexmenu1" class="flexdropdownmenu">
                <li><a href="#" class="has-submenu">Product & Services</a>
                  <ul class="second_layer_menu">
                    @foreach($range_data as $range_data)
                      <li>
                        <a href="{{ URL($range_data->range_url) }}" >{{ $range_data->range_name }}</a>
                            <?php 
                            $color_range = '';
                            $url = '';
                            if($prod_data->isNotEmpty()) {
                                    echo '<ul class="submenu_third_layer '.$color_range.'">';
                                      foreach($prod_data as $prod) {

                                        $originalString = $prod->prod_name;
                                        $search = "®";
                                        $html = "<sup>®</sup>"; // Sup tag
                                        $prod->prod_name = Helper::insertHTMLAtStringPosition($originalString, $search, $html);

                                        if($range_data->id == $prod->range_id) {
                                          if($range_data->id=='1') {
                                            $color_range = 'rapid_test_bac_color';
                                            $url = URL($prod->prod_url);
                                          }else if($range_data->id=='2') {
                                            $color_range = 'filtration_test_bac_color';
                                            $url = URL($prod->prod_url);
                                          }else if($range_data->id=='3') {
                                            $color_range = 'ps_test_bac_color';
                                            $url = URL($prod->prod_url);
                                          }else if($range_data->id=='4') {
                                            $color_range = 'aquarium_test_bac_color';
                                            $url = URL($prod->prod_url);
                                          }else if($range_data->id=='5') {
                                            $color_range = 'vtk_test_bac_color';
                                            $url = URL($prod->prod_url);
                                          }else if($range_data->id=='6') {
                                            $color_range = 'ind_test_bac_color';
                                            $prod_name = strtolower($prod->prod_name);
                                            $url = URL($prod->prod_url);
                                          }else if($range_data->id=='8') {
                                            $color_range = 'health_col';
                                            $prod_name = strtolower($prod->prod_name);
                                            $url = URL($prod->prod_url);
                                          }
                                          echo '<li class='.$color_range.'><a href="'.$url.'">'.$prod->prod_name.'</a></li>';
                                        }
                                      }
                                    echo '</ul>';
                                } ?>
                        </li>
                    @endforeach
                  </ul>
                </li>

                <li><a href="#">Company</a>
                  <ul class="second_layer_menu">
                    <li><a href="{{ url('company/about-us') }}">Our Story</a></li>
                    <li><a href="{{ url('company/imprint') }}">Imprint</a></li>
                    <li><a href="{{ url('company/terms') }}">Terms and Conditions</a></li>
                    <li><a href="{{ url('company/privacy_policy') }}">Privacy Policy</a></li>
                  </ul>
                </li>
                
                <li><a href="#">Support</a>
                  <ul class="second_layer_menu">
                    <li><a href="{{ url('support/contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ url('support/document') }}">Document & Certificates</a></li>
                    <li><a href="{{ url('support/catalogue') }}">Catalogues</a></li>
                    <li><a href="{{ url('support/knowledge_hub') }}">Knowledge Hub</a></li>
                    <li><a href="{{ url('support/faq') }}">FAQ's</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('company/news-development') }}">News & Developments</a></li>
              </ul>

              <div class="sidebar-bottom">
                <div class="sidebar_rel">

                    <p class="mb-2"><a href="{{ URL('company/terms') }}" target="_blank" >Terms & Conditions</a></p>
                    <p><a href="{{ URL('') }}">Privacy Policy</a></p>

                    <div class="images-content">
                                  <a href="#" target="_blank"> 
                                    <img src="https://www.johnsontestpapers.com/images/iso/iso9001.jpg" alt="Snow"> 
                                  </a>
                                  <a href="#" target="_blank"> 
                                    <img src="https://www.johnsontestpapers.com/images/iso/iso13485.jpg" alt="Snow"> 
                                  </a>
                  </div>

                  <div class="social_icons">
                    <a href="#" class="social-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16"> <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/></svg> </a>
                    <a href="#" class="social-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"> <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/> </svg> </a>
                    <a href="#" class="social-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/> </svg></a>
                    <!-- <a href="#" class="social-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/> </svg></a> -->
                    <a href="#" class="social-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"><path fill="currentColor" d="m10 15l5.19-3L10 9zm11.56-7.83c.13.47.22 1.1.28 1.9c.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83c-.25.9-.83 1.48-1.73 1.73c-.47.13-1.33.22-2.65.28c-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44c-.9-.25-1.48-.83-1.73-1.73c-.13-.47-.22-1.1-.28-1.9c-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83c.25-.9.83-1.48 1.73-1.73c.47-.13 1.33-.22 2.65-.28c1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44c.9.25 1.48.83 1.73 1.73"/></svg></a>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-center">&copy;johnsontestpaper</p>
                    </div>
                  </div>

                </div>
              </div>
          </div>

            <div class="mobileSidebarContainer">
            <div class="mobile-header">
                <a href="/" ><img src="https://www.johnsontestpapers.com/images/logo.png" class="mobile_logo" alt="Company Logo" /> </a>
                <div class="burger-btn" id="mobHamburger"></div>
            </div>

            <div class="mobile-menu-content">
                            <ul>
                              <li><a href="javascript:void(0)" class="menu-elm">Product & Services <button class="dropdown-arrow"><img  src="{{ URL('/assets/images/right-arrow-desk.png')}}" alt=""></button></a>
                                  <ol>
                                  <li class="first"> 
                                    <h6>
                                    <a href="{{ URL('product/rapid_test') }}">Rapid Test</a>
                                    <button class="dropdown-arrow sub-menu-arrow"><img  src="{{ URL('/assets/images/right-arrow.png')}}" alt=""></button>
                                    </h6>
                                  <ol class="inner-sub-menu">
                                    <li>
                                      <a href="">pH Tests</a>
                                    </li>
                                    <li>
                                        <a href="http://magictree.johnsontestpapers.com/product/rapid_test/litmus_paper">Litmus Paper</a></li>
                                        <li>
                                          <a href="http://magictree.johnsontestpapers.com/product/rapid_test/homebrewing">Homebrewing</a></li>
                                          <li>
                                            <a href="http://magictree.johnsontestpapers.com/product/rapid_test/jquant_test_strips">J-QUANT® Test Strips</a>
                                          </li><li>
                                            <a href="http://magictree.johnsontestpapers.com/product/rapid_test/qualitative_test_paper">Qualitative Test Paper</a></li><li>
                                              <a href="http://magictree.johnsontestpapers.com/product/rapid_test/enviromental">Environmental</a></li>
                                    </ol>
                                </li>
                              <li class="first"> 
                                <h6>  
                              <a href="{{ URL('product/filtration') }}">Filtration</a> 
                              <button class="dropdown-arrow sub-menu-arrow"><img  src="{{ URL('/assets/images/right-arrow.png')}}" alt=""></button>
                              </h6>

                              <ol class="inner-sub-menu">
                                <li>
                                  <a href="https://magictree.johnsontestpapers.com/product/filtration/filter_paper">Filter Papers</a>
                                </li>
                                <li>
                                  <a href="https://magictree.johnsontestpapers.com/product/filtration/glass_quartz_microfiber">Glass and Quartz Microfiber</a>
                                </li>
                                <li>
                                  <a href="https://magictree.johnsontestpapers.com/product/filtration/extraction_thimbles">Extraction Thimbles</a>
                                </li>
                                <li>
                                  <a href="https://magictree.johnsontestpapers.com/product/filtration/microfiltration_membranes">Membrane Filters</a>
                                </li>
                                <li>
                                  <a href="https://magictree.johnsontestpapers.com/product/filtration/syringe_filter">Syringe Filters</a>
                                </li>
                                <li>
                                  <a href="https://magictree.johnsontestpapers.com/product/filtration/filter_finder">Filter Finder</a>
                                </li>
                              </ol>
                              </li>
                              <li class="first"> 
                              <h6>
                              <a href="{{ URL('product/pool_and_spa') }}">Pool & Spa</a> 
                              <button class="dropdown-arrow sub-menu-arrow"><img  src="{{ URL('/assets/images/right-arrow.png')}}" alt=""></button>
                              </h6>
                              <ol class="inner-sub-menu">
                              <li class="">
                                <a href="">SaniQuant</a>
                              </li>
                              <li class="">
                                <a href="">Urinalysis</a>
                              </li><li class="">
                                <a href="">AspHirate pH strips</a>
                              </li>
                            </ol>
                            </li>
                              <li class="first"> 
                                <h6>
                                <a href="{{ URL('product/aquarium') }}">Aquarium</a> 
                                <button class="dropdown-arrow sub-menu-arrow"><img  src="{{ URL('/assets/images/right-arrow.png')}}" alt=""></button>
                                </h6>
                                <ol class="inner-sub-menu">
                                  <li>
                                    <a href="https://magictree.johnsontestpapers.com/product/pool_and_spa/aquarium_multiple_testing_strips">Check2o® Pool &amp; Spa Multiple Testing Strips</a>
                                  </li>
                                  <li>
                                    <a href="https://magictree.johnsontestpapers.com/product/pool_and_spa/aquarium_single_testing_strips">Check2o® Pool &amp; Spa SINGLE Testing Strips</a>
                                  </li>
                                </ol>
                              </li>
                              <li class="first"> 
                                  <h6>
                                  <a href="{{ URL('product/visual_test_kits') }}">Visual Test Kits</a> 
                                  <button class="dropdown-arrow sub-menu-arrow"><img  src="{{ URL('/assets/images/right-arrow.png')}}" alt=""></button>
                              </h6>
                                  <ol class="inner-sub-menu">
                                    <li>
                                      <a href="https://magictree.johnsontestpapers.com/product/visual_test_kits/eco_vtk">VTKolor® Eco Visual test kits</a>
                                      </li>
                                      <li><a href="https://magictree.johnsontestpapers.com/product/visual_test_kits/plus_vtk">VTKolor® PLUS Visual test kits</a>
                                      </li>
                                      <li><a href="https://magictree.johnsontestpapers.com/product/visual_test_kits/prime_vtk">VTKOLOR® PRIME Visual test kits</a>
                                      </li>
                                  </ol>
                                </li>
                              <li class="first"> 
                                <h6>
                                <a href="{{ URL('product/industries') }}">Industries</a> 
                                <button class="dropdown-arrow sub-menu-arrow"><img  src="{{ URL('/assets/images/right-arrow.png')}}" alt=""></button>
                              </h6>
                              <ol class="inner-sub-menu">
                              <li>
                                <a href="https://magictree.johnsontestpapers.com/product/industries/laboratory">Laboratory</a>
                              </li>
                              <li>
                                <a href="https://magictree.johnsontestpapers.com/product/industries/healthcare">Healthcare</a>
                              </li>
                              <li>
                                <a href="https://magictree.johnsontestpapers.com/product/industries/food_beverages">Food &amp; Beverages</a>
                              </li>
                              <li>
                                <a href="https://magictree.johnsontestpapers.com/product/industries/education">Education</a>
                              </li>
                              <li>
                                <a href="https://magictree.johnsontestpapers.com/product/industries/environmental">Environmental</a>
                              </li>
                              <li>
                                <a href="https://magictree.johnsontestpapers.com/product/industries/cosmetic">Disinfection &amp; Sanitation</a>
                              </li>
                              <li>
                                <a href="https://magictree.johnsontestpapers.com/product/industries/industrial">Industrial Water Testing</a>
                              </li>
                              <li>
                                <a href="https://magictree.johnsontestpapers.com/product/industries/water">Domestic Water Testing</a>
                              </li>
                              </ol>
                              </li>
                              <li> <a href="{{ URL('product/oem_label') }}">OEM Private Label</a> </li>
                                  </ol>
                             </li>
                              <li><a href="" class="menu-elm">Company<button class="dropdown-arrow"><img  src="{{ URL('/assets/images/right-arrow-desk.png')}}" alt=""></button></a> 
                              <ol>
                              <li><a href="{{ url('company/about-us') }}">Our Story</a></li>
                            <li><a href="{{ url('company/imprint') }}">Imprint</a></li>
                            <li><a href="{{ url('company/terms') }}">Terms and Conditions</a></li>
                            <li><a href="{{ url('company/privacy_policy') }}">Privacy Policy</a></li>
                                  </ol>
                              </li>
                              <li><a href="" class="menu-elm">Support <button class="dropdown-arrow"><img  src="{{ URL('/assets/images/right-arrow-desk.png')}}" alt=""></button></a>
                              <ol>
                              <li><a href="{{ url('support/contact-us') }}">Contact Us</a></li>
                          <li><a href="{{ url('support/document') }}">Document & Certificates</a></li>
                          <li><a href="{{ url('support/catalogue') }}">Catalouges</a></li>
                          <li><a href="{{ url('support/knowledge_hub') }}">Knowledge Hub</a></li>
                          <li><a href="{{ url('support/faq') }}">FAQ's</a></li>
                                  </ol>
                              </li>
                              <li><a href="{{ url('company/news-development') }}">News & Development</a></li>
                            </ul>

                            <div class="bottom-menu-content">
                                <h6>
                                  <a href="">Terms & Conditions</a>
                                </h6>
                                <h6>
                                  <a href="">Privacy Policy</a>
                                </h6>
                                <div class="images-content">
                                  <a href="#" target="_blank"> 
                                    <img src="https://www.johnsontestpapers.com/images/iso/iso9001.jpg" alt="Snow"> 
                                  </a>
                                  <a href="#" target="_blank"> 
                                    <img src="https://www.johnsontestpapers.com/images/iso/iso13485.jpg" alt="Snow"> 
                                  </a>
                                </div>
                                <div class="social-icons">
                                  <a href="#" class="social-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16"> <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/></svg> </a>
                                  <a href="#" class="social-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16"> <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/> </svg> </a>
                                  <a href="#" class="social-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"> <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/> </svg></a>
                                  <a href="#" class="social-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/> </svg></a>
                                </div>

                          <div class="row">
                            <div class="col-md-12">
                              <p class="mt-3 mb-2 text-center">&copy;johnsontestpaper</p>
                            </div>
                          </div>
                            </div>
            </div>
          </div>

      </header>

      