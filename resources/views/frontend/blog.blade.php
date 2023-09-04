@extends('layouts.forntend')
@section('content')
    <div id="s123PjaxMainContainer">
        <div class="s123-content-area s123-page-container">
            <section id="section-5cc992d272b87"
                class="s123-page-data s123-module s123-page-data-articles s123-page-data-articles-1a bg-primary dataPageBreadcrumbs">
                <div class="breadcrumb-wrap noBackground">
                    <ol class="breadcrumb container">
                        <li><a class="homepageMenu s123-fast-page-load" href="/"><span
                                    class="txt-container">{{trans__('الرئيسية', app()->getLocale())}}</span></a></li>
                        <li><a data-module-id="5cc992d272b87" href="{{ route('blogs.front') }}">{{trans__('المدونة', app()->getLocale())}}</a>
                        </li>
                        <li class="active">{{trans__($blog->title, app()->getLocale())}}  </li>
                    </ol>
                <
                <div class="noBackground">
                    <div class="container-fluid page_header_style">
                        <div class="container">
                            <div class="row modulesTitle text-center">
                                <div class="col-xs-12 page-header-wrap">
                                    <h1 id="section-5cc992d272b87-title" class="s123-page-header "> {{trans__($blog->title, app()->getLocale())}} </h1>
                                    <div class="three-angle-down"><i class="fa fa-angle-down" aria-hidden="true"></i><i
                                            class="fa fa-angle-down" aria-hidden="true"></i><i class="fa fa-angle-down"
                                            aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="meta">
                    <div class="reading-time">
                        <center>{{ $blog->vistor }} {{trans__('قراءة دقيقة', app()->getLocale())}}  </center>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="leadImage text-center"> <img
                                    src="{{ asset('uploads/'.$blog->image) }}"
                                    alt="{{ $blog->title }}  "> </div>
                            <div class="responsive-handler fr-view breakable">
                                {{-- {{ dd($blog->body) }} --}}
                                @php
                                    $chunkSize = 1000;
                                    $textChunks = str_split($blog->body, $chunkSize);

                                    // Initialize an array to hold the translated chunks
                                    $translatedChunks = [];

                                    // Translate each chunk and store the translations
                                    foreach ($textChunks as $chunk) {
                                        $translatedChunk = trans__($chunk, app()->getLocale());
                                        $translatedChunks[] = $translatedChunk;
                                    }

                                    // Combine the translated chunks into a single translated text
                                    $translatedText = implode('', $translatedChunks);

                                    // Output the translated text
                                    // echo $translatedText;
                                @endphp
                                <div>
                                    {!! $translatedText!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="clearfix" style="margin-top:32px;"></div>
                   <h2>{{trans__('مقالات ذات صلة', app()->getLocale())}}   :  </h2> 
                    <br>
                    <div class="row related-article-container">
                        @foreach (App\Models\Blog::where('id','!=',$blog->id)->take(3)->orderby('id','desc')->get() as $item)
                            
                        <div class="col-xs-12 col-sm-4">
                            <div class="s123-card box-primary">
                                <div class="image-container"> <a class="main-image s123-fast-page-load"
                                        href="{{ route('single_blog', $item->slug ) }}"
                                        style="background-image:url({{ asset('uploads/'.$item->image) }}); background-position:50.73% 97.84%;"></a>
                                </div>
                                <div class="details">
                                    <div class="title"> <a class="s123-fast-page-load"
                                            href="{{ route('single_blog', $item->slug ) }}">{{trans__($item->title, app()->getLocale())}}</a> </div>
                                </div>
                            </div>
                        </div>
                      
                        @endforeach

                    </div>
                    <div class="clearfix" style="margin-top:32px;"></div>
              
                </div>
            </section>
        </div>
     
    </div>
@endsection
