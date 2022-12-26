@extends('layouts.forntend')
@section('content')
<div id="s123PjaxMainContainer">
    <section id="top-section"
        class="homepage_style_1 top_magic_homepage_kind_1  parallax-on old_homepage_layout_log old_homepage_layout_structure_log ">
        <div class="home_background_wrapper parallax-on">
            <div class="parallax-window home-image-bg" style="background-image: url({{asset('uploads/'.$first->image)}}) !important " data-parallax="scroll" data-bleed="0"
                data-idele="parallax_home_opacity" data-opacity="1" data-filter=""
                data-backgroundcolor="#000000"
                data-image-src="{{ asset('uploads/'.$first->image) }}"
                data-position="left top" data-background-position="28.41% 31.06%"
                style="background-position:left top"></div>
        </div>
        <div class="magic_homepage magic_homepage_kind_simple_side magic_homepage_kind_1 homepage-layout-24">
            <div class="home_main_wrapper main_ele_place_right container" data-main-goal="image"
                data-second-goal="buttons">
                <div class="left">
                    <div class="side_text_object_position_center_left">
                        <div class="box_container boxStyle_">
                            <div class="hm-t-c boxBorder  ele_align_left">
                             {!! $first->text !!}
                            </div>
                            <div class="homepage_goal space_from_bottom_secondGoal ele_align_left secondGoal"
                                style="position: relative;max-width: 100%;" data-type="buttons">
                                <div class="promoButtons align_left">
                                    @if($first->url !='#')
                                    <a id="home_buttonText" href="{{ $first->url }}"
                                        class="btn btn-primary btn-xl  w-helper">{{ $first->text_button }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
       
    </section>
    <div id="s123ModulesContainer" class="s123-modules-container">
        <section id="section-5c5604f252934" class="s123-module s123-module-about layout-10 bg-primary"
            data-module-id="5c5604f252934" data-module-type-num="16">
            <div data-aos="fade-up" class="container-fluid page_header_style noBackground">
                <div class="row">
                    <div class="container moduleTitleContainer">
                        <div class="row modulesTitle text-center">
                            <div class="col-xs-12">
                                <div class="page-header-wrap">
                                    <H2 id="section-5c5604f252934-title" class="s123-page-header  ">نبذة تعريفية
                                        عن المكتب</H2>
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
            <div class="container" data-aos="fade-up"><!-- Items Area -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="about-container img-box-smaller preview-highlighter" style="background-image: url({{ asset('uploads/'.$about->image) }})">
                            <div
                                class="responsive-handler fr-view breakable about-description box box-primary box-text-primary">
                                {!! $about->text !!}  
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        
        <section id="section-62f21b3139461" class="s123-module s123-module-services layout-1"
            data-module-id="62f21b3139461" data-module-type-num="3">
            <div data-aos="fade-up" class="container-fluid page_header_style noBackground">
                <div class="row">
                    <div class="container moduleTitleContainer">
                        <div class="row modulesTitle text-center">
                            <div class="col-xs-12">
                                <div class="page-header-wrap">
                                    <H2 id="section-62f21b3139461-title" class="s123-page-header  ">لماذا نحن؟
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
            <div class="container" data-aos="fade-up"><!-- Adds top ---><!-- Container --->
                <div class="text-center features-container"><!-- Categories area -->
                    <div class="row" style="display:none;">
                        <div class="s123-categories col-xs-12">
                            <ul class="items-categories-container">
                                <li data-categories-filter="all"><a href="#">All</a></li>
                            </ul>
                        </div>
                    </div><!-- Items area -->
                    <div class="row text-center services-category" data-categories-filter="all">
                     
                       @foreach ($whyus as $item)
                       <div class="col-md-4 col-sm-4  preview-highlighter"
                       data-unique-id="62f21b1e464a1">
                       <div class="service-item">
                        <img alt="{{ $item->title }}" class="fa-stack fa-4x img-circle bgLazyload" src="{{ asset('uploads/'.$item->image) }}">
                        
                           <h4><strong>{{ $item->title }}    </strong></h4>
                           <div style="height: 10px;"></div>
                       </div>
                   </div>
                       @endforeach
                    </div>
                </div><!-- Adds bottom --->
            </div>
        </section>
        <section id="section-5c55ed7f97c7b" class="s123-module s123-module-services layout-4 bg-primary"
            data-module-id="5c55ed7f97c7b" data-module-type-num="3">
            <div data-aos="fade-up" class="container-fluid page_header_style noBackground">
                <div class="row">
                    <div class="container moduleTitleContainer">
                        <div class="row modulesTitle text-center">
                            <div class="col-xs-12">
                                <div class="page-header-wrap">
                                    <H2 id="section-5c55ed7f97c7b-title" class="s123-page-header  ">خدماتنا</H2>
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
            <div class="container" data-aos="fade-up"><!-- Adds top ---><!-- Container --->
                <div class="text-center features-container"><!-- Categories area -->
                    <div class="row" style="display:none;">
                        <div class="s123-categories col-xs-12">
                            <ul class="items-categories-container">
                                <li data-categories-filter="gggiD8gggiA7gggiD9gggi84gggiD9gggi83gggiD9gggi84"><a
                                        href="#">الكل</a></li>
                            </ul>
                        </div>
                    </div><!-- Items area -->
                    <div class="row text-center services-category"
                        data-categories-filter="gggiD8gggiA7gggiD9gggi84gggiD9gggi83gggiD9gggi84">
                        @foreach ($services as $item)
                            
                        <div class="col-md-4 col-sm-6">
                            <a
                                class="service-link s123-fast-page-load"
                                href="{{ route('singe_services',$item->slug) }}">
                                <div class="service-item s123-box-top-primary-border s123-box-flying-up preview-highlighter box-primary"
                                    data-unique-id="5c55ed81bf06b"><span
                                        class="fa-stack fa-4x img-circle bgLazyload" role="img"
                                        aria-label="{{ $item->title }} "
                                        data-bg="{{ asset('uploads/'.$item->image) }}"></span>
                                    <h4><strong>{{ $item->title }} </strong></h4>
                                    <p>{!! \Illuminate\Support\Str::limit($item->body, $limit = 180, $end = '...') !!}
                                    </p>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    
                    </div>
                </div><!-- Adds bottom --->
            </div>
        </section>
      
        <section id="section-5c56019252933" class="s123-module s123-module-carousel layout-1 bg-primary"
            data-module-id="5c56019252933" data-module-type-num="13">
            <div data-aos="fade-up" class="container-fluid page_header_style noBackground">
                <div class="row">
                    <div class="container moduleTitleContainer">
                        <div class="row modulesTitle text-center">
                            <div class="col-xs-12">
                                <div class="page-header-wrap">
                                    <H2 id="section-5c56019252933-title" class="s123-page-header  ">أبرز عملائنا
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
            <div class="container" data-aos="fade-up"><!-- Categories Area -->
                <div class="text-center"><!-- Categories area -->
                    <div class="row" style="display:none;">
                        <div class="s123-categories col-xs-12">
                            <ul class="items-categories-container">
                                <li data-categories-filter="gggiD8gggiA7gggiD9gggi84gggiD9gggi83gggiD9gggi84"><a
                                        href="#">الكل</a></li>
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
                                @foreach ($clients as $item)
                                    
                                <div>
                                    <a href="{{ $item->url }}" target="_blank">
                                        <div class="p-h-e-bottom-0 preview-highlighter"
                                            data-unique-id="5f31316471d90" style="display: inline-block;"><img
                                                class="img-responsive lazyload"
                                                data-src="{{ asset('uploads/'.$item->image) }}"
                                                alt="{{ $item->title }}" title="{{ $item->title }}"></div>
                                    </a>
                                </div>
                                @endforeach

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </section>
     
     
        <section id="section-5ae041d1d2fe5" class="s123-module s123-module-contact layout-9"
            data-module-id="5ae041d1d2fe5" data-module-type-num="7">
            <div data-aos="fade-up" class="container-fluid page_header_style noBackground">
                <div class="row">
                    <div class="container moduleTitleContainer">
                        <div class="row modulesTitle text-center">
                            <div class="col-xs-12">
                                <div class="page-header-wrap">
                                    <H2 id="section-5ae041d1d2fe5-title" class="s123-page-header  ">للتواصل معنا
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
                <div class="contact-wrapper">
                    <div class="s123-module-contact-map">
                      
                        <div class="mapouter" id="contact_63a335b0b09a8" class="map-container" style="width: 100%">
                            <div class="gmap_canvas" style="width: 100%">
                                <iframe src="https://maps.google.com/maps?q=%D9%85%D9%83%D8%AA%D8%A8%20%D9%85%D8%AD%D9%85%D8%AF%20%D8%A8%D9%86%20%D8%B9%D9%81%D9%8A%D9%81%20&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" style="width: 100%; height: 400px;">
                                </iframe>
                                <a href="https://technologg.com/blooket/" style="display:none">blooket</a>
                                <style>.mapouter{position:relative;text-align:right;height:400px;width:600px;}
                                </style>
                                <style>.gmap_canvas{overflow:hidden;background:none!important;height:400px;width:600px;}
                                </style>
                                </div>
                            </div>
                    </div>
                    <div class="row box-primary contact-form-container">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="preview-highlighter contact-details">
                                <div class="row">
                                    <div class="contact-details-email col-md-3 col-sm-12 col-xs-12"><label
                                            class="contact-details-labels">البريد الإلكتروني</label><br><a
                                            href="mailto:{!! get_general_value('email') !!}"><i
                                                class="svg-m s123-icon-converter  fa-fw"
                                                data-icon-name="envelope-o"
                                                style=" mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/envelope-o.svg?v=2'); -webkit-mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/envelope-o.svg?v=2');"
                                                data-ie11-classes=" fa-fw"
                                                alt="envelope-o">&nbsp;</i>{!! get_general_value('email') !!}</a></div>
                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                        <ul class="list-unstyled contact-as-details-container"><label
                                                class="contact-details-labels">معلومات الاتصال</label><br>
                                            <li>
                                                <a href="tel:{!! get_general_value('phone_number') !!}">
                                                    <i class="svg-m s123-icon-converter "
                                                        data-icon-name="phone"
                                                        style=" mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/phone.svg?v=2'); -webkit-mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/phone.svg?v=2');"
                                                        data-ie11-classes="" alt="fa fa-phone">&nbsp;</i><span
                                                        dir="ltr">{!! get_general_value('phone_number') !!}
                                                    </a>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="col-md-push-1 col-md-4 col-md-pull-1 col-sm-12 col-xs-12"><label
                                            class="contact-details-labels">العنوان</label><br>
                                        <ul class="list-unstyled contact-as-details-container">
                                            {!! get_general_value('address') !!}
                                        </ul> <br>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <form class="contactUsForm  preview-highlighter">
                                <div class="alert alert-danger print-error-msg" style="display:none;text-align:center">
                                    <ul></ul>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group"><input type="text" id="nameID" name="name"
                                                placeholder="الاسم" class="form-control" required
                                                data-msg-required="هذا الحقل مطلوب."></div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group"><input type="text" id="phoneID"  name="phone"
                                                placeholder="الهاتف" class="form-control"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group"><input type="text" id="emailID"  name="email"
                                                placeholder="البريد الإلكتروني"
                                                class="form-control s123-force-ltr" required
                                                data-msg-required="هذا الحقل مطلوب." data-rule-email="true"
                                                data-msg-email="يرجى إدخال بريد الكتروني صالح."></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group"><textarea id="messageID"  class="form-control"
                                                name="message" placeholder="الرسالة"
                                                style="min-height: 100px;"></textarea></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12"><button type="button"
                                            class="btn btn-primary btn-block btn-submit" aria-label="اتصل بنا">اتصل
                                            بنا</button></div>
                                </div>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection