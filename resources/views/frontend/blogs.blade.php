@extends('layouts.forntend')
@section('content')
    <div id="s123PjaxMainContainer">
        <div id="s123ModulesContainer" class="s123-content-area s123-modules-container">
            <section id="section-5cc992d272b87" class="s123-module s123-module-articles layout-3 bg-primary"
                data-module-id="5cc992d272b87" data-module-type-num="17">
                <div class="container-fluid page_header_style noBackground">
                    <div class="row">
                        <div class="container moduleTitleContainer">
                            <div class="row modulesTitle text-center">
                                <div class="col-xs-12">
                                    <div class="page-header-wrap">
                                        <h1 id="section-5cc992d272b87-title" class="s123-page-header  ">المدونة</h1>
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div>
                                <div class="events">
                                    @foreach ($blogs as $key=> $item)
                                        <div class="event clearfix box-primary preview-highlighter" data-unique-id="{{$key}}">
                                            <div class="event-image"><a
                                                    href="{{ route('single_blog',$item->slug) }}"
                                                    class="s123-fast-page-load"><img class="lazyload entered loaded"
                                                        data-src="{{ asset('uploads/' . $item->image) }}"
                                                        style="max-width: 100%;max-height: 250px" alt="{{ $item->title }}"
                                                        data-ll-status="loaded" src="{{ asset('uploads/' . $item->image) }}"></a>
                                            </div>
                                            <div class="event-details">
                                                <div class="event-title">
                                                    <h2><a href="{{ route('single_blog',$item->slug) }}"
                                                            class="s123-fast-page-load"
                                                            aria-label="{{ $item->title }}">{{ $item->title }}
                                                        </a></h2>
                                                </div>
                                                <div class="event-content box-text-primary">
                                                    <p>{!! \Illuminate\Support\Str::limit($item->body, $limit = 180, $end = '...') !!}</p><a
                                                        href="{{ route('single_blog',$item->slug) }}"
                                                        class="btn btn-primary s123-fast-page-load" aria-label="اقرأ المزيد">اقرأ
                                                        المزيد</a>
                                                    <div class="reading-time">{{ $item->vistor }} : قراءة دقيقة</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                           {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
    </div>
@endsection
