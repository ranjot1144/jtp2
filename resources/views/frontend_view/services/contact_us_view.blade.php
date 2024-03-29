@extends('frontend_view.layouts.layout')
    @section('content')


    @include('frontend_view.layouts.breadcrumb_nav')
    <!-- <section class="site-section-hero bg-image" style="background-image: url(&quot;../assets/images/contact_us.png&quot;); height: 60vh; background-position: 50% 1%; min-height: 150px;" data-stellar-background-ratio="0.5" id="home-border">  -->
    <section class="zero_padding" id="top-banner">
        <div class="row ">
            <div class="col-md-12 text-center">
                <img src="{{ asset('assets/images/contact_us_image.jpg') }}" alt="contact_img"/>
                <div class="centered">
                    <h2 class="bold-text">Any Questions ?</h2>
                    <h2 class="bold-text"><span class="text-white">Let's Start a</span> Conversation</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section lighter-bg">
        <div class="container">

            <div class="row justify-content-center">
            
                <div class="col-md-12 text-center general-text-color aos-init aos-animate" data-aos="fade-right">
                    <h2 class="heading">@if ($message = Session::get('success')) <span class="themeTextColor">Thank You !</span>  @endif</h2>
                </div>

                {{-- display validation error message --}}
                    @if ($message = Session::get('danger')).
                    <div class="container">
                        <div class="col-md-12 text-center general-text-color">
                            <div class="alert alert-danger alert-block">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <text style="color:red;"> Please be informed, fields with * are required </text>
                                
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    @endif
                    
                @if ($message = Session::get('success'))

                    <div class="container">
                        <div class="col-md-12 text-center general-text-color">
                            <div class="alert alert-success alert-block">
                                <text>We have received your enquiry and our Customer Service Team will <br/> aim to respond within 2 working days (excluding bank holidays)</text>
                                <br/>
                                    <img src="{{ URL('assets/images/contact_us/email_icon.png') }}" style="width:15%;padding:30px;"/>
                                <br/>
                                </text><a href="{{ URL('') }}" class="themeTextColor">Return to Home Page</a></text>
                            </div>
                        </div>
                    </div>
                        
                <div class="container" >
                    <div class="row align-items-start">

                        <div class="col-md-6" style="padding:50px 0;">
                                <div class="col-md-12 text-center" style="height:200px;">
                                    <h3 class="themeTextColor">Opening Times</h3>
                                    <p style="margin-bottom:0rem;">Monday - Thursday 9:00 a.m - 5:00 p.m</p>
                                    <p>Friday 9:00 a.m - 4:00 p.m</p>
                                </div>

                                <div class="col-md-12" style="margin-bottom: 20px;text-align: justify; text-align-last: center;">
                                    <p style="margin-bottom:0px;"><b>M:</b> +44 (0)121 557 3883</p>
                                    <p style="margin-bottom:0px;"><b>E:</b> info@johnsontestpapers.com</p>
                                    <p><b>W:</b> www.johnsontestpapers.com</p>
                                </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <div class="mapaThumb">
                                        <div class="mapaItem">
                                            <iframe style="pointer-events:none; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2428.2252955432245!2d-2.037119557995158!3d52.51126172060282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870977e5a3be683%3A0x5e7466620c122371!2sJohnson%20Test%20Papers%20Ltd!5e0!3m2!1sen!2suk!4v1703089817026!5m2!1sen!2suk" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

            @else
                <div class="container" >
                    <div class="row align-items-start">

                        <div class="col-md-6">
                            <h3 class="mb-5">Contact Form</h3>

                            <form method="post" action="{{ URL('support/validate_contact_form') }}" autocomplete="off">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="full_name">Full Name <span class="danger">*</span></label>
                                        <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Enter your full name" required />
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="subject">Subject <span class="danger">*</span></label>
                                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter your subject" required />
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="email">Email <span class="danger">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" autocomplete="off" required />
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="contact_num">Telephone Number <span class="danger">*</span></label>
                                        <input type="number" id="contact_num" name="contact_num" class="form-control" placeholder="Enter your telephone number" autocomplete="off" required />
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="company">Company <span class="danger">*</span></label>
                                        <input type="text" id="company" name="company" class="form-control" placeholder="Enter your company name" autocomplete="off" required />
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="country-select">Country <span class="danger">*</span></label>
                                        <!-- <input type="subject" id="subject" class="form-control"> -->
                                        <select name="country" id="country-select" class="form-control" autocomplete="off" required>
                                            <option default value="">-- Please select your Country --</option>
                                            @if(count($country_data) >1)
                                                @foreach($country_data as $val)
                                                    <option value="{{ $val->id }}">{{ $val->country_name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="message">Message <span class="danger">*</span></label>
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..." required></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                    </label>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12" >

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="checkbox_val" value="option1" style="height:62px;">
                                        <label class="form-check-label" for="inlineCheckbox1" style="display:inline-block; width:90%;">I hereby agree that this data will be stored and processed for the purpose of establishing contact. I am aware that I can revoke my consent at any time.</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12 text-center">
                                        <input type="submit" value="Submit" class="btn btn-primary btn-md">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-6">
                            <div class="row" style="padding:35px;">
                                <div class="col-md-12 text-center" style="height:200px;">
                                    <h3 class="themeTextColor">Opening Times</h3>
                                    <p>Monday - Thursday 9:00 a.m - 5:00 p.m</p>
                                    <p>Friday 9:00 a.m - 4:00 p.m</p>
                                </div>
                                
                                <div class="col-md-12" style="margin-bottom: 20px;text-align: justify; text-align-last: center;">
                                    <p style="margin-bottom:0px;"><b>M:</b> +44 (0)121 557 3883</p>
                                    <p style="margin-bottom:0px;"><b>E:</b> info@johnsontestpapers.com</p>
                                    <p><b>W:</b> www.johnsontestpapers.com</p>
                                </div>

                                <div class="col-md-12">
                                    <div class="mapaThumb">
                                        <div class="mapaItem">
                                            <iframe style="pointer-events:none; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2428.2252955432245!2d-2.037119557995158!3d52.51126172060282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870977e5a3be683%3A0x5e7466620c122371!2sJohnson%20Test%20Papers%20Ltd!5e0!3m2!1sen!2suk!4v1703089817026!5m2!1sen!2suk" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div> <!--Container close-->

        @endif


            </div> <!-- row close-->
        </div> <!-- Container close -->
    </section>
    @endsection