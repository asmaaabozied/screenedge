<!DOCTYPE html>
<html dir="{{ Locales::getDir() }}" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScreenEdge</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>


    @if(Locales::getDir() == 'rtl')
        <link rel="stylesheet" href="{{asset('frontend/css/style_ar.css')}}">

    @endif
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="col-lg-5 col-md-12">
                <a class="navbar-brand" href="#">@lang('site.logo')</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse col-lg-7 col-md-12" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item menuLi active">
                        <a class="nav-link" href="{{route('website')}}">@lang('site.Home') <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown" onclick="window.location='{{ route('companies') }}';">
                        <button class="nav-link myDrbDwn">
                            @lang('site.companies')
                        </button>
                        <div class="showenDrb">
                            <div class="row">
                                <div class="col-lg-3 col-md-12 padf1">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home">
                                                <img src="{{asset('frontend/img/Ellipse.png')}}" alt=""> <h6>company
                                                    name</h6>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu1">
                                                <img src="{{asset('frontend/img/Ellipse.png')}}" alt=""> <h6>company
                                                    name</h6></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#menu2">
                                                <img src="{{asset('frontend/img/Ellipse.png')}}" alt=""> <h6>company
                                                    name</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <div class="tab-content">
                                        <div class="tab-pane  active col-md-12" id="home">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-6 padf2">
                                                    <h2>about company</h2>
                                                    <p>t is a long established fact that a reader will bes
                                                        by the readable content of a page when looking
                                                        at its layout. The point of using Lorem Ipsum as
                                                        is that it has a more-or-less normal distribution
                                                        as opposed to using 'Content here, content her
                                                        making it look like readable English. It is a long
                                                        that a reader will be distracted by the readable</p>
                                                    <p>It is a long established fact that a reader will bes
                                                        by the readable content of a page when looking
                                                        at its layout. The point of using Lorem Ipsum as
                                                        is that it has a more-or-less normal distribution
                                                        as opposed to using 'Content here, content her
                                                        making it look like readable English. It is a long
                                                        that a reader will be distracted by the readable</p>
                                                </div>
                                                <div class="col-lg-5 col-md-6 col-sm-12 padf3">
                                                    <h2>services</h2>
                                                    <ul>
                                                        <li>services 1</li>
                                                        <li>services 2</li>
                                                        <li>services 3</li>
                                                        <li>services 4</li>
                                                        <li>services 5</li>
                                                        <li>services 6</li>
                                                        <li>services 7</li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane col-md-12 fade" id="menu1">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-6 col-sm-12 padf2">
                                                    <h2>about company</h2>
                                                    <p>t is ill be distracted by the readable</p>
                                                    <p>It is a long established fact that a reader will bes
                                                        by the readable content of a page when looking
                                                        at its layout. The point of using Lorem Ipsum as
                                                        is that it has a more-or-less normal distribution
                                                        as opposed to using 'Content here, content her
                                                        making it look like readable English. It is a long
                                                        that a reader will be distracted by the readable</p>
                                                </div>
                                                <div class="col-lg-5 col-md-6 col-sm-12 padf3">
                                                    <h2>services</h2>
                                                    <ul>
                                                        <li>services 1</li>
                                                        <li>services 2</li>
                                                        <li>services 3</li>
                                                        <li>services 4</li>
                                                        <li>services 5</li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane col-md-12 fade" id="menu2">
                                            <div class="row">
                                                <div class="col-lg-5 col-md-6 col-sm-12 padf2">
                                                    <h2>about company</h2>
                                                    <p>t is a long established fact that a reader will bes
                                                        by the readable content of a page when looking
                                                        at its layout. The point of using Lorem Ipsum as
                                                        is that it has a more-or-less normal distribution
                                                        as opposed to using 'Content here, content her
                                                        making it look like readable English. It is a long
                                                        that a reader will be distracted by the readable</p>
                                                    <p>It is a long established fact that a reader will bes
                                                        by the readable tent here, content her
                                                        making it look like readable English. It is a long
                                                        that a reader will be distracted by the readable</p>
                                                </div>
                                                <div class="col-lg-5 col-md-6 col-sm-12 padf3">
                                                    <h2>services</h2>
                                                    <ul>
                                                        <li>services 1</li>
                                                        <li>services 2</li>
                                                        <li> 3</li>
                                                        <li>services 5</li>
                                                        <li>services 6</li>
                                                        <li>services 7</li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item menuLi">
                        <a class="nav-link" href="{{ route('abouts') }}"> @lang('site.abouts')</a>
                    </li>
                    <li class="nav-item menuLi">
                        <a class="nav-link" href="{{route('contacts')}}"> @lang('site.contact_us')</a>
                    </li>
                    <li class="nav-item menuLi ar">
                        @if(Locales::getCode()=="ar")

                            <a class="nav-link"
                               href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"> {{ 'English' }}</a>

                        @else
                            <a class="nav-link"
                               href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">  {{ 'Arabic' }}</a>


                        @endif

                    </li>


                </ul>
            </div>
        </nav>
    </div>
</header>


@yield('content')
@include('partials._session')


<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-4 ">
                <div class="adItm">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>{{Settings::locale(app()->getLocale())->get('address')}}</span>
                </div>
                <div class="adItm">
                    <i class="fa fa-phone-alt"></i>
                    <span>{{Settings::get('phone')}}
</span>
                </div>
                <div class="adItm">
                    <i class="fa fa-envelope"></i>
                    <span>{{Settings::get('email')}}</span>
                </div>
            </div>
            <div class="col-lg-8 col-4">
                <h6>@lang('site.Quick Links')</h6>
                <ul>
                    <li><a href="{{route('website')}}">@lang('site.Home')</a></li>

                    <li>
                        <a href="{{route('contacts')}}"> @lang('site.contact_us')</a>
                    </li>
                    <li><a href="{{ route('companies') }}">@lang('site.companies')</a></li>
                    <li><a href="{{ route('abouts') }}">@lang('site.abouts')</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-4">
                <div class="socialIcon">
                    <span>@lang('site.Social Media')</span>
                    <div class="clearfix"></div>
                    <a href="{{Settings::get('facebook')}}"><i class="fab fa-facebook"></i></a>
                    <a href="{{Settings::get('instagram')}}"><i class="fab fa-instagram"></i></a>
                    <div class="clearfix"></div>
                    <a href="{{Settings::get('snapchat')}}"><i class="fab fa-snapchat-ghost"></i></a>
                    <a href="{{Settings::get('twitter')}}"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="clearfix"></div>
<div class="lastDiv">
    <h6>&copy;جميع الحقوق محفوظة لشركة (اسم الشركة) بدعم من
        <a href="">ويب اند ابز <img src="{{asset('frontend/img/qw.png')}}" alt=""></a>
    </h6>
</div>
<script src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
{{--<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>--}}
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
{{--<script type="text/javascript" src="{{asset('frontend/slick/slick/slick.min.js')}}"></script>--}}
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
