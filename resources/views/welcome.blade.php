@extends('layouts.front-end')

@section('title', 'Index')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <img class="img-rounded img-front" src="{{ asset('img/front.jpg') }}">
        </div>
    </div>

    @if (session()->get('class') && session()->get('message'))
        <div class="row padding-top-row">
            <div class="col-md-12">
                <div class="{{ session()->get('class') }}" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ session()->get('message') }}
                </div>
            </div>
        </div>
    @endif

    <div class="padding-top-row row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="margin-div-top-header page-header">
                        <h2 style="margin-bottom: -5px;">@lang('petition.first-heading')</h2>
                    </div>

                    <p> @lang('petition.intro') </p>

                    <p style="margin-bottom: 25px;">@lang('petition.intro_not_convinced')</p>

                    <div style="margin-top: -10px;" class="page-header">
                        <h3 style="margin-bottom: -5px;">@lang('petition.second-heading')</h3>
                    </div>

                    <h3>@lang('petition.third-heading')</h3>

                    <p>@lang('petition.text_1', ['link' => 'https://nl.wikipedia.org/wiki/Warschaupact', 'link_text' => 'Warschaupact'])</p>

                    <p>@lang('petition.text_2')</p>

                    <p>@lang('petition.text_3')</p>

                    <p>@lang('petition.text_4')</p>

                    <h3>@lang('petition.fourth-heading')</h3>

                    <ol class="list-unstyled list-point">
                        <li class="li-padding-bottom">@lang('petition.point-1', ['link' => 'https://nl.wikipedia.org/wiki/Operatie_Allied_Force', 'link_text' => 'Operation Allied Force'])</li>
                        <li class="li-padding-bottom">@lang('petition.point-2', ['link' => 'https://nl.wikisource.org/wiki/Noord-Atlantisch_Verdrag', 'link_text' => 'NAVO-verdrag'])</li>
                        <li class="li-padding-bottom">@lang('petition.point-3', ['link' => 'https://nl.wikisource.org/wiki/Noord-Atlantisch_Verdrag', 'link_text' => 'NAVO-verdrag'])</li>
                        <li class="li-padding-bottom">@lang('petition.point-4', ['link' => 'https://nl.wikisource.org/wiki/Noord-Atlantisch_Verdrag', 'link_text' => 'NAVO-verdrag'])</li>
                        <li class="li-padding-bottom">@lang('petition.point-5')</li>
                        <li class="li-padding-bottom">@lang('petition.point-6')</li>
                        <li class="li-padding-bottom">@lang('petition.point-7')</li>
                        <li class="li-padding-bottom">@lang('petition.point-8')</li>
                        <li class="li-padding-bottom">@lang('petition.point-9')</li>
                        <li class="li-padding-bottom">@lang('petition.point-10')</li>
                        <li class="li-padding-bottom">@lang('petition.point-11')</li>
                        <li class="li-padding-bottom">@lang('petition.point-12')</li>
                        <li class="li-padding-bottom">@lang('petition.point-13')</li>
                        <li class="li-padding-bottom">@lang('petition.point-14')</li>
                    </ol>

                    <h4>@lang('petition.fifth-heading')</h4>

                    <ol class="list-unstyled list-point">
                        <li class="li-padding-bottom">@lang('petition.point-15')</li>
                        <li class="li-padding-bottom">@lang('petition.point-16')</li>
                        <li class="li-padding-bottom">@lang('petition.point-17')</li>
                        <li class="li-padding-bottom">@lang('petition.point-18')</li>
                        <li class="li-padding-bottom">@lang('petition.point-19')</li>
                        <li class="li-padding-bottom">@lang('petition.point-20')</li>
                        <li class="li-padding-bottom">@lang('petition.point-21')</li>
                    </ol>

                    <p class="lead"> @lang('petition.end-paragraph') </p>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Onderteken deze petitie</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('support.store') }}" id="support">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ config('app.name') }}" name="petition">

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <div class="col-sm-12">
                                <input type="text" class="form-control input-sm" placeholder="Uw naam" name="name" value="{{ old('name') }}">

                                @if ($errors->first('name'))
                                    <span class="help-block"><small>{{ $errors->first('name') }}</small></span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group form-group-sm {{ $errors->has('email') ? 'has-error' : '' }}">
                            <div class="col-sm-12">
                                <input class="form-control" placeholder="Uw E-mail adres" name="email" value="{{ old('email') }}">

                                @if ($errors->first('email'))
                                    <span class="help-block"><small>{{ $errors->first('email') }}</small></span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('city_name') || $errors->has('postal_code') ? 'has-error' : '' }}">
                            <div class="col-md-4 col-sm-4">
                                <input type="text" placeholder="Code" name="postal_code" value="{{ old('postal_code')  }}" class="form-control input-sm">
                            </div>

                            <div class="col-md-8 col-sm-8">
                                <input type="text" placeholder="Uw stad" name="city_name" value="{{ old('city_name')  }}" class="form-control input-sm">
                            </div>

                            @if ($errors->has('city_name') || $errors->has('postal_code'))
                                <div class="col-md-12">
                                    @if ($errors->has('city_name'))
                                        <span class="help-block"><small>{{ $errors->first('city_name') }}</small></span>
                                    @endif

                                    @if ($errors->has('postal_code'))
                                        <span class="help-block"><small>{{ $errors->first('postal_code') }}</small></span>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                            <div class="col-sm-12">
                                <select name="country" class="form-control input-sm">
                                    <option value="">-- Uw land --</option>

                                    @foreach ($countries->orderBy('long_name', 'ASC')->get() as $country)
                                        <option value="{{ $country->id }}" @if($country->long_name === old('country')) selected @endif> {{ $country->long_name }} </option>
                                    @endforeach
                                </select>

                                @if ($errors->first('country'))
                                    <span class="help-block"><small>{{ $errors->first('country') }}</small></span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="checkbox" name="publish" value="N"> Teken anoniem
                            </div>
                        </div>
                    </form>
                </div>

                <div class="panel-footer">
                    <button form="support" class="btn btn-xs btn-success" type="submit">
                        <span class="fa fa-pencil" aria-hidden="true"></span> Onderteken
                    </button>

                    <button form="support" class="btn btn-xs btn-danger">
                        <span class="fa fa-undo"></span> Reset
                    </button>
                </div>
            </div>

            <div class="margin-bottom-10">
                <span class="text-muted">
                    <i>
                        <small>
                            Bij het ondertekenen gaat u akkoord met onze <a href="{{ url('disclaimer') }}"> Disclaimer </a>.
                        </small>
                    </i>
                </span>
            </div>

            <div class="margin-bottom-10">
                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.nato.activisme.be" class="btn btn-block btn-social btn-facebook">
                    <span class="fa fa-facebook"></span> @lang('social.share', ['provider' => 'Facebook'])
                </a>

                <a href="https://twitter.com/home?status=Ik%20wil%20de%20NATO%20ontbinden.%20%0A%0A-%20http%3A//www.nato.activisme.be%20%23ActivismeBE%20%23VredeBE" class="btn btn-block btn-social btn-twitter">
                    <span class="fa fa-twitter"></span> @lang('social.share', ['provider' => 'Twitter'])
                </a>

                <a href="https://plus.google.com/share?url=http%3A//www.nato.activisme.be" class="btn btn-block btn-social btn-google">
                    <span class="fa fa-google"></span> @lang('social.share', ['provider' => 'Google+'])
                </a>

                <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.nato.activisme.be&title=Ontbind%20de%20NATO&summary=&source=" class="btn btn-block btn-social btn-linkedin">
                    <span class="fa fa-linkedin"></span> @lang('social.share', ['provider' => 'LinkedIn'])
                </a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-4">
                    <p>© {{ date('Y') }} - ActivismeBE</p>
                </div>

                <div class="col-md-6 col-sm-8">
                    <ul class="bottom_ul">
                        <li><a href="http://www.activisme.be">ActivismeBE</a></li>
                        <li><a href="https://www.vrede.be/">Vrede.be</a></li>
                        <li><a href="https://stopnato2017.org/">StopNATO2017</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
