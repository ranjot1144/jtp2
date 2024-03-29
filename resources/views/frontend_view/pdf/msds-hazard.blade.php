   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <style>
        .p, p { color: #231F20; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8pt; margin:0.2pt; }
         h1 { color: #231F20; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }
         h2 { color: #231F20; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 10pt; }
         h3 { color: #231F20; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 8pt; margin:0; }
         b{ color: #231F20; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 8pt; margin:0.2pt; }
        h4{ padding:0; margin: 0; margin-top:1.3em; }
    .page-break {
    page-break-after: always;
}
header{
    width:100%:
}

      footer {
          padding-top: 0.6em;
        border-top:1px solid #eb5c24;
                    width:100%;
                    position: fixed;
                    bottom: 3em;
                }
                footer div{
                    padding: 0.2em;
                    width: 25% !important;
                    font-size: 0.7em;
                    display: inline-block;
                    text-align: justify;
                    margin: 0;
                }
                footer div p{
                    margin: 0;
                }

      .clearfix::after{
                    content: "";
    clear: both;
    display: table;

                }
                .logo {
                    width:10em; 
                }
                *{
                    font-family: "MyFont",MyFont,"Century Gothic",CentryGothic,"Didact Gothic",sans-serif
                }
                .issued{
                    border-top:1px solid #eb5c24;
                    border-bottom:1px solid #eb5c24;
                }
                .page{
                    float:right;
                }
        ul{
            list-style: none;
        }
    </style>

   </head>
   <body>
    <header class="clearfix">
        <div style="float:left">
                <h1 style="margin:0; padding:0;" >Safety Data Sheet</h1>
            <small style="margin:0; padding:0;">According to Directive 1907/2006/EC (REACh) and Regulation 2015/830/EU</small>
        
        </div>

        <div style="float:right;" >
                <img class="logo" src="images/logo.png" alt="">
        </div>
    </header>
    
    <div class="issued clearfix">
        <small>Issued on :</small>
        <div class="page">
            <small>Page 1/6</small>
        </div>  
    </div>

    <h4 style="margin-top:1em;">SECTION 1: Identification of the substance/mixture and of the company/undertaking</h4>
    <ul style="margin:0; padding:0; text-decoration:none;">
            <ul  style="margin:0; padding:0; text-decoration:none;">
               <li style="padding-top:0; margin-top:0; padding-left: 42pt;text-indent: -36pt;text-align: left;">
                  <h2 style="display: inline;">1.1 Product identifier</h2>
                  <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Product code: {{$data->product_codes}}</p>
                  <p style="text-indent: 0pt;text-align: left;"><br/></p>
                  <p style="padding-left: 20pt;text-indent: 0pt;text-align: left;">Product name: {{$data->product_name}}</p>
                  <p style="text-indent: 0pt;text-align: left;"><br/></p>
               </li>
               <li style="padding-left: 42pt;text-indent: -36pt;line-height: 12pt;text-align: left;">
                  <h2 style="display: inline;">1.2 Relevant identified uses of the substance or mixture and uses advised against</h2>
                  <h3 style="padding-left: 20pt;text-indent: 0pt;line-height: 9pt;text-align: left;">Relevant identified uses</h3>
                  <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Product for analytical use.</p>
                  <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Exposure Scenario Classification according REACh, RIP 3.2 Codes: SU 0-2, PC 21, PROC 15, AC 0 The exposure scenario is integrated into sections 1-16.</p>
                  <p style="text-indent: 0pt;text-align: left;"><br/></p>
               </li>
               <li style="padding-left: 42pt;text-indent: -36pt;line-height: 12pt;text-align: left;">
                  <h2 style="display: inline;">1.3 Details of the supplier of the safety data sheet</h2>
                  <h3 style="padding-left: 20pt;text-indent: 0pt;line-height: 9pt;text-align: left;">Manufactured by:</h3>
                  <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Johnson Test Papers Ltd</p>
                  <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Hainge Park, Hainge Road, Oldbury, B69 2NU, United Kingdom </p>
                  <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Tel: +44 121 557 3883, Email: technical@jtp.uk.com</p>
                  
                  <p style="text-indent: 0pt;text-align: left;"><br/></p>
               </li>
               <li style="padding-left: 42pt;text-indent: -36pt;line-height: 12pt;text-align: left;">
                  <h2 style="display: inline;">1.4 Emergency telephone number</h2>
                  <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;"> Tel: +44 121 557 3883 (9am - 5pm Mon - Thurs, 9am - 4pm Friday)</p>
                 
                  <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Email: info@jtp.uk.com (24 hours)</p>
      <p style="text-indent: 0pt;text-align: left;"><br/></p>
               </li>
            </ul>
        </ul>

        <h4>SECTION 2: Hazard identification</h4>
        <ul style="margin:0; padding:0; text-decoration:none;">
                <ul  style="margin:0; padding:0; text-decoration:none;">
                   <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                      <h2 style="display: inline; ">2.1 Classification of the substance or mixture</h2>
                   <p style="padding-left:20pt;"> {{$data->product_presentations}}</p>
                      <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Symbols does not need labelling as hazardous</p>
                      <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CLP Directive 1272/2008/EC</p>
                      <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">GHS pictograms does not need labelling as hazardous</p>
                      <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">No hazard class</p>
                      <p style="text-indent: 0pt;text-align: left;"><br/></p>
                   </li>
               
                </ul>


                <ul  style="margin:0; padding:0; text-decoration:none;">
                        <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                           <h2 style="display: inline;">2.2 Label elements</h2>
                           <p style="padding-left:20pt;">{{$data->product_presentations}}</p>
                           <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Directive 1999/45/EC</p>
                           <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Symbols does not need labelling as hazardous</p>
                           <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CLP Directive 1272/2008/EC</p>
                           <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">GHS pictograms does not need labelling as hazardous</p>
                           <p style="text-indent: 0pt;text-align: left;"><br/></p>
                        </li>
                    
                     </ul>

                     
                <ul  style="margin:0; padding:0; text-decoration:none;">
                        <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                           <h2 style="display: inline;">2.3 Other hazards</h2>
                           <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Possible Hazards from physicochemical Properties</p>
                           <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">According to our current status of knowledge and experience we state that this product does not contain
                                any substances which, in accordance with EC regulations 1272/2008/EC, 1907/2006/EC, 1999/45/EC, have to be
                                declared as dangerous goods, either because of their applied concentration or because of their total amount in
                                anyone kit.</p>
                           <p style="text-indent: 0pt;text-align: left;"><br/></p>
                        </li>
                    
                     </ul>
            </ul>

             

            <footer>
                    <div>
                            <p>Johnson Test Papers Ltd</p>
                            <p>Hainge Park, Hainge Road</p>
                            <p>Oldbury, West Midlands</p>
                            <p>B69 2NU, United Kingdom</p>
                        </div>
                    
                        <div>
                        <p><b>T:</b> +44 (0)121 559 3883</p>
                        <p><b>F:</b> +44 (0)121 559 8235</p>
                        <p><b>E:</b> info@jtp.uk.com</p>
                        <p><b>W:</b> <a href="http://www.johnsontestpapers.com"></a>www.johnsontestpapers.com</p>
                        </div>
                    
                        <div>
                                <p>Registered in England</p>
                                <p>Company Reg No: 4112470</p>
                                <p>VAT No: GB 754 691304</p>
                            </div>
                            <div style="position:relative; margin-bottom:4em;">
                                {{-- Have to put the directory to the live..  --}}
                              {{-- <img src="images/iso.jpg" style="width:9em height:8.7em" alt=""> --}}
                                </div>
            </footer>

            <div class="page-break"></div>

            <header class="clearfix">
                    <div style="float:left">
                            <h1 style="margin:0; padding:0;" >Safety Data Sheet</h1>
                        <small style="margin:0; padding:0;">According to Directive 1907/2006/EC (REACh) and Regulation 2015/830/EU</small>
                    
                    </div>
            
                    <div style="float:right;" >
                            <img class="logo" src="images/logo.png" alt="">
                    </div>
                </header>
                
                <div class="issued clearfix">
                    <small>Issued on :</small>
                    <div class="page">
                        <small>Page 2/6</small>
                    </div>  
                </div>

                <h4 style="margin-top:1em;">SECTION 3: Composition/Information on Ingredients</h4>
                <ul style="margin:0; padding:0; text-decoration:none;">
                        <ul  style="margin:0; padding:0; text-decoration:none;">
                           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                              <h2 style="display: inline;">3.1 Substances or 3.2 Mixtures</h2>
                              <div class="clearfix" style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                    <p  style="float:left;" >Chemical: cellulose </p> <p style="float:right">CAS No.: 9004-34-6</p>
                              </div>
                              <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Concentrations: 95 - 100%</p>
                              <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Formula: (C6H10O5)n</p>
                              <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">REACH Reg. No: exempt, Annex IV</p>
                              <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">EC No.: 232-674-9</p>
                              <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">RTECS: FJ5691460</p>
                              <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">TSCA Inventory: listed</p>
                              <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">acc. 1999/45/EC: - acc. CLP (GHS): not necessary</p>
                              <br>
                              <div class="clearfix" style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                                    <p  style="float:left;" >Chemical: chemicals/mixture <1%, no declaration necessary </p> <p style="float:right">CAS No.: -</p>
                              </div>
                              <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Concentration: 0.1 - 1%</p>
                              <p style="padding-left: 20pt;text-indent: 0pt;line-height: 10pt;text-align: left;">acc. 1999/45/EC: - acc. CLP (GHS): not necessary</p>
                              <p style="text-indent: 0pt;text-align: left;"><br/></p>
                           </li>
                       
                        </ul>
        
        
                        <ul  style="margin:0; padding:0; text-decoration:none;">
                                <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                   <h2 style="display: inline;">3.3 Remarks</h2>
                                   <p style="padding-left:20pt;">--</p>
               
                                </li>
                            
                             </ul>
        
                             
                       
                    </ul>
                    <h4>SECTION 4: First aid measures</h4>
                    <ul style="margin:0; padding:0; text-decoration:none;">
                            <ul  style="margin:0; padding:0; text-decoration:none;">
                               <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                  <h2 style="display: inline;">4.1 Description of first aid measures</h2>
                                  <p  style="padding-left:20pt;" >Place injured person out of danger zone to fresh air immediately.</p>
                                  <p  style="padding-left:20pt;"><b>4.1.1 After SKIN contact</b>
                                </p>
                                <p style="padding-left:40pt;">Not necessary. Remove dust with wetted tissue</p>
                                  <p style="padding-left:20pt;"><b>4.1.2 After EYE contact</b>
                                </p>
                                <p style="padding-left:40pt;">  Not necessary. Rub dust with teardrops from eye</p>
                                  <p  style="padding-left:20pt;"><b>4.1.3 After INHALATION of vapours </b>
                                </p>
                                <p style="padding-left:40pt;">  Not necessary. After inhalation of dust, fresh air should be inhaled</p>
                                  <p  style="padding-left:20pt;"><b>4.1.5 After ORAL intake</b>
                                   </p>
                                   <p style="padding-left:40pt;">     Not necessary</p>
                               </li>
                           
                            </ul>
            
            
                            <ul  style="margin:0; padding:0; text-decoration:none;">
                                    <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                       <h2 style="display: inline;">4.2 Most important symptoms and effects, both acute and delayed</h2>
                                       <p style="padding-left:20pt;">Avoid inhalation of dust.</p>
                   
                                    </li>
                                
                                 </ul>

                                 <ul  style="margin:0; padding:0; text-decoration:none;">
                                        <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                           <h2 style="display: inline;">4.3 Indication of any immediate medical attention and special treatment needed</h2>
                                           <p style="padding-left:20pt;">No additional recommendations.</p>
                       
                                        </li>
                                    
                                     </ul>

                        </ul>

                        <h4>SECTION 5: Fire fighting measure</h4>
                        <ul style="margin:0; padding:0; text-decoration:none;">
                                <ul  style="margin:0; padding:0; text-decoration:none;">
                                   <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                      <h2 style="display: inline;">5.1 Extinguishing media</h2>
                                     
                                   </li>
                                   <p style="padding-left:20pt;">Fire extinguishers appropriate to the fire classification and if applicable, a fire blanket must be available in a prominent location in the work area. All extinguishers like Foam, Water Spray, Dry Powder, Carbon Dioxide can be used.</p>
                                </ul>
                
                
                                <ul style="margin:0; padding:0; text-decoration:none;">
                                        <ul  style="margin:0; padding:0; text-decoration:none;">
                                           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                              <h2 style="display: inline;">5.2 Special hazards arising from the substance or mixture</h2>
                                              <p style="padding-left:20pt;">None.</p>
                                           </li>
                                       
                                        </ul>


                                        <ul style="margin:0; padding:0; text-decoration:none;">
                                                <ul  style="margin:0; padding:0; text-decoration:none;">
                                                   <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                                      <h2 style="display: inline;">5.3 Advice for firefighters</h2>
                                                      <p style="padding-left:20pt;">Product burns like paper or plastic</p>
                                                   </li>
                                               
                                                </ul>

                                                <ul style="margin:0; padding:0; text-decoration:none;">
                                                        <ul  style="margin:0; padding:0; text-decoration:none;">
                                                           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                                              <h2 style="display: inline;">Additional information</h2>
                                                              <p style="padding-left:20pt;">--</p>
                                                           </li>
                                                       
                                                        </ul>
                        
                                
                            </ul>

                            <footer>
                                    <div>
                                            <p>Johnson Test Papers Ltd</p>
                                            <p>Hainge Park, Hainge Road</p>
                                            <p>Oldbury, West Midlands</p>
                                            <p>B69 2NU, United Kingdom</p>
                                        </div>
                                    
                                        <div>
                                        <p><b>T:</b> +44 (0)121 559 3883</p>
                                        <p><b>F:</b> +44 (0)121 559 8235</p>
                                        <p><b>E:</b> info@jtp.uk.com</p>
                                        <p><b>W:</b> <a href="http://www.johnsontestpapers.com"></a>www.johnsontestpapers.com</p>
                                        </div>
                                    
                                        <div>
                                                <p>Registered in England</p>
                                                <p>Company Reg No: 4112470</p>
                                                <p>VAT No: GB 754 691304</p>
                                            </div>
                                            <div style="position:relative; margin-bottom:4em;">
                                                {{-- Have to put the directory to the live..  --}}
                                              {{-- <img src="images/iso.jpg" style="width:9em height:8.7em" alt=""> --}}
                                                </div>
                            </footer>
                
                            <div class="page-break"></div>
                            

        
                                
                    
    <header class="clearfix">
        <div style="float:left">
                <h1 style="margin:0; padding:0;" >Safety Data Sheet</h1>
            <small style="margin:0; padding:0;">According to Directive 1907/2006/EC (REACh) and Regulation 2015/830/EU</small>
        
        </div>

        <div style="float:right;" >
                <img class="logo" src="images/logo.png" alt="">
        </div>
    </header>
    
    <div class="issued clearfix">
        <small>Issued on :</small>
        <div class="page">
            <small>Page 3/6</small>
        </div>  
    </div>

    <h4 style="margin-top:1em;">SECTION 6: Accidental release measures</h4>
                            
    <ul style="margin:0; padding:0; text-decoration:none;">
            <ul  style="margin:0; padding:0; text-decoration:none;">
               <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                  <h2 style="display: inline;">6.1 Personal precautions, protective equipment and emergency procedures</h2>
                  <p style="padding-left:20pt;">Not necessary.</p>
               </li>
           
            </ul>


            <ul style="margin:0; padding:0; text-decoration:none;">
                    <ul  style="margin:0; padding:0; text-decoration:none;">
                       <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                          <h2 style="display: inline;">6.2 Environmental precautions</h2>
                          <p style="padding-left:20pt;">Not necessary.</p>
                       </li>
                   
                    </ul>

                    <ul style="margin:0; padding:0; text-decoration:none;">
                            <ul  style="margin:0; padding:0; text-decoration:none;">
                               <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                  <h2 style="display: inline;">6.3 Methods and material for contamination and cleaning</h2>
                                  <p style="padding-left:20pt;">Clean working area with water. Flush used water into drains</p>
                               </li>
                           
                            </ul>

                            <ul style="margin:0; padding:0; text-decoration:none;">
                                    <ul  style="margin:0; padding:0; text-decoration:none;">
                                       <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                          <h2 style="display: inline;">6.4 Reference to other sections</h2>
                                          <p style="padding-left:20pt;">---</p>
                                       </li>
                                   
                                    </ul>
        

    
</ul>         
<h4>SECTION 7: Handling and storage</h4>

<ul style="margin:0; padding:0; text-decoration:none;">
        <ul  style="margin:0; padding:0; text-decoration:none;">
           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
              <h2 style="display: inline;">7.1 Precautions for safe handling</h2>
              <p style="padding-left:20pt;">Handling in accordance with the test instruction supplied with the product.</p>
           </li>
       
        </ul>

        <ul style="margin:0; padding:0; text-decoration:none;">
                <ul  style="margin:0; padding:0; text-decoration:none;">
                   <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                      <h2 style="display: inline;">7.2 Conditions for safe storage, including any incompatibilities</h2>
                      <p style="padding-left:20pt;">The original product packaging of Johnson Test Papers allows safe storage.</p>
                      <p style="padding-left:20pt;"><b>7.2.1 </b>Requirements for stock rooms and containers</p>
                      <p style="padding-left:20pt;">Keep original product packaging tightly closed during handling and storage.</p>
                   </li>
               
                </ul>

                <ul style="margin:0; padding:0; text-decoration:none;">
                        <ul  style="margin:0; padding:0; text-decoration:none;">
                           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                              <h2 style="display: inline;">7.3 Specific end use(s)</h2>
                              <p style="padding-left:20pt;">Product for analytical use</p>
                           </li>
                       
                        </ul>



</ul>         

<h4>SECTION 8: Exposure controls/personal protection</h4>
<ul style="margin:0; padding:0; text-decoration:none;">
        <ul  style="margin:0; padding:0; text-decoration:none;">
           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
              <h2 style="display: inline;">8.1 Control parameters</h2>
              <p style="padding-left:20pt;">{{$data->product_presentations}}</p>
              <div class="clearfix" style="padding-left:20pt;">
                    <p  style="float:left;" >Chemical: cellulose </p> <p style="float:right">CAS No.: 9004-34-6</p>
              </div>
              <div class="clearfix" style="padding-left:20pt;">
                    <p  style="float:left;" >Chemical: chemicals/mixture <1%, no declaration required </p> <p style="float:right">CAS No.: -</p>
              </div>
 
              
              
           </li>
       
        </ul>

        <ul style="margin:0; padding:0; text-decoration:none;">
                <ul  style="margin:0; padding:0; text-decoration:none;">
                   <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                      <h2 style="display: inline;">8.2 Exposure controls</h2>
                      <p style="padding-left:20pt;">Not necessary</p>
                      <p style="padding-left:20pt;"><b>8.2.1 Respiratory Protection</b></p>
                      <p style="padding-left:40pt;">Not necessary</p>
                      <p style="padding-left:20pt;"><b>8.2.1 Hand Protection</b> </p>
                      <p style="padding-left:40pt;">Not necessary</p>
                      <p style="padding-left:20pt;"><b>8.2.3 Eye Protection</b></p>
                      <p style="padding-left:40pt;">Not necessary</p>
                      <p style="padding-left:20pt;"><b>8.2.4 Skin Protection</b></p>
                      <p style="padding-left:40pt;">Not necessary</p>
                      <p style="padding-left:20pt;"><b>8.2.5 Personal Hygiene</b></p>
                      <p style="padding-left:40pt;">Information not necessary</p>
                   </li>
               
                </ul>

    


</ul>         


<footer>
        <div>
                <p>Johnson Test Papers Ltd</p>
                <p>Hainge Park, Hainge Road</p>
                <p>Oldbury, West Midlands</p>
                <p>B69 2NU, United Kingdom</p>
            </div>
        
            <div>
            <p><b>T:</b> +44 (0)121 559 3883</p>
            <p><b>F:</b> +44 (0)121 559 8235</p>
            <p><b>E:</b> info@jtp.uk.com</p>
            <p><b>W:</b> <a href="http://www.johnsontestpapers.com"></a>www.johnsontestpapers.com</p>
            </div>
        
            <div>
                    <p>Registered in England</p>
                    <p>Company Reg No: 4112470</p>
                    <p>VAT No: GB 754 691304</p>
                </div>
                <div style="position:relative; margin-bottom:4em;">
                    {{-- Have to put the directory to the live..  --}}
                  {{-- <img src="images/iso.jpg" style="width:9em height:8.7em" alt=""> --}}
                    </div>
</footer>

<div class="page-break"></div>



    

<header class="clearfix">
<div style="float:left">
<h1 style="margin:0; padding:0;" >Safety Data Sheet</h1>
<small style="margin:0; padding:0;">According to Directive 1907/2006/EC (REACh) and Regulation 2015/830/EU</small>

</div>

<div style="float:right;" >
<img class="logo" src="images/logo.png" alt="">
</div>
</header>

<div class="issued clearfix">
<small>Issued on :</small>
<div class="page">
<small>Page 4/6</small>
</div>  
</div>

<h4 style="margin-top:1em;">SECTION 9: Physical and chemical properties</h4>

<ul style="margin:0; padding:0; text-decoration:none;">
 

        <ul style="margin:0; padding:0; text-decoration:none;">
                <ul  style="margin:0; padding:0; text-decoration:none;">
                   <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                      <h2 style="display: inline;">9.1 Information on basic physical and chemical properties</h2>
                      <p style="padding-left:20pt;">{{$data->product_presentations}}</p>
                      <div class="clearfix" style="margin-left:36pt;">
                            <p style="padding-left:20pt; display:inline-block; width:33.3%;"><b>Appearance:</b> Solid</p>
                            <p style="padding-left:20pt; display:inline-block; width:33.3%;"><b>Colour:</b> {{$data->product_colour_param}}</p>
                            <p style="padding-left:20pt; display:inline-block; width:33.3%;"><b>Odour:</b> odourless</p>

                      </div>

                   </li>
               
                </ul>

                <ul  style="margin:0; padding:0; text-decoration:none;">
                        <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                           <h2 style="display: inline;">9.2 Other Information</h2>
                           <p style="padding-left:20pt;">--</p>
     
                        </li>
                    
                     </ul>
                    
</ul>         



<h4 style="margin-top:1em;">SECTION 10: Stability and reactivity</h4>

<ul style="margin:0; padding:0; text-decoration:none;">
        <ul  style="margin:0; padding:0; text-decoration:none;">
           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
              <h2 style="display: inline;">10.1 Reactivity</h2>
              <p style="padding-left:20pt;">None</p>
              
           </li>
       
        </ul>

        <ul style="margin:0; padding:0; text-decoration:none;">
                <ul  style="margin:0; padding:0; text-decoration:none;">
                   <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                      <h2 style="display: inline;">10.2 Chemical stability</h2>
                      <p style="padding-left:20pt;">No known instability.</p>
                   </li>
               
                </ul>

                <ul  style="margin:0; padding:0; text-decoration:none;">
                        <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                           <h2 style="display: inline;">10.3 Possibility of hazardous reactions</h2>
                           <p style="padding-left:20pt;" >None.</p>
     
                        </li>
                    
                     </ul>

                     <ul  style="margin:0; padding:0; text-decoration:none;">
                            <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                               <h2 style="display: inline;">10.4 Conditions to avoid</h2>
                               <p style="padding-left:20pt;">None.</p>
         
                            </li>
                        
                         </ul>

                         <ul  style="margin:0; padding:0; text-decoration:none;">
                                <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                   <h2 style="display: inline;">10.5 Incompatible materials</h2>
                                   <p style="padding-left:20pt;">Not necessary.</p>
             
                                </li>
                            
                             </ul>

                             <ul  style="margin:0; padding:0; text-decoration:none;">
                                    <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                       <h2 style="display: inline;">10.6 Hazardous decomposition products</h2>
                                    </li>
                                
                                    <p style="padding-left:20pt;">In the original packaging all parts/all reagents are safely and separated stored. Decompositions are not observed during the expiration period under the recommended conditions.</p>
                 
                                 </ul>
                    
</ul>         

<h4>SECTION 11: Toxicological information</h4>
<ul style="margin:0; padding:0; text-decoration:none;">
        <ul  style="margin:0; padding:0; text-decoration:none;">
           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
              <h2 style="display: inline;">11.1 Information on toxicological effects</h2>
              <div class="clearfix" style="padding-left:20pt;">
                    <p  style="float:left;" >Chemical: cellulose </p> <p style="float:right">CAS No.: 9004-34-6</p>
              </div>
              <div class="clearfix" style="padding-left:20pt;">
                    <p  style="float:left;" >Chemical: chemicals/mixture <1%, no declaration required  </p> <p style="float:right">CAS No.: -</p>
              </div>
    
           </li>
       
        </ul>

    
                    
</ul>         




<footer>
        <div>
                <p>Johnson Test Papers Ltd</p>
                <p>Hainge Park, Hainge Road</p>
                <p>Oldbury, West Midlands</p>
                <p>B69 2NU, United Kingdom</p>
            </div>
        
            <div>
            <p><b>T:</b> +44 (0)121 559 3883</p>
            <p><b>F:</b> +44 (0)121 559 8235</p>
            <p><b>E:</b> info@jtp.uk.com</p>
            <p><b>W:</b> <a href="http://www.johnsontestpapers.com"></a>www.johnsontestpapers.com</p>
            </div>
        
            <div>
                    <p>Registered in England</p>
                    <p>Company Reg No: 4112470</p>
                    <p>VAT No: GB 754 691304</p>
                </div>
                <div style="position:relative; margin-bottom:4em;">
                    {{-- Have to put the directory to the live..  --}}
                  {{-- <img src="images/iso.jpg" style="width:9em height:8.7em" alt=""> --}}
                    </div>
</footer>

<div class="page-break"></div>



    

<header class="clearfix">
<div style="float:left">
<h1 style="margin:0; padding:0;" >Safety Data Sheet</h1>
<small style="margin:0; padding:0;">According to Directive 1907/2006/EC (REACh) and Regulation 2015/830/EU</small>

</div>

<div style="float:right;" >
<img class="logo" src="images/logo.png" alt="">
</div>
</header>

<div class="issued clearfix">
<small>Issued on :</small>
<div class="page">
<small>Page 5/6</small>
</div>  
</div>






<h4 style="margin-top:1em;">SECTION 12: Ecological information</h4>
<ul style="margin:0; padding:0; text-decoration:none;">
        <ul  style="margin:0; padding:0; text-decoration:none;">
           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
              <h2 style="display: inline;">12.1 Toxicity</h2>
              <div class="clearfix" style="padding-left:20pt;">
                    <p  style="float:left;" >Chemical: cellulose </p> <p style="float:right">CAS No.: 9004-34-6</p>
              </div>
           </li>

           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                <h2 style="display: inline;">12.2 Persistence and degradability</h2>
                <p style="padding-left:20pt;">not necessary</p>
   
             </li>

             <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                    <h2 style="display: inline;">12.3 Bioaccumulative potentialy</h2>
                    <p style="padding-left:20pt;">not necessary</p>
                   
                 </li>
                 
                 <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                        <h2 style="display: inline;">12.4 Mobility in soil</h2>
                        <p style="padding-left:20pt;">not necessary</p>
                       
                     </li>

                     <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                            <h2 style="display: inline;">12.5 Results of PBT and vPVB assessment</h2>
                            <p style="padding-left:20pt;">no data available</p>
                           
                         </li>

                         <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                                <h2 style="display: inline;">12.6 Other adverse effects</h2>
                                <p style="padding-left:20pt;">no additional data available</p>
                               
                             </li>
        </ul>

    
                    
</ul>       
<h4>SECTION 13: Disposal considerations</h4>

<ul style="margin:0; padding:0; text-decoration:none;">
        <ul  style="margin:0; padding:0; text-decoration:none;">
           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
              <h2 style="display: inline;">13.1 Waste treatment methods</h2>
              <p style="padding-left:20pt;">General: Empty solids into municipal waste and empty liquids into drains</p>
           </li>

        
        </ul>

    
                    
</ul>   

<h4>SECTION 14: Transport information</h4>
<ul style="margin:0; padding:0; text-decoration:none;">
        <ul  style="margin:0; padding:0; text-decoration:none;">
           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
              <h2 style="display: inline;">14-14.4 Waste treatment methods</h2>
             <p style="padding-left:20pt;">not necessary</p>
           </li>

           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                <h2 style="display: inline;">14.5 Environmental hazards</h2>
               <p style="padding-left:20pt;">not necessary</p>
             </li>
             <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                    <h2 style="display: inline;">14.6 Special precautions for user</h2>
                   <p style="padding-left:20pt;">not necessary</p>
                 </li>
                 <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                        <h2 style="display: inline;">14.7 Transport in bulk according to Annex II of MARPOL and the IBC Code</h2>
                       <p style="padding-left:20pt;">not applicable</p>
                     </li>
        </ul>    
</ul>   
<h4>
        SECTION 15: Regulatory information
</h4>
<ul style="margin:0; padding:0; text-decoration:none;">
        <ul  style="margin:0; padding:0; text-decoration:none;">
           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
              <h2 style="display: inline;">15.1 Safety, health and environmental regulations/legislation specific for the substance or mixture</h2>
           </li>

           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                <h2 style="display: inline;">15.2 Chemical safety assessment</h2>
               <p style="padding-left:20pt;">not necessary</p>
             </li>
        </ul>    
</ul>   



<footer>
        <div>
                <p>Johnson Test Papers Ltd</p>
                <p>Hainge Park, Hainge Road</p>
                <p>Oldbury, West Midlands</p>
                <p>B69 2NU, United Kingdom</p>
            </div>
        
            <div>
            <p><b>T:</b> +44 (0)121 559 3883</p>
            <p><b>F:</b> +44 (0)121 559 8235</p>
            <p><b>E:</b> info@jtp.uk.com</p>
            <p><b>W:</b> <a href="http://www.johnsontestpapers.com"></a>www.johnsontestpapers.com</p>
            </div>
        
            <div>
                    <p>Registered in England</p>
                    <p>Company Reg No: 4112470</p>
                    <p>VAT No: GB 754 691304</p>
                </div>
                <div style="position:relative; margin-bottom:4em;">
                    {{-- Have to put the directory to the live..  --}}
                  {{-- <img src="images/iso.jpg" style="width:9em height:8.7em" alt=""> --}}
                    </div>
</footer>

<div class="page-break"></div>



    

<header class="clearfix">
<div style="float:left">
<h1 style="margin:0; padding:0;" >Safety Data Sheet</h1>
<small style="margin:0; padding:0;">According to Directive 1907/2006/EC (REACh) and Regulation 2015/830/EU</small>

</div>

<div style="float:right;" >
<img class="logo" src="images/logo.png" alt="">
</div>
</header>

<div class="issued clearfix">
<small>Issued on :</small>
<div class="page">
<small>Page 6/6</small>
</div>  
</div>



<h4 style="margin-top:1em;">SECTION 16: Other information</h4>
<ul style="margin:0; padding:0; text-decoration:none;">
        <ul  style="margin:0; padding:0; text-decoration:none;">
           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
              <h2 style="display: inline;">16.1 List of R, H and P phrases</h2>
              <p style="padding-left:20pt;"><b>16.1.1</b> Not necessary</p>
              <p style="padding-left:20pt;"><b>16.1.2</b> Not necessary</p>
              <p style="padding-left:20pt;"><b>16.1.3</b> Not necessary</p>
           </li>

           <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                <h2 style="display: inline;">16.3 Recommended Restriction on Use</h2>
               <p style="padding-left:20pt;">None</p>
             </li>

             <li style="padding-top: 8pt;padding-left: 42pt ;text-indent: -36pt;">
                    <h2 style="display: inline;">16.4 Further information</h2>
            
                 </li>

                 <p style="padding-left:20pt;">Johnson Test Papers Ltd provides the information contained in good faith and being up to date at the time of the revision. The
                        document is intended only as a guide to the appropriate precautionary handling of the material by a properly trained person
                        using this product. Individuals receiving the information must exercise their own judgement in determining its appropriateness
                        for a particular purpose.
                        </p>
                        <br>
                        <p style="padding-left:20pt;">Johnson Test Papers Ltd makes no representations or warranties, either expressed or implied, including without limitation any
                                warranties of merchantability, fitness for a particular purpose with respect to the information set forth herein or the product to
                                which the information refers. Accordingly Johnson Test Papers Ltd will not be responsible for damages resulting from use of or
                                reliance upon this information. See terms and conditions at the back of our catalogue for more information.</p>

                 <li style="padding-top: 8pt;padding-left: 42pt;text-indent: -36pt;text-align: left;">
                        <h2 style="display: inline;">16.5 Sources of Key Data</h2>
                      
                     </li>
                     <p style="padding-left:20pt;">Regulation 453/2010/EU REACH - Requirements for the compilation of Safety Data Sheets
                            Regulation 487/2013/EU, 4th adaptation of CLP regulation to technical and scientific progress
                            Raw material supplier’s safety data sheets where applicable</p>
        
        </ul>    
</ul>   

<b style="margin-top:15em">Revisions/Updates</b>
<footer>
        <div>
                <p>Johnson Test Papers Ltd</p>
                <p>Hainge Park, Hainge Road</p>
                <p>Oldbury, West Midlands</p>
                <p>B69 2NU, United Kingdom</p>
            </div>
        
            <div>
            <p><b>T:</b> +44 (0)121 559 3883</p>
            <p><b>F:</b> +44 (0)121 559 8235</p>
            <p><b>E:</b> info@jtp.uk.com</p>
            <p><b>W:</b> <a href="http://www.johnsontestpapers.com"></a>www.johnsontestpapers.com</p>
            </div>
        
            <div>
                    <p>Registered in England</p>
                    <p>Company Reg No: 4112470</p>
                    <p>VAT No: GB 754 691304</p>
                </div>
                <div style="position:relative; margin-bottom:4em;">
                    {{-- Have to put the directory to the live..  --}}
                  {{-- <img src="images/iso.jpg" style="width:9em height:8.7em" alt=""> --}}
                    </div>
</footer>
   </body>
</html>