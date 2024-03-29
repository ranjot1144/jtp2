<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
    <style>
        @font-face { font-family: 'MyFont'; src: url('{{url('/fonts/centurygothic.ttf')}}') format('truetype') }

        footer {
            padding-bottom: 1em;
            width:100%;
            position: fixed;
            bottom: 2em;
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
                <h1 style="margin:0; margin-top:1em; padding:0;">Certificate of Analysis </h1>
                <?php $ex = explode(' ',$productname);
                    unset($ex[0]); 
                    $new='';
                    foreach($ex as $item){
                        $new = $new . ' ' .$item;
                    }

                ?>
            </div>
            <div style="display:block; float:right;">
                <img class="logo" style="width:100%; height:100px; text-align:center;" src="{{public_path()}}/assets/images/colour-logo.png" alt="Jtp-logo">
            </div>
        </header>

            <div style="display: block; padding-top:0.5em;">
                <h3>Product Information</h3>
                <p><b>Product Code:</b>
                @if (strpos($productcode, '.') !== false) 
                    {{$productcode}}
                @else
                            @if ($foundbatch['Form'] == 'B')
                                {{$productcode.'.1' }}
                            @elseif($foundbatch['Form']=='R')
                                {{$productcode.'.5' }}
                            @elseif($foundbatch['Form']=='S')
                                @if($productcode=="140")
                                140.4
                            @elseif($productcode=="127")
                                127.2C
                            @elseif(strpos($new,"J-QUANT") !== false)
                                    @if(in_array($productcode,["164","163","161","185"]))
                                        {{$productcode.'.1C' }}
                                    @elseif(in_array($productcode,["173","176","175","167","168","165","172"]))
                                        {{$productcode.'.5c' }}
                                    @elseif(strpos($new,"QAC 200-1000") != false)
                                        {{$productcode.'.3' }}
                                    @elseif(strpos($new,"QAC 400R") != false)
                                        {{$productcode.'.5' }}
                                    @elseif(strpos($new,"QAC 25-1000") != false)
                                        {{$productcode.'.2' }}
                                    @else
                                        {{$productcode.'.1' }}
                                    @endif
                            @elseif(strpos($new,"M8001 SILVER") != false)
                                {{$productcode.'.11' }}
                            @elseif(strpos($new,"Water Finder") != false)
                                {{$productcode.'.10' }}
                            @else
                                {{$productcode.'.3' }}
                            @endif
                    @elseif($foundbatch['Form']=='LS')
                        {{$productcode.'.33' }}
                    @elseif($foundbatch['Form']=='LB')
                        {{$productcode}}
                    @elseif($foundbatch['Form']=='SB')
                        {{$productcode}}
                    @elseif($foundbatch['Form']=='SH')
                        {{$productcode}}
                    @elseif($foundbatch['Form']=='D')
                        {{$productcode}}
                    @elseif($foundbatch['Form']=='B4')
                        {{$productcode.'.33C' }}
                    @else
                        {{$productcode}}
                    @endif
                @endif
                </p>
                <p><b>Product:</b> {{$new}}</p>
                <p><b>Form:</b> @if($foundbatch['Form']=='B')
                    10 books of 20 strips
                @elseif($foundbatch['Form']=='R')
                    1 reel (5m x 7mm)
                @elseif($foundbatch['Form']=='S')
                    @if(is_numeric($foundbatch['Pack Size']))
                        {{$foundbatch['Pack Size']}} strips per pack
                    @else
                        100 strips per pack
                    @endif
                @elseif($foundbatch['Form']=='LS')
                    Loose Strips
                @elseif($foundbatch['Form']=='LB')
                Loose Books
                @elseif($foundbatch['Form']=='SB')
                    Single Books
                @elseif($foundbatch['Form']=='SH')
                    Sheet
                @elseif($foundbatch['Form']=='D')
                    Discs
                @elseif($foundbatch['Form']=='B4')
                    4X25
                @else
                    {{ $foundbatch['Form'] }}
                @endif</p>

                <p><b>Batch Number:</b> {{$foundbatch['Finished Product Batch No.'] }} @if($foundbatch['Form']=='D')<b>Honeywell revision level 02 </b> @endif</p> 
                <p><b>Date of release:</b> {{$foundbatch['Date'] }}</p>
                <p><b>Expiry:</b> @if($foundbatch['Expiry']) {{$foundbatch['Expiry'] }} @else N/A @endif</p>
            </div>

        <!-- <p style="margin-top:2em;">We confirm that the above mentioned product has successfully passed our quality <br/>control, in accordance with EN ISO 9001 and meets the specific criteria.</p>
        <p style="margin-top:2em;">This document has been produced electronically and is valid without a signature.</p>

        <p style="text-align: right; margin-top:4em; border-bottom:1px solid #f5ad3c; padding:0.6em; display:inline-block; float:right;"> Date of examination : {{$foundbatch['Date'] }} </p> -->

        <footer style="width:100%;">

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

            <!--<div style="position:relative; padding-left: 1em;">
                <img src="{{public_path()}}/assets/images/iso/iso13485.jpg" style="width:5em;"  alt="">
                <img src="{{public_path()}}/assets/images/iso/iso9001.jpg" style="width:5em;" alt="">
            </div> -->

        </footer>



</body>

</html>







