<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$coa}} | PDF</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <style>
        
        .text-center{
            text-align:center;
        }
        footer {
            width:100%;
            position: fixed;
            bottom:0;
        }
        footer div{
            font-size: 0.7em;
            display: inline-block;
            text-align: justify;
            margin: 0;
        }
        footer div p{
            margin: 0;
        }
        
    </style>
    <body>

        <small style="float: right; font-size:0.6em;">DOC 025 ISS 4</small>
        <header style="margin-top:0.5em;">

        <div id="container" style="white-space:nowrap; display: flex; align-items:center;">

            <div id="texts" style="display:block; float:left; width:60%;"> 
                <h1 style="margin:0; margin-top:.7em; padding:0;font-size:40px;">{{$coa}} </h1>
            </div>

            <div id="image" style="display:block; width:40%;">
                <img style="height:100px; width:100%;" src="{{ public_path().'/assets/images/colour-logo.png'}}"/>
            </div>

        </div>

        <p style="border: 2px solid #f5ad3c; margin:3em 0;"></p>

        <p class="text-center"> This certificate confirms that this product has been manufactured and tested by Johnson
            Test Papers Ltd and that the batch conforms to its specification provided that the product
            is kept as instructed.</p>
        <p class="text-center">Product Code: {{ $prod_code }}</p>
        <p class="text-center">Product Description: {{ $sub_cat_name }} {{ $sub_cat_ranges }} {{ $presentation }}</p>
        <p class="text-center" style="display:flex; justify-content:center;">Johnson Test Papers are manufactured in the United Kingdom. Our fully documented Quality Assurance System has been implemented in compliance with ISO 9001 and is subject to periodical external audits by IMS International, accredited by UKAS Quality Management.</p>

        <p class="text-center">All supporting documentation is retained under the premise of Johnson Test Papers Ltd.</p>
        <p class="text-center">This document has been produced electronically and is valid without a signature.</p>
        <p class="text-center">Date: </p>


        <footer>
            <div style="width:25%;">
                <p>Johnson Test Papers Ltd</p>
                <p>Hainge Park, Hainge Road</p>
                <p>Oldbury, West Midlands</p>
                <p>B69 2NU, United Kingdom</p>
            </div>
        
           <div style="width:25%;">
                <p><b>T:</b>+44 (0)121 559 3883</p>
                <p><b>F:</b>+44 (0)121 559 8235</p>
                <p><b>E:</b>info@jtp.uk.com</p>
                <p><b>W:</b><a href="http://www.johnsontestpapers.com"></a>www.johnsontestpapers.com</p>
            </div>

            <div style="width:25%;">
                <p>Registered in England</p>
                <p>Company Reg No: 4112470</p>
                <p>VAT No: GB 754 691304</p>
            </div>

            <div style="position:relative; padding-left: 0em;">
                <img src="https://www.johnsontestpapers.com/images/iso/iso9001.jpg" style="width:7.1em;"  alt="">
                <img src="https://www.johnsontestpapers.com/images/iso/iso13485.jpg" style="width:7.1em;" alt="">
            </div>
        </footer>
    </body>

</html>