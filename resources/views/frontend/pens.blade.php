@extends('layouts.forntend')
@section('content')
<section id="section-5ce4bd11b63e1" class="s123-module s123-module-timeline bg-primary" data-module-id="5ce4bd11b63e1" data-module-type-num="41">
    <div class="container-fluid page_header_style noBackground">
        <div class="row">
            <div class="container moduleTitleContainer">
                <div class="row modulesTitle text-center">
                    <div class="col-xs-12">
                        <div class="page-header-wrap">
                            <h1 id="section-5ce4bd11b63e1-title" class="s123-page-header  ">القيم والمبادئ</h1>
                            <div class="three-angle-down"><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Categories area -->
        <div class="row" style="display:none;">
            <div class="s123-categories col-xs-12">
                <div class="m-r-s"></div>
                <ul class="items-categories-container">
                    <li data-categories-filter="gggiD8gggiA7gggiD9gggi84gggiD9gggi83gggiD9gggi84" class="active"><a href="#">الكل</a></li>
                </ul>
                <div class="m-r-s"></div>
            </div>
        </div>
        <!-- Items area -->
        <div class="row timeline-category" data-categories-filter="gggiD8gggiA7gggiD9gggi84gggiD9gggi83gggiD9gggi84" style="display: block;">
            <div class="cd-timeline cd-container">
                @foreach (App\Models\Principles::get() as $key=>$item)
                @if($key+1 % 2 == 0)
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img text-primary background-primary-color" style=";color:#ffffff;"><i class="svg-m s123-icon-converter " data-icon-name="clock-o" style="background-color:#ffffff; mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/clock-o.svg?v=2'); -webkit-mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/clock-o.svg?v=2');"
                            data-ie11-classes="" alt="site123-image-icon fa-clock-o">&nbsp;</i></div>
                    <div class="cd-timeline-content box-primary box-text-primary s123-box-border s123-box-padding preview-highlighter  border-left-before  " data-unique-id="{{ $key }}">
                        <h2>{{ $item->title }}</h2>
                        <p>{{ $item->body }}</p>
                </div>
                @else
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img text-primary background-primary-color bounce-in" style=";color:#ffffff;"><i class="svg-m s123-icon-converter " data-icon-name="clock-o" style="background-color:#ffffff; mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/clock-o.svg?v=2'); -webkit-mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/clock-o.svg?v=2');"
                            data-ie11-classes="" alt="site123-image-icon fa-clock-o">&nbsp;</i></div>
                    <div class="cd-timeline-content box-primary box-text-primary s123-box-border s123-box-padding preview-highlighter border-right-before " data-unique-id="5ce4bee6c43cd">
                        <h2>{{ $item->title }}</h2>
                        <p>{{ $item->body }}</p>
                    </div>
                </div>
                @endif
                @endforeach

               
            </div>
        </div>
    </div>
</section>
@endsection