@extends('frontend_view.layouts.layout')
    @section('content')

<style>
.accordion-collapse {
 transition: max-height 0.5s ease-out;
 overflow: hidden;
}.faq button{
    text-align:left;
}
</style>

<div class="container-fluid">
      @include('frontend_view.layouts.breadcrumb_nav')

    <section class="zero_padding" id="top-banner">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{ URL('assets/images/support/faq.png') }}" alt="faq"/>
                <h1 class="centered">How we can <span class="text-white">help </span></h1>
            </div>
        </div>
    </section>

    <section class="site-section lighter-bg" id="meet">
        <div class="container">
            <div class="row justify-content-center">
                        
                <div class="col-md-12 text-center general-text-color">
                    <h3 class="themeTextColor">Frequently Asked Questions</h3>
                    <p>Welcome to our FAQ, Here you can find answers <br/>to some of the most asked questions.</p>
                </div>

                <div class="col-md-12 padding-top-bot-40">
 
                
                    <div class="main-div" style="display:flex; flex-direction: row; flex-wrap: wrap; justify-content:space-around;">
                        @if($faq_data->isNotEmpty())
                            @foreach($faq_data as $val)
                            <div class="col-md-6" style="padding:0 20px;">
                                <div class="accordion-item">
                                    <h2 class="accordion-header faq themebackgroundColor" id="heading{{$val->id}}">
                                        <button type="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseOne" class="accordion-button themebackgroundColor" data-bs-target="#collapse{{$loop->index}}">
                                            <label class="nsr22">{{ $val->question }} </label>
                                            <i class="material-icons" style="float:right;">&#xe313;</i>
                                        </button>
                                    </h2>
                                    <div id="collapse{{$loop->index}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <text>{!! $val->answer !!}</text>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif

                        
                    </div>

                </div>
            </div>
        </div>
    </section>
    @include('frontend_view.layouts.contact_section')
</div>

    @endsection