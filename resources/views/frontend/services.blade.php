@extends('layouts.forntend')
@section('content')
    <div id="s123PjaxMainContainer">
        <div id="s123ModulesContainer" class="s123-content-area s123-modules-container">
            <section id="section-5c55ed7f97c7b" class="s123-module s123-module-services layout-4 bg-primary"
                data-module-id="5c55ed7f97c7b" data-module-type-num="3">
                <div class="container-fluid page_header_style noBackground">
                    <div class="row">
                        <div class="container moduleTitleContainer">
                            <div class="row modulesTitle text-center">
                                <div class="col-xs-12">
                                    <div class="page-header-wrap">
                                        <h1 id="section-5c55ed7f97c7b-title" class="s123-page-header  ">خدماتنا</h1>
                                        <div class="three-angle-down"><i class="fa fa-angle-down" aria-hidden="true"></i><i
                                                class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-down"
                                                aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <!-- Adds top --->
                    <!-- Container --->
                    <div class="text-center features-container">
                        <!-- Categories area -->
                        <div class="row" style="display:none;">
                            <div class="s123-categories col-xs-12">
                                <div class="m-r-s"></div>
                                <ul class="items-categories-container">
                                    <li data-categories-filter="gggiD8gggiA7gggiD9gggi84gggiD9gggi83gggiD9gggi84"
                                        class="active"><a href="#">الكل</a></li>
                                </ul>
                                <div class="m-r-s"></div>
                            </div>
                        </div><!-- Items area -->
                        <div class="row text-center services-category"
                            data-categories-filter="gggiD8gggiA7gggiD9gggi84gggiD9gggi83gggiD9gggi84"
                            style="display: block;">
                            
                            @foreach ($services_section as $item)
                            
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
                        {{ $services_section->links('pagination::bootstrap-4')}}

                    </div><!-- Adds bottom --->
                </div>
            </section>
        </div>
   
    </div>
@endsection
