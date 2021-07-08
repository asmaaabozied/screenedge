@extends('frontend.app')


@section('content')


    <section class="compMainSec">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    @foreach($company->getMediaResource('avaters') as $sl)
                        <img src="{{ $sl['url'] }}" alt="{{ $sl['name'] }}"
                             class="img-circle">
                    @endforeach
                </div>
                <div class="col-md-8">
                    <h1>{{$company->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="smlSec abtSml">
        <div class="container">
            <div class="row">
                <div class="col-md-6 servImg slick-initialized slick-slider">
                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous
                    </button>
                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 3780px; transform: translate3d(-2160px, 0px, 0px); transition: transform 500ms ease 0s;">
                            @foreach($sliders as $slider)
                                @foreach($slider->getMediaResource('images') as $sl)

                                    <img src="{{ $sl['url'] }}" alt="{{ $sl['name'] }}" class="slick-slide slick-cloned img-circle"
                                         data-slick-index="-1" id=""
                                         aria-hidden="true" tabindex="-1" style="width: 540px;">
                                @endforeach
                            @endforeach

                            {{--                            <img src="img/serv1.png" alt="" class="slick-slide slick-current slick-active"--}}
                            {{--                        data-slick-index="0" aria-hidden="false"  tabindex="-1"style="width: 540px;">--}}
                            {{--                            <img src="img/serv2.png" alt="" class="slick-slide" data-slick-index="1" aria-hidden="true"--}}
                            {{--                                tabindex="-1" style="width: 540px;">--}}
                            {{--                            <img src="img/serv1.png" alt="" class="slick-slide" data-slick-index="2" aria-hidden="true"--}}
                            {{--                                                                         tabindex="0" style="width: 540px;">--}}
                            {{--                            <img src="img/serv1.png" alt="" class="slick-slide slick-cloned" data-slick-index="3" id=""--}}
                            {{--                                aria-hidden="true" tabindex="-1" style="width: 540px;">--}}
                            {{--                            <img src="img/serv2.png" alt=""--}}
                            {{--                                                                                            class="slick-slide slick-cloned"--}}
                            {{--                                                                                            data-slick-index="4" id=""--}}
                            {{--                                                                                            aria-hidden="true"--}}
                            {{--                                                                                            tabindex="-1"--}}
                            {{--                                                                                            style="width: 540px;">--}}
                            {{--                            <img--}}
                            {{--                                src="img/serv1.png" alt="" class="slick-slide slick-cloned" data-slick-index="5" id=""--}}
                            {{--                                aria-hidden="true" tabindex="-1" style="width: 540px;">--}}

                        </div>
                    </div>


                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                </div>


                <div class="col-md-6 servImg slick-initialized slick-slider">
                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous
                    </button>
                    <div class="slick-list draggable">
                        <div class="slick-track"
                             style="opacity: 1; width: 3780px; transform: translate3d(-1620px, 0px, 0px);">
                            @foreach($sliders as $slider)
                                @foreach($slider->getMediaResource('images') as $sl)
                                    <img
                                        src="{{ $sl['url'] }}" alt="{{ $sl['name'] }}" class="slick-slide slick-cloned"
                                        data-slick-index="-1" id=""
                                        aria-hidden="true" tabindex="-1" style="width: 540px;">
                                @endforeach
                            @endforeach

                        </div>
                    </div>


                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="abtSec">
        <h1 class="myTit">About </h1>
        <div class="col-md-12 abtBgClr">
            <p class="abt">
                It is a long established fact that a reader will bes by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum as is that it has a more-or-less sa
                distribution as opposed to using 'Content here, content her making it look like readable
                English. It is a long that a reader will be distracted by the readable more-or-less normal
                distribution as opposed to using 'Content here, content her making it look like readable
                English. It is a long that a reader will be distracted by the readable
                <br>
                It is a long established fact that a reader will bes by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum as is that it has a more-or-less sa
                distribution as opposed to using 'Content here, content her making it look like readable
                English. It is a long that a reader will be distracted by the readable more-or-less normal
                distribution as opposed to using 'Content here, content her making it look like readable
                English. It is a long that a reader will be distracted by the readable
            </p>
        </div>
    </section>
    <div class="clearfix"></div>
<br>
    <section class="abtSec">
        <div class="col-md-12 abtBgClr">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/serv2.png" alt="">
                    </div>
                    <div class="col-md-6 servBg">
                        <div class="servCont">
                            <h2 class="myTit">More Detail</h2>
                            <p class="">It is a long established fact that a reader will
                                bes by the readable content of a page whenei
                                looking at its layout. The point of using Loe
                                em Ipsum as is that it has a more-or-less sae
                            </p>
                            <a href="" class="rMore">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <br>
    <div class="clearfix"></div>
    <section class="abtSec">
        <div class="col-md-12 abtBgClr">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 servBg">
                        <div class="servCont">
                            <h2 class="myTit">More Detail</h2>
                            <p class="">It is a long established fact that a reader will
                                bes by the readable content of a page whenei
                                looking at its layout. The point of using Loe
                                em Ipsum as is that it has a more-or-less sae
                            </p>
                            <a href="" class="rMore">read more</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="img/serv1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <br>

    <br>






@endsection
