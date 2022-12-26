@extends('layouts.forntend')
@section('content')
    <section id="section-5c55ed7f97c7b" class="s123-page-data s123-module s123-page-data-services bg-primary">
        <div class="breadcrumb-wrap noBackground">
            <ol class="breadcrumb container" style="visibility: hidden;">
                <li><a class="homepageMenu s123-fast-page-load" href="/"><span class="txt-container">الرئيسية</span></a>
                </li>
                <li><a data-module-id="5c55ed7f97c7b" href="{{ route('service.front') }}">خدماتنا</a></li>
                <li class="active">{{ $service->title }} </li>
            </ol>
        </div>
        <div class="noBackground">
            <div class="container-fluid page_header_style">
                <div class="container">
                    <div class="row modulesTitle text-center">
                        <div class="col-xs-12 page-header-wrap">
                            <h1 id="section-5c55ed7f97c7b-title" class="s123-page-header ">{{ $service->title }} </h1>
                            <div class="three-angle-down"><i class="fa fa-angle-down" aria-hidden="true"></i><i
                                    class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-down"
                                    aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2"><img
                        src="{{ asset('uploads/'.$service->image) }}"
                        class="img-responsive" alt="تأسيس الشركات"></div>
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <div class="responsive-handler fr-view breakable">
                      <div>
                        {!! $service->body !!}
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
