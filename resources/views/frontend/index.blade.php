@extends('frontend.app')


@section('content')



    <section class="bigImg">
        <div id="carouselExampleControls" class="carousel slide pointer-event" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($sliders  as $key=>$slider)
                    <div class="carousel-item @if($loop->first) active @endif">
                        @foreach($slider->getMediaResource('images') as $sl)
                            <img src="{{ $sl['url'] }}" class="d-block w-100"  alt="{{ $slider['title'] }}"
                                 style="height: 554px;">
                        @endforeach

                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class="clearfix"></div>

    <section class="compSec">
        <div class="container">
            <h1 class="myTit">@lang('site.Our Companies')</h1>
            <div class="companies slick-initialized slick-slider">
                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button>
                <div class="slick-list draggable">
                    <div class="slick-track"
                         style="opacity: 1; width: 4218px; transform: translate3d(2664px, 0px, 0px); transition: transform 500ms ease 0s;">
                        @foreach($companies as $key=>$company)
                        <div class="compItm slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true"
                             tabindex="-1" style="width: 202px;">
                            @foreach($company->getMediaResource('avaters') as $sl)

                            <img src="{{ $sl['url'] }}" alt="{{ $sl['name'] }}" style="border-radius:50%">
                            @endforeach
                            <h6>{{$company->name}}</h6>
                        </div>
                        @endforeach

                    </div>
                </div>


                <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <section class="smlSec smlSec1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="myTit">{{$company->name ?? ''}} </h2>
                    <p class="grayP">
                        {{$company->description}}
                        <a href="" class="rMore">read more</a>
                    </p>
                </div>
                <div class="col-md-6">
                    @foreach($images as $sl)

                    <img src="{{ $sl['url'] }}" alt="{{ $sl['name'] }}">

                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <section class="whoSec">
        <h1 class="myTit">@lang('site.Who we are')</h1>
        <div class="container">
            <div class="row">
                @foreach($pages as $page)
                <div class="col-md-4">


                    @foreach($page->getMediaResource('avatars') as $sl)
                        <img src="{{ $sl['url'] }}"  alt="{{ $sl['name'] }}"  >
                    @endforeach

                    <div class="clearfix"></div>
                    <h6 class="whoTit">{{ app()->getLocale()=='ar'? $page->title_ar :$page->title_en }}</h6>
                    <p>
                        {{ app()->getLocale()=='ar'? $page->short_description_ar :$page->short_description_en }}
                    </p>
                </div>

                @endforeach

            </div>
        </div>
    </section>

    <div class="clearfix"></div>

    <section class="smlSec smlSec2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @foreach(\App\Models\Page::first()->getMediaResource('avatars') as $sl)
                        <img src="{{ $sl['url'] }}"  alt="{{ $sl['name'] }}"  >
                    @endforeach
                </div>
                <div class="col-md-6">
                    <h2 class="myTit">What we do</h2>
                    <p class="grayP">
                        {{ app()->getLocale()=='ar'? \App\Models\Page::first()->short_description_ar :\App\Models\Page::first()->short_description_en }}

                        <a href="" class="rMore">read more</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>




@endsection
