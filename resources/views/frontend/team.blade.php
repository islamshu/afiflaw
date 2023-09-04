@extends('layouts.forntend')
@section('content')
<section id="section-5c56019252933" class="s123-module s123-module-carousel layout-1 bg-primary"
data-module-id="5c56019252933" data-module-type-num="13" style="margin-bottom: 7%">
<div data-aos="fade-up" class="container-fluid page_header_style noBackground">
    <div class="row">
        <div class="container moduleTitleContainer">
            <div class="row modulesTitle text-center">
                <div class="col-xs-12">
                    <div class="page-header-wrap">
                        <H2 id="section-5c56019252933-title" class="s123-page-header  ">{{ trans__('فريق عملنا', app()->getLocale()) }}  
                        </H2>
                        <div class="three-angle-down"><i class="fa fa-angle-down"
                                aria-hidden="true"></i><i class="fa fa-angle-down"
                                aria-hidden="true"></i><i class="fa fa-angle-down"
                                aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" data-aos="fade-up">
    <!-- Categories Area -->
    <div class="text-center">
        <!-- Categories area -->
        <div class="row" style="display:none;">
            <div class="s123-categories col-xs-12">
                <ul class="items-categories-container">
                    <li data-categories-filter="gggiD8gggiA7gggiD9gggi84gggiD9gggi83gggiD9gggi84"><a
                            href="#">{{ trans__('الكل', app()->getLocale()) }}</a></li>
                </ul>
            </div>
        </div>
    </div><!-- Items Area -->
    <div class="row text-center">
        <div class="carousel-category"
            data-categories-filter="gggiD8gggiA7gggiD9gggi84gggiD9gggi83gggiD9gggi84">
            <div class="col-md-12 center">
                <div class="owl-carousel owl-theme mt-xl manual" data-itmes="6"
                    data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000, "center": false,"dots": false, "dotsEach": true, "margin": 10, "loop": true}'>
                    @foreach (App\Models\Team::get() as $item)
                        <div>
                            <a href="{{ $item->url }}" target="_blank">
                                <div class="p-h-e-bottom-0 preview-highlighter"
                                    data-unique-id="5f31316471d90" style="display: inline-block;"><img
                                        class="img-responsive lazyload"
                                        data-src="{{ asset('uploads/' . $item->image) }}"
                                        alt="{{trans__($item->title, app()->getLocale())}}" title="{{trans__($item->title, app()->getLocale())}}"></div>
                            </a>
                            <h2>{{trans__($item->title, app()->getLocale())}}</h2>
                            <p>{{ trans__($item->job, app()->getLocale()) }}</p>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->
</section>

@endsection