<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <style>
        @font-face { 
            font-family: 'MyFont'; 
            src: url('{{url('/fonts/centurygothic.ttf')}}') format('truetype');
        }
        footer {
            /* padding-bottom: 1em; */
            width:100%;
            /* position: fixed; */
            bottom: 0;
            position: absolute; 
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
        header{
            width:100%;
                border-bottom:3px solid #f5ad3c;
                display:block;
                padding-bottom: 1em;
        }
        header::after{
            content: "";
            clear: both;
            display: table;
        }
        ul{
            text-decoration: none;
        }
        li{
            text-decoration: none;
            padding-top: 0.2em !important;
        }
        *{
            font-family: "MyFont",MyFont,"Century Gothic","Didact Gothic",sans-serif
        }
    </style>
</head>
<body>
    <small style="float: right; font-size:0.5em;">DOC 025 ISS 4</small>
        <header style="margin-top:0.5em;">
         
            <div style="display:block; float:left; width:60%;">
                <h1 style="margin:0; margin-top:1.2em; padding:0;">Certificate of Conformity </h1>
            </div>

            <div style="display:block; float:right;width:40%;">
                <img class="logo" style="height:120px; width:100%;" src="{{public_path()}}/assets/images/colour-logo.png" alt="">
            </div>
        </header>
        
        <div style="text-align:center;">
            <p style="margin-top:2em;">This certificate confirms that this product has been manufactured and tested by 
                Johnson Test Papers Ltd and that the batch conforms to its specification 
                provided that the product is kept as instructed.</p>
    
            <p style="margin-top:2em;">Product Code: {{$product[0]->sp_prod_code}}</p>
            <p style="margin-top:2em;">Product Description: {{$product[0]->sub_cat_name.' '.$product[0]->sc_ranges.', '.$product[0]->sp_presentation}}</p>
    
            <p style="margin-top:2em;">Johnson Test Papers are manufactured in the United Kingdom. Our fully documented Quality Assurance System has been implemented in compliance with ISO 9001 and is subject to periodical external audits by IMS International, accredited by UKAS Quality Management.</p>
            
            <p>All supporting documentation is retained under the premise of Johnson Test Papers Ltd.</p>
        </div>
            
        <div class="text-center" style="text-align:center;">
            <p>This document has been produced electronically and is valid without a signature.</p>                        
            <p>Date: 23 Jun 2021 </p>
        </div>
        <footer>
            <div style="width:22%;">
                <p>Johnson Test Papers Ltd</p>
                <p>Hainge Park, Hainge Road</p>
                <p>Oldbury, West Midlands</p>
                <p>B69 2NU, United Kingdom</p>
            </div>
        
            <div style="width:25%;">
            <p><b>T:</b> +44 (0)121 559 3883</p>
            <p><b>F:</b> +44 (0)121 559 8235</p>
            <p><b>E:</b> info@jtp.uk.com</p>
            <p><b>W:</b> <a href="http://www.johnsontestpapers.com"></a>www.johnsontestpapers.com</p>
            </div>
        
            <div style="width:22%;">
                    <p>Registered in England</p>
                    <p>Company Reg No: 4112470</p>
                    <p>VAT No: GB 754 691304</p>
                </div>
            <div style="width:28%; position:relative;">
                <img src="{{public_path()}}/assets/images/iso/iso13485.jpg" style="width:8em;" alt="iso13485">
                <img src="{{public_path()}}/assets/images/iso/iso9001.jpg" style="width:8em;" alt="iso9001">
            </div>
        </footer>

</body>
</html>



