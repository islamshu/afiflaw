<!DOCTYPE html>
<html dir="rtl" lang="ar" class=" home_page home_page_design s_layout21   ">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <link rel="preload" href="images/2000_62f131f972aca.png" as="image">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/400_crop_5fc6aaf2cfc86_5fc6aa860d1f9.png" type="image/x-icon">
    <link rel="icon" href="images/400_crop_5fc6aaf2cfc86_5fc6aa860d1f9.png" type="image/x-icon">
    <link rel="manifest"
        href="https://cdn-cms-s.f-static.net/versions/2/css/manifest.json?w=&orderScreen=&websiteID=1858895&onlyContent=&tranW=&v=css_r165_37652721&wd=www.afiflaw.com">
    <!-- Status Bar -->
    <meta name="apple-mobile-web-app-status-bar-style" content="default"><!-- 152px icon -->
    <link rel="apple-touch-icon" sizes="152x152"
        href="https://cdn-cms-s.f-static.net/ready_uploads/pwaScreenLogo/pwaImage.png?width=152&height=152&resizeType=pwaIcon&w=&orderScreen=&websiteID=1858895&tranW=&v=css_r165_37652721">
    <!-- 180px icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180"
        href="https://cdn-cms-s.f-static.net/ready_uploads/pwaScreenLogo/pwaImage.png?width=180&height=180&resizeType=pwaIcon&w=&orderScreen=&websiteID=1858895&tranW=&v=css_r165_37652721">
    <!-- 167px icon -->
    <link rel="apple-touch-icon" sizes="167x167"
        href="https://cdn-cms-s.f-static.net/ready_uploads/pwaScreenLogo/pwaImage.png?width=167&height=167&resizeType=pwaIcon&w=&orderScreen=&websiteID=1858895&tranW=&v=css_r165_37652721">
    <!-- Mobile Browser Address Bar Color -->
    <meta name="theme-color" content="#e1a123"> <!-- Regular Meta Info -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title class="s123-js-pjax">{{ get_general_value('title') }}</title>
    <meta name="description" content="{!! get_general_value('description') !!}" class="s123-js-pjax">
    <meta name="keywords" content="{!! get_general_value('description') !!}" class="s123-js-pjax">
    <style>
        /* arabic */
        @font-face {
            font-family: 'Almarai';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/almarai/v12/tsstApxBaigK_hnnQ1iFo1K0rqY.woff2) format('woff2');
            unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC, U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }

        /* arabic */
        @font-face {
            font-family: 'Almarai';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/almarai/v12/tssoApxBaigK_hnnS-agtnqWo4z1oXk.woff2) format('woff2');
            unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC, U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
    </style> <!-- Facebook Meta Info -->
    <meta property="og:url" content="{{ URL::to('/') }}" class="s123-js-pjax">
    <meta property="og:image" content="images/800_crop_5d040754a1cb4_5ca0f4bfd6c92.jpg" class="s123-js-pjax">
    <meta property="og:description" content="{!! get_general_value('description') !!}" class="s123-js-pjax">
    <meta property="og:title" content="{!! get_general_value('title') !!}" class="s123-js-pjax">
    <meta property="og:site_name" {!! get_general_value('title') !!} class="s123-js-pjax">
    <meta property="og:see_also" content="{{ URL::to('/') }}" class="s123-js-pjax"> <!-- Google+ Meta Info -->
    <meta itemprop="name" content="{!! get_general_value('title') !!}" class="s123-js-pjax">
    <meta itemprop="description" content="{!! get_general_value('title') !!}" class="s123-js-pjax">
    <meta itemprop="image" content="images/800_crop_5d040754a1cb4_5ca0f4bfd6c92.jpg" class="s123-js-pjax">
    <!-- Twitter Meta Info -->
    <meta name="twitter:card" content="summary" class="s123-js-pjax">
    <meta name="twitter:url" content="{!! get_general_value('title') !!}" class="s123-js-pjax">
    <meta name="twitter:title" content="{!! get_general_value('title') !!}" class="s123-js-pjax">
    <meta name="twitter:description" content="{!! get_general_value('description') !!}" class="s123-js-pjax">
    <meta name="twitter:image" content="{{ asset('uploads/' . $first->image) }}" class="s123-js-pjax">
    <meta name="robots" content="all" class="s123-js-pjax">
    <link rel="stylesheet" href="{{ asset('front/css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/site1.css') }}">
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>


    <!-- Website CSS variables -->
    <!-- Custom CSS -->
    <!-- Minimize CSS files -->
    <link rel="stylesheet" href="https://cdn-cms-s.f-static.net/versions/2/css/minimize_main_rtl.css?v=n82481"
        type="text/css" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('front/css/websiteCSS.css') }}" class="reloadable-css" type="text/css">

</head>

<body id="page-top">
    <div class="body">
        <a href="https://wa.me/{!! get_general_value('whatsapp') !!}" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
        <div id="websiteHeader">
            <nav id="mainNav"
                class="hidden-xs navbar-default navbar-fixed-top {{ request()->is('/') ? '' : 'opacity-full affix' }}   ">
                <div class="site_container">
                    <div class="navbar-header"> <a href="/"
                            class="s123-site-logo navbar-brand s123-w-l-s page-unique s123-fast-page-load"><img
                                alt="{!! get_general_value('title') !!}" class="img-responsive"
                                src="{{ asset('uploads/' . get_general_value('image')) }}"><span
                                class="website-name website-name-preview-helper ">{!! get_general_value('title') !!}</span></a>
                    </div>
                    <div id="top-menu">
                        <ul class="navPages nav navbar-nav" style="opacity: 1;">
                            <li class="moduleMenu {{ request()->is('/') ? 'active' : '' }} ">
                                <a class="page-unique homepageMenu s123-fast-page-load"href="/">
                                    <span class="txt-container">الرئيسية</span>
                                </a>
                            </li>
                            <li class="moduleMenu {{ request()->is('القيم-المباديء') ? 'active' : '' }} ">
                                <a
                                    class="page-unique homepageMenu s123-fast-page-load"href="{{ route('pren.front') }}">
                                    <span class="txt-container">القيم والمباديء </span>
                                </a>
                            </li>
                            <li
                                class="moduleMenu {{ request()->is('/#section-5c5604f252934-title') ? 'active' : '' }} ">
                                <a
                                    class="page-unique homepageMenu s123-fast-page-load"href="/#section-5c5604f252934-title">
                                    <span class="txt-container">من نحن</span>
                                </a>
                            </li>




                            <li id="centerLogo19"> <a href="/"
                                    class="s123-site-logo navbar-brand s123-w-l-s page-unique s123-fast-page-load">
                                    {{-- <img
                                        alt="{{ get_general_value('title') }} " class="img-responsive"
                                        src="{{ asset('uploads/' . get_general_value('image')) }}"> --}}
                                        <p style="text-align: center">مكتب سليمان المجيني <br>
                                            للمحاماة والاستشارات القانونية
                                        </p>
                                        <span
                                        class="website-name website-name-preview-helper ">
                                    </span></a>
                            </li>
                            <li
                                class="moduleMenu {{ request()->is('/#section-5c5604f252934-title') ? 'active' : '' }} ">
                                <a
                                    class="page-unique homepageMenu s123-fast-page-load"href="/#section-62f21b3139461-title">
                                    <span class="txt-container">لماذا نحن </span>
                                </a>
                            </li>
                            <li class="moduleMenu {{ request()->is('/فريقنا') ? 'active' : '' }} ">
                                <a
                                    class="page-unique homepageMenu s123-fast-page-load"href="{{ route('teams.front') }}">
                                    <span class="txt-container">فريق عملنا </span>
                                </a>
                            </li>
                            <li class="moduleMenu {{ request()->routeIs('service.front') ? 'active' : '' }} ">
                                <a class="page-unique homepageMenu s123-fast-page-load"
                                    href="{{ route('service.front') }}">
                                    <span class="txt-container">خدماتنا</span>
                                </a>
                            </li>
                            <li class="moduleMenu {{ request()->routeIs('blogs.front') ? 'active' : '' }} ">
                                <a class="page-unique homepageMenu s123-fast-page-load"
                                    href="{{ route('blogs.front') }}">
                                    <span class="txt-container">المدونة</span>
                                </a>
                            </li>

                            </li>
                        </ul>

                    </div>
                </div>
            </nav> <!-- Sticky Menu --> <input type="hidden" id="stickyMenu" name="stickyMenu" value="on">
        </div>
        <nav id="mainNavMobile" class="navbar-fixed-top">
            <div class="navPagesLeft">
                <div class="header-menu-wrapper"><a data-close-location="left" data-menu-color="m-w"
                        data-menu-type="0" data-menu-align="center" data-is-mobile="true"
                        class="mobile-menu-btn actionButton" role="button" data-container="body"
                        data-toggle="menuCallActionIcons"><i class="svg-m s123-icon-converter " data-icon-name="bars"
                            style=" mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/bars.svg?v=2'); -webkit-mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/bars.svg?v=2');"
                            data-ie11-classes="" alt="bars">&nbsp;</i></a></div>
            </div>
            <div class="navbar-header"> <a href="/"
                    class="s123-site-logo navbar-brand s123-w-l-s page-unique s123-fast-page-load">
                    {{-- <img
                        alt="{!! get_general_value('title') !!}" class="img-responsive"
                        src="{{ asset('uploads/' . get_general_value('image')) }}"> --}}
                        <p style="text-align: center">مكتب سليمان المجيني <br>
                            للمحاماة والاستشارات القانونية
                        </p>
                        <span
                        class="website-name website-name-preview-helper ">{!! get_general_value('title') !!}</span></a> </div>

        </nav>
        <div id="top-menu-mobile" style="display:none;">
            <ul>
                <!-- Website Menu Pages -->
                <li class="moduleMenu active"><a class="page-unique homepageMenu" href="/"><span
                            class="txt-container">الرئيسية</span></a></li>
                <li class="moduleMenu" data-menu-module-id="5ce4bd11b63e1"><a class="page-unique"
                        href="/القيم-المباديء"><span class="txt-container">الفيم والمباديء  </span></a></li>
                        <li class="moduleMenu" data-menu-module-id="5ce4bd11b63e1"><a class="page-unique"
                            href="/#section-5c5604f252934-title"><span class="txt-container">من نحن </span></a></li>
                <li class="moduleMenu" data-menu-module-id="5ce4bd11b63e1"><a class="page-unique"
                        href="/#section-62f21b3139461-title"><span class="txt-container">لماذا نحن </span></a></li>

                        
                        <li class="moduleMenu" data-menu-module-id="5ce4bd11b63e1"><a class="page-unique"
                            href="/فريقنا"><span class="txt-container">فريق عملنا  </span></a></li>
                <li class="moduleMenu" data-menu-module-id="5ce4bd11b63e1"><a class="page-unique"
                        href="/خدماتنا"><span class="txt-container">خدماتنا </span></a></li>
                <li class="moduleMenu" data-menu-module-id="5ce4bd11b63e1"><a class="page-unique"
                        href="المدونة"><span class="txt-container">المدونة </span></a></li>
            </ul>
        </div>

        @yield('content')
        <footer class="global_footer footer_2">
            <div class="part1">
                <div class="social-details-container social-icons" data-module-type-num="24">
                    <ul class="list-inline">
                        @if (get_general_value('instagram') != null)
                            <li><a href="{{ get_general_value('instagram') }}" target="_blank"><i
                                        class="svg-m s123-icon-converter  fa-1x" data-icon-name="instagram"
                                        style=" mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/instagram.svg?v=2'); -webkit-mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/instagram.svg?v=2');"
                                        data-ie11-classes=" fa-1x" alt="instagram system-svg-icons ">&nbsp;</i></a>
                            </li>
                        @endif
                        @if (get_general_value('facebook') != null)
                            <li>
                                <a href="{{ get_general_value('facebook') }}" target="_blank">
                                    <i class="svg-m s123-icon-converter  fa-1x" data-icon-name="facebook"
                                        style=" mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/facebook.svg?v=2'); -webkit-mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/facebook.svg?v=2');"
                                        data-ie11-classes=" fa-1x" alt="facebook system-svg-icons ">&nbsp;</i>
                                </a>
                            </li>
                        @endif
                        @if (get_general_value('whatsapp') != null)
                            <li>
                                <a href="{{ get_general_value('whatsapp') }}" target="_blank">
                                    <i class="svg-m s123-icon-converter  fa-1x" data-icon-name="whatsapp"
                                        style=" mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/whatsapp.svg?v=2'); -webkit-mask: url('https://static1.s123-cdn-static-a.com/ready_uploads/svg/whatsapp.svg?v=2');"
                                        data-ie11-classes=" fa-1x" alt="whatsapp system-svg-icons ">&nbsp;
                                    </i>
                                </a>
                            </li>
                        @endif


                    </ul>
                </div>



                <div class="clearfix upgrade-website-preview-helper"></div>
            </div>
    </div>
    </footer>
    </div>
    </div>
    <div> </div>
    <!-- JavaScript Translations Object -->
    <!-- JavaScript Translations Object -->
    <!-- CSS Minimize Bottom -->
    <link rel="stylesheet" class="defer-css" href="{{ asset('front/css/minimize-bottom.css') }}" type="text/css"
        crossorigin="anonymous">

    <script type="text/javascript" src="{{ asset('front/js/cookieconsent.min.js') }}"></script>
    <script src="{{ asset('front/js/minimize_p1.js') }}"></script>
    <script src="{{ asset('front/js/minimize_p2.js') }}"></script>
    <script src="{{ asset('front/js/minimize_p3.js') }}"></script>
    <script src="{{ asset('front/js/minimize_p4.js') }}"></script>
    <script src="{{ asset('front/js/js.js') }}"></script>
    <script src="{{ asset('front/js/minimize_scripts.js') }}"></script> <!-- Website Statistics -->
    <script src="{{ asset('front/js/generateStats-min.js') }}"></script> <!-- Add Global Google Analytics Code -->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".btn-submit").click(function(e) {

            e.preventDefault();

            var name = $("#nameID").val();
            var email = $("#emailID").val();
            var phone = $("#phoneID").val();
            var message = $("#messageID").val();

            $.ajax({
                type: 'POST',
                url: "{{ route('store_message') }}",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message
                },
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert(data.success);
                        $("#nameID").val('');
                        $("#emailID").val('');
                        $("#phoneID").val('');
                        $("#messageID").val('');
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });


        });

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
            });
        }
    </script>


</body>

</html>
