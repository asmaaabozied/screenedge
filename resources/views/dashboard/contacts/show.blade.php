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
                                <span>@lang('site.edit')  @lang('site.contact')</span>
                            </h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a

                                        href="{{route('dashboard.welcome') }}">@lang('site.dashboard')</a>
                                </li>

                                <li class="breadcrumb-item"><a
                                        href="{{ route('dashboard.contact_us.index') }}"> @lang('site.contact') </a>
                                </li>
                                <li class="breadcrumb-item"><a
                                    > @lang('site.edit') </a>
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

                                                <div class="colmd-12">

                                                    @include('partials._errors')


                                                    <div class="colmd-12">

                                                        @include('partials._errors')

                                                        <div class="proSingPage col-lg-12 col-sm-12">

                                                            <div class="col-lg-12 col-sm-12">
                                                                <label>@lang('site.name')</label>
                                                                <input value="{{$contact->name}}">
                                                            </div>

                                                            <div class="col-lg-12 col-sm-12">
                                                                <label>@lang('site.email')</label>
                                                                <input value="{{$contact->email}}">
                                                            </div>



                                                            <div class="col-lg-12 col-sm-12">
                                                                <label>@lang('site.phone')</label>
                                                                <input value="{{$contact->phone}}">
                                                            </div>

                                                            <div class="col-lg-12 col-sm-12">
                                                                <label>@lang('site.description')</label>

                                                                <textarea id="summary-ckeditor">{{$contact->message}}</textarea>
                                                            </div>


                                                        </div>


                                                        <br>

                                                        <div class="col-lg-12 col-sm-12">


                                                            <br>
                                                            <div class="form-group">
                                                                <button type="button" class="btn btn-warning mr-1"
                                                                        onclick="history.back();">
                                                                    <i class="fa fa-backward"></i> @lang('site.back')
                                                                </button>

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


                </div>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    <script src="{{ asset('public/dashboard_files/js/jquery.min.js') }}"></script>

    <script>
        CKEDITOR.replace('summary-ckeditor');
    </script>

    <script>
        CKEDITOR.replace('summary-ckeditor1');
    </script>
@endsection

