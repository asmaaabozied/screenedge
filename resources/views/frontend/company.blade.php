@extends('frontend.app')


@section('content')


    <section class="compMainSec">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    @foreach($company->getMediaResource('avaters') as $sl)
                        <img src="{{ $sl['url'] }}"  alt="{{ $sl['name'] }}"
                         class="img-circle"  >
                    @endforeach
                </div>
                <div class="col-md-8">
                    <h1>{{$company->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section>
        <div class="container">
            <h1 class="myTit">About </h1>
            <p class="abt">
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
    <section class="smlSec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 servBg">
                    <div class="servCont">
                        <h2 class="myTit">Service Name</h2>
                        <p class="">It is a long established fact that a reader will
                            bes by the readable The point of using Loe
                            em Ipsum as is that it has a more-or-less sae
                        </p>
                        <div class="clearfix"></div>
                        <a href="" class="rMore">read more</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 servImg">
                    <img src="img/serv1.png" alt="">
                </div>
                <div class="col-md-6 servImg">
                    <img src="img/serv2.png" alt="">
                </div>
                <div class="col-md-6 servBg">
                    <div class="servCont">
                        <h2 class="myTit">Service Name</h2>
                        <ul>
                            <li>Point Name</li>
                            <li>Point Name</li>
                            <li>Point Name</li>
                            <li>Point Name</li>
                            <li>Point Name</li>
                            <li>Point Name</li>
                        </ul>
                        <div class="clearfix"></div>
                        <a href="" class="rMore">read more</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 servBg">
                    <div class="servCont">
                        <h2 class="myTit">Service Name</h2>
                        <p class="">It is a long established fact that a reader will
                            bes by the readable content nt of using Loe
                            em Ipsum as is that it has a more-or-less sae
                        </p>
                        <div class="clearfix"></div>
                        <a href="" class="rMore">read more</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 servImg">
                    <img src="img/serv1.png" alt="">
                </div>
                <div class="col-md-6 servImg">
                    <img src="img/serv2.png" alt="">
                </div>
                <div class="col-md-6 servBg">
                    <div class="servCont">
                        <h2 class="myTit">Service Name</h2>
                        <ul>
                            <li>Point Name</li>
                            <li>Point Name</li>
                            <li>Point Name</li>
                            <li>Point Name</li>
                            <li>Point Name</li>
                            <li>Point Name</li>
                        </ul>
                        <div class="clearfix"></div>
                        <a href="" class="rMore">read more</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix"></div>



@endsection
