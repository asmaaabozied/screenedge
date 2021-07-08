
@extends('layouts.dashboard.app')

@section('content')

    <div id="main">
        <div class="row">
            <div id="breadcrumbs-wrapper" data-image="{{asset('style/app-assets/images/gallery/breadcrumb-bg.jpg')}}"
                 class="breadcrumbs-bg-image"
                 style="background-image: url(&quot;../../../app-assets/images/gallery/breadcrumb-bg.jpg&quot;);">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0">
                                <span>@lang('site.edit')  @lang('site.settings')</span>
                            </h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a

                                        href="{{route('dashboard.welcome') }}">@lang('site.dashboard')</a>
                                </li>

                                <li class="breadcrumb-item"><a
                                        href="{{ route('dashboard.settings.index') }}"> @lang('site.settings') </a>
                                </li>
                                <li class="breadcrumb-item active"><a> @lang('site.edit') </a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">

                        <!--Badge-->
                        <div class="row">
                            <div class="col s12">
                                <div id="badges" class="card card-tabs">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">

                                                {{ BsForm::resource('settings')->post(route('dashboard.settings.updateAll')) }}

                                                <div class="colmd-12">

                                                    @include('partials._errors')

                                                    <div class="proSingPage col-lg-12 col-sm-12">
                                                        <div class="col-lg-12 col-sm-12">
                                                            @bsMultilangualFormTabs


                                                            {{ BsForm::text('address')
                                                                    ->value(Settings::locale($locale->code)->get('address'))->label(trans('site.address')) }}



                                                            @endBsMultilangualFormTabs
                                                        </div>



                                                    </div>

                                                    <div class="proSingPage col-lg-12 col-sm-12">

                                                        <div class="col-lg-6 col-sm-12">

                                                            {{ BsForm::text('email')->value(Settings::get('email'))->label(trans('site.email')) }}
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12">

                                                            {{ BsForm::text('phone')->value(Settings::get('phone'))->label(trans('site.phone')) }}
                                                        </div>
                                                    </div>

                                                    <div class="proSingPage col-lg-12 col-sm-12">

                                                        <div class="col-lg-6 col-sm-12">
                                                            {{ BsForm::text('instagram')->value(Settings::get('instagram'))->label(trans('site.instagram')) }}

                                                        </div>
                                                        <div class="col-lg-6 col-sm-12">
                                                            {{ BsForm::text('snapchat')->value(Settings::get('snapchat'))->label(trans('site.snapchat')) }}

                                                        </div>
                                                        <div class="col-lg-6 col-sm-12">
                                                            {{ BsForm::text('twitter')->value(Settings::get('twitter'))->label(trans('site.twitter')) }}
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12">
                                                            {{ BsForm::text('facebook')->value(Settings::get('facebook'))->label(trans('site.facebook')) }}
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-sm-12">
                                                        {{ BsForm::text('url')->value(Settings::get('url'))->label(trans('site.url')) }}

                                                    </div>
                                                    <div class="col-lg-6 col-sm-12">
                                                        <label for="">@lang('site.Default Language') </label>
                                                        <select name="locale" id="">
                                                            <option value="en">@lang('site.english')</option>
                                                            <option value="ar">@lang('site.arabic')</option>
                                                        </select>
                                                    </div>


                                                    <br>

                                                    <div class="col-lg-12 col-sm-12">


                                                        <br>
                                                        <div class="form-group">
                                                            {{ BsForm::submit()->label(trans('site.edit'))->danger() }}

                                                        </div>
                                                    </div>


                                                </div>


                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                {{ BsForm::close() }}
                </div>
            </div>
        </div>
    </div>


@endsection



