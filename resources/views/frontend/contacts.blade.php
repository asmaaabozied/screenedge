@extends('frontend.app')


@section('content')


    <section>
        <div class="container">
            <div class="contactDiv col-md-12">
                <h3>@lang('site.Have an Inquiry')?</h3>
                <form action="{{route('contacts.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="@lang('site.name')" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="@lang('site.email')" required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="phone" placeholder="@lang('site.phone')" required>
                        </div>
                        <div class="col-md-6">
                            <textarea rows="5" name="message" placeholder="@lang('site.Enter your Message')"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <button type="submit" class="btn sendBtn">@lang('site.Send Message')</button>
                </form>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="mapSec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="myTit">@lang('site.Head Office')</h3>
                    <div class="servBg">
                        <div class="servCont">
                            <div class="contactData">
                                <h6><i class="fas fa-map-marker-alt"></i>
                                    <span> {{$location->address}} </span>
                                </h6>
                                <h6><i class="fa fa-phone-alt"></i>
                                    <span><a href="tel:{{ $location->phone }}">{{ $location->phone }}</a></span>
                                </h6>
                                <h6><i class="fa fa-envelope"></i>

                                    <span>{{ $location->email }}</span>

                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="myTit">@lang('site.location')</h3>
                    <div class="servBg">
                        <div class="servCont">


                            <iframe
                                src="https://maps.google.com/maps?q={{ $location->lat }},{{ $location->lng }}&hl=es;z=18&amp;output=embed"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
