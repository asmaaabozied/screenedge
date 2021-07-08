{{--@extends('layouts.dashboard.app')--}}
{{--@section('styles')--}}


{{--    --}}{{--    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">--}}
{{--    <!-- Latest compiled and minified CSS -->--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"--}}
{{--          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

{{--    <!-- Optional theme -->--}}
{{--    --}}{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">--}}


{{--@endsection--}}
{{--@section('content')--}}

{{--    <div id="main">--}}
{{--        <div class="row">--}}
{{--            <div id="breadcrumbs-wrapper" data-image="{{asset('style/app-assets/images/gallery/breadcrumb-bg.jpg')}}"--}}
{{--                 class="breadcrumbs-bg-image"--}}
{{--                 style="background-image: url(&quot;../../../app-assets/images/gallery/breadcrumb-bg.jpg&quot;);">--}}
{{--                <!-- Search for small screen-->--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col s12 m6 l6">--}}
{{--                            <h5 class="breadcrumbs-title mt-0 mb-0">--}}
{{--                                <span>@lang('site.add')  @lang('site.sliders')</span>--}}
{{--                            </h5>--}}
{{--                        </div>--}}
{{--                        <div class="col s12 m6 l6 right-align-md">--}}
{{--                            <ol class="breadcrumbs mb-0">--}}
{{--                                <li class="breadcrumb-item"><a--}}

{{--                                        href="{{route('dashboard.welcome') }}">@lang('site.dashboard')</a>--}}
{{--                                </li>--}}

{{--                                <li class="breadcrumb-item"><a--}}
{{--                                        href="{{ route('dashboard.sliders.index') }}"> @lang('site.sliders') </a>--}}
{{--                                </li>--}}

{{--                                <li class="breadcrumb-item active"><a> @lang('site.add') </a>--}}
{{--                                </li>--}}

{{--                            </ol>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col s12">--}}
{{--                <div class="container">--}}
{{--                    <div class="section">--}}

{{--                        <!--Badge-->--}}
{{--                        <div class="row">--}}
{{--                            <div class="col s12">--}}
{{--                                <div id="badges" class="card card-tabs">--}}
{{--                                    <div class="card-content">--}}
{{--                                        <div class="card-title">--}}
{{--                                            <div class="row">--}}

{{--                                                <div class="colmd-12">--}}


{{--                                                    {{ BsForm::resource('sliders')->post(route('dashboard.sliders.store')) }}--}}

{{--                                                    @include('partials._errors')--}}

{{--                                                    <div class="row">--}}
{{--                                                        @bsMultilangualFormTabs--}}
{{--                                                        <div class="col-lg-12 col-sm-12">--}}


{{--                                                            {{ BsForm::text('title')--}}
{{--                                                                   ->label(trans('site.title')) }}--}}


{{--                                                        </div>--}}


{{--                                                        <div class="col-lg-12 col-sm-12">--}}
{{--                                                            {{ BsForm::textarea('description')->attribute('class', 'form-control textarea')->label(trans('site.title'))->name('description') }}--}}

{{--                                                        </div>--}}
{{--                                                        @endBsMultilangualFormTabs--}}


{{--                                                    </div>--}}


{{--                                                    --}}{{--                                                        <div class="row">--}}


{{--                                                    --}}{{--                                                            <div class="col-md-6">--}}
{{--                                                    --}}{{--                                                                <label>@lang('site.image')</label>--}}
{{--                                                    --}}{{--                                                                <input type="file" name="image" class="form-control"--}}
{{--                                                    --}}{{--                                                                       value="{{ old('image') }}">--}}
{{--                                                    --}}{{--                                                            </div>--}}

{{--                                                    --}}{{--                                                        </div>--}}
{{--                                                    --}}{{--                                                        <br>--}}


{{--                                                    <div class="form-group">--}}
{{--                                                        <button type="button" class="btn btn-warning mr-1"--}}
{{--                                                                onclick="history.back();">--}}
{{--                                                            <i class="fa fa-backward"></i> @lang('site.back')--}}
{{--                                                        </button>--}}
{{--                                                        <div class="form-group">--}}
{{--                                                            {{ BsForm::submit()->label(trans('site.add')) }}--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}


{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                    </div>--}}


{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    {{ BsForm::close() }}--}}

{{--@endsection--}}

{{--@section('scripts')--}}

{{--    <script>--}}
{{--        CKEDITOR.replace('summary-ckeditor');--}}
{{--    </script>--}}

{{--    <script>--}}
{{--        CKEDITOR.replace('summary-ckeditor1');--}}
{{--    </script>--}}
{{--@endsection--}}
{{--@section('scripts')--}}
{{--    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>--}}
{{--    <!-- Latest compiled and minified JavaScript -->--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"--}}
{{--            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"--}}
{{--            crossorigin="anonymous"></script>--}}


{{--@endsection--}}


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
                                <span>@lang('site.add')  @lang('site.sliders')</span>
                            </h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a

                                        href="{{route('dashboard.welcome') }}">@lang('site.dashboard')</a>
                                </li>

                                <li class="breadcrumb-item"><a
                                        href="{{ route('dashboard.sliders.index') }}"> @lang('site.sliders') </a>
                                </li>
                                <li class="breadcrumb-item active"><a> @lang('site.add') </a>
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

                                                {{ BsForm::resource('sliders')->post(route('dashboard.sliders.store')) }}
                                                <div class="colmd-12">

                                                    @include('partials._errors')

                                                    <div class="proSingPage col-lg-12 col-sm-12">

                                                        @bsMultilangualFormTabs
                                                        <div class="col-lg-12 col-sm-12">

                                                            {{ BsForm::text('title')
                                                                    ->label(trans('site.title1')) }}
                                                        </div>

                                                        <div class="col-lg-12 col-sm-12">
                                                            {{ BsForm::textarea('description')->attribute('class', 'form-control textarea')->label(trans('site.description'))->name('description') }}

                                                        </div>

                                                        @endBsMultilangualFormTabs


                                                    </div>


                                                    <div class="col-lg-12 col-sm-12">


                                                        <div id="app">
                                                            {{ BsForm::image('avater')->collection('images')->label(trans('site.image'))}}

                                                        </div>

                                                    </div>


                                                    <br>

                                                    <div class="col-lg-12 col-sm-12">


                                                        <br>
                                                        <div class="form-group">
{{--                                                            <button type="button" class="btn btn-warning mr-1"--}}
{{--                                                                    onclick="history.back();">--}}
{{--                                                                <i class="fa fa-backward"></i> @lang('site.back')--}}
{{--                                                            </button>--}}
                                                            <br>
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
@section('scripts')
    <script>

        CKEDITOR.replace('description:en');
        CKEDITOR.replace('description:ar');


    </script>



@endsection
