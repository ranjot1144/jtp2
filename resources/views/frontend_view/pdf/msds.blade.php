   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        .p, p { color: #231F20; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8pt; margin:0.2pt; }
         h1 { color: #231F20;  font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }
         h2 { color: #231F20; font-style: normal; font-weight: bold; text-decoration: none; font-size: 10pt; }
         h3 { color: #231F20; font-style: normal; font-weight: bold; text-decoration: none; font-size: 8pt; margin:0; }
         b{ color: #231F20;  font-style: normal; font-weight: bold; text-decoration: none; font-size: 8pt; margin:0.2pt; }
        h4{ padding:0; margin: 0; margin-top:1.3em; }
                .page-break {
                    page-break-after: always;
                }
                header{
                    width:100%:
                }
                footer {
                    padding-top: 0.6em;
                    border-top: 1px solid #eb5c24;
                    position: fixed;
                    bottom: 0;
                    width: 100%;
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
                    width:14em; 
                }
                *{
                    font-family: "MyFont",MyFont,"Century Gothic",CentryGothic,"Didact Gothic",sans-serif;
                }
                .issued{
                    border-bottom:1px solid #eb5c24;
                }
                .page{
                    float:right;
                }
                ul{
                    list-style: none;
                }
                p,b{
                        font-size: 1em;
                }
                li{
                        margin: 1em;
                }
    </style>

   </head>
   <body>
    <header style="position: relative;" class="clearfix" >
        <h1 style="position:absolute; left:0; top:1em; font-size:1.9em;">Safety Data Sheet</h1>

        <div style="float:right;" >
                <img class="logo" src="{{public_path()}}/assets/images/colour-logo.png" alt="">
        </div>
    </header>
    
    <div class="issued clearfix">
   
    </div>


<ul style="margin:0; padding:0;">   
        <li><b>Product Code:</b>  <p>{{$data->product_codes}}</p></li>
        <li><b>Product Name:</b> <p>{{$data->product_name}}</p></li>
        <li> <b>REACH Registration Number:</b> <p> <p>A registration number is not available for this substance as the substance
                or its use are exempted from registration according to Article 2 REACH
                Regulation (EC) No 1907/2006, the annual tonnage does not require a
                registration or the registration is envisaged for a later registration deadline.</p></p></li>
                
</ul>



<div style="margin:1em">
        <p>This item is not a hazardous substance and does not contain hazardous ingredients, substances with
                European Community workplace exposure limits or substances of very high concern (SVHC) above
                their respective disclosure limits. Hence a safety data sheet is not required according to Regulation
                (EC) No. 1907/2006 (REACH) and also not available in this case.
                </p>

</div>

<ul style="margin:0; padding:0;">
        <li><b>Responsible Department:</b>
                <p>Technical Team</p> <p>Email : technical@jtp.uk.com</p></li>
                <li><b>Emergency telephone number:</b> <p>Tel: +44 121 557 3883 (9am - 5pm Mon - Thurs, 9am - 4pm Friday)</p></li>
</ul>
<div style="margin:1em">

    


        <b style="margin-top:5em">Revision Date </b> <p>18.06.2018</p>   
        <p style="margin-top:2em">This document has been produced electronically and is valid without a signature.</p>

        <small style="font-size: 0.5em; float:right">Version: 5.0</small>    
</div>

<footer>
        <div style="padding-top:0.5em;">
            <p>Johnson Test Papers Ltd</p>
            <p>Hainge Park, Hainge Road</p>
            <p>Oldbury, West Midlands</p>
            <p>B69 2NU, United Kingdom</p>
        </div>
        
            <div style="padding-top:0.5em;">
            <p><b>T:</b> +44 (0)121 559 3883</p>
            <p><b>F:</b> +44 (0)121 559 8235</p>
            <p><b>E:</b> info@jtp.uk.com</p>
            <b style="display:inline;">W:</b><p style="font-size: 0.9em; display:inline;"> www.johnsontestpapers.com</p>
            </div>
        
            <div style="padding-top:0.1em;">
                    <p>Registered in England</p>
                    <p>Company Reg No: 4112470</p>
                    <p>VAT No: GB 754 691304</p>
                </div>
                <div style="position:relative; margin-bottom:4em;">
                    {{-- Have to put the directory to the live..  --}}
                  {{-- <img src="../../htdocs/images/iso.jpg" style="width:9em height:8.7em" alt=""> --}}
                    </div>
</footer>
   </body>
</html>