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
                                <span>@lang('site.edit')  @lang('site.services')</span>
                            </h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a

                                        href="{{route('dashboard.welcome') }}">@lang('site.dashboard')</a>
                                </li>

                                <li class="breadcrumb-item"><a
                                        href="{{ route('dashboard.services.index') }}"> @lang('site.services') </a>
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


                                                    {{ BsForm::resource('services')->putModel($company, route('dashboard.services.update', $company)) }}
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

                                                            <div class="proSingPage col-md-12">
                                                                <label>@lang('site.companies')</label>
                                                                <select class="js-example-basic-single"  name="company_id" required>
                                                                    @foreach(\App\Models\Company::get()->pluck('name','id') as $key=>$value)
                                                                        <option value="{{$key}}" @if($company->company_id) selected @endif>{{$value}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-12 col-sm-12">

                                                            <div id="app">



                                                                {{ BsForm::image('image')->collection('avaters')->label(trans('site.image'))->files($company->getMediaResource('avaters'))}}

                                                            </div>

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

