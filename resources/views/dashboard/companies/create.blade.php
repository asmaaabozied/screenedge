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
                                <span>@lang('site.add')  @lang('site.companies')</span>
                            </h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a

                                        href="{{route('dashboard.welcome') }}">@lang('site.dashboard')</a>
                                </li>

                                <li class="breadcrumb-item"><a
                                        href="{{ route('dashboard.companies.index') }}"> @lang('site.companies') </a>
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

                                                {{ BsForm::resource('companies')->post(route('dashboard.companies.store')) }}
                                                <div class="colmd-12">

                                                    @include('partials._errors')

                                                    <div class="proSingPage col-lg-12 col-sm-12">

                                                        @bsMultilangualFormTabs
                                                        <div class="col-lg-12 col-sm-12">

                                                            {{ BsForm::text('name')
                                                                    ->label(trans('site.name')) }}
                                                        </div>

                                                        <div class="col-lg-12 col-sm-12">
                                                            {{ BsForm::textarea('description')->attribute('class', 'form-control textarea')->label(trans('site.description'))->name('description') }}

                                                        </div>

                                                        @endBsMultilangualFormTabs


                                                    </div>


                                                    <div class="col-lg-12 col-sm-12">


                                                        <div id="app">
                                                            {{ BsForm::image('avater')->collection('images')->label(trans('site.image'))}}
                                                            {{ BsForm::image('image')->collection('avaters')->label(trans('site.log'))}}


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
                                                            {{ BsForm::submit()->label(trans('site.add'))->danger() }}

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
