@extends('layouts.front-end')

@section('title', 'Index')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <img class="img-rounded img-front" src="{{ asset('img/front.jpg') }}">
        </div>
    </div>

    @if (session()->get('class') && session()->get('message'))
        <div style="padding-top: 15px;" class="row">
            <div class="col-md-12">
                <div class="{{ session()->get('class') }}" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ session()->get('message') }}
                </div>
            </div>
        </div>
    @endif

    <div style="padding-top: 15px;" class="row">
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div style="margin-top: -20px;" class="page-header">
                        <h2 style="margin-bottom: -5px;">Ontbindingsverdrag van de NAVO</h2>
                    </div>

                    <p class="lead">BESLUIT VAN DE NAVO-REGERINGSLEIDERS, BRUSSEL, 25 MEI</p>

                    <h3>Toelichting:</h3>

                    <p>
                        We verklaren dat de NAVO verouderd is. Het <a href="https://nl.wikipedia.org/wiki/Warschaupact" target="_blank">Warschaupact</a> is meer dan een kwart eeuw geleden ontbonden.
                        Het is tijd dat ook de NAVO ophoudt te bestaan en dat we onze veiligheid gemeenschappelijk, samen met onze buren,
                        maar ook met landen uit de hele wereld, organiseren. We willen dit doen in de schoot van de Verenigde Naties, die net daarvoor een mandaat heeft gekregen.
                    </p>

                    <p>
                        We hebben vastgesteld dat de NAVO heeft bijgedragen aan een onveiligere en instabielere wereld. Ons bondgenootschap en een aantal van onze leden hebben verschillende militaire interventies opgezet, die in de betrokken landen desastreus zijn afgelopen en chaos en geweld hebben voortgebracht.
                    </p>

                    <p>
                        Met Rusland zijn de spanningen gevaarlijk opgelopen. We stellen vast dat de opeenvolgende uitbreidingen van het NAVO-grondgebied in Rusland als bedreigend worden ervaren. De recente ontplooiing van enkele duizenden NAVO-troepen aan de grenzen van Rusland, de stijgende militaire budgetten en de modernisering van de kernwapenarsenalen hebben bijgedragen tot een nieuw Koude Oorlogsklimaat. In de Baltische Zee-regio, in Oekraïne en Syrië vonden al een aantal gevaarlijke incidenten plaats.
                    </p>

                    <p>
                        Het gevaar is extra groot omdat we te maken hebben met kernwapenmachten. Omdat we de mensheid niet langer in gevaar willen brengen zullen de miljarden kostende moderniseringen van het kernwapenarsenaal worden stopgezet. Deze massavernietigingswapens zullen worden ontmanteld. We nodigen de andere kernwapenmachten uit om dit ook te doen in een sfeer van vertrouwen. We benadrukken dat we in de toekomst onze veiligheid samen gestalte willen geven.
                    </p>

                    <h3>DE NAVO-REGERINGSLEIDERS,</h3>

                    <ol class="list-unstyled" style="list-style: decimal inside;">
                        <li style="padding-bottom: 5px;">vaststellend dat <a href="https://nl.wikipedia.org/wiki/Operatie_Allied_Force" target="_blank">Operation Allied Force</a> (24 maart – 10 juni) in Kosovo en Servië niet gedekt was door een mandaat van de Veiligheidsraad van de Verenigde Naties, noch dat het om een daad van zelfverdediging ging zoals verlangd door het VN-Handvest;</li>
                        <li style="padding-bottom: 5px;">vaststellend dat de oorlog in Kosovo en Servië in overtreding is met artikel 1 van het <a href="https://nl.wikisource.org/wiki/Noord-Atlantisch_Verdrag" target="_blank">NAVO-verdrag</a> waarin de partijen er zich toe verbinden om “zich in hun internationale betrekkingen te onthouden van bedreiging met of gebruik van geweld op enige wijze die onverenigbaar is met de doelstelling van de Verenigde Naties";</li>
                        <li style="padding-bottom: 5px;">vaststellend dat de militaire internationale operaties in voormalig Joegoslavië en Libië niet gedekt waren door het <a href="https://nl.wikisource.org/wiki/Noord-Atlantisch_Verdrag" target="_blank">NAVO-verdrag</a> dat krachtens artikel 5 het optreden van de alliantie beperkt tot de verdediging van het grondgebied;</li>
                        <li style="padding-bottom: 5px;">vaststellend dat het Nieuw Strategisch Concept van Washington (1999) het uitdrukkelijk heeft over ‘niet-artikel 5’ opdrachten en zo de NAVO omvormt tot een militaire alliantie die buiten het NAVO-grondgebied optreedt zonder machtiging te vragen van de nationale parlementen voor deze taken die niet voorzien in het <a href="https://nl.wikisource.org/wiki/Noord-Atlantisch_Verdrag" tager="_blank">NAVO-verdrag</a>;</li>
                        <li style="padding-bottom: 5px;">vaststellend dat het grondgebied van de NAVO opeenvolgende keren is uitgebreid naar het grondgebied van de voormalige Warschaupact landen en van voormalige Sovjetrepublieken in de buurt van de Russische veiligheidsruimte;</li>
                        <li style="padding-bottom: 5px;">vaststellend dat de NAVO begin 2017 duizenden extra NAVO-troepen en militair materieel heeft gestationeerd in Polen en de Baltische Staten en werkt aan de uitbouw van een anti-raketschild;</li>
                        <li style="padding-bottom: 5px;">vaststellend dat de NAVO in 2014 samenwerkingsakkoorden heeft afgesloten met Zweden en Finland, in de Baltische Zee-regio;</li>
                        <li style="padding-bottom: 5px;">vaststellend dat de NAVO uitdrukkelijk de deur openlaat voor een toekomstig lidmaatschap van Oekraïne en Georgië en daardoor de militaire operaties in beide landen versterkt;</li>
                        <li style="padding-bottom: 5px;">vaststellend dat de NAVO-uitbreidingen en troepenopbouw in de Baltische staten de veiligheid van de bevolkingen aldaar vermindert en er de oorlogsdreiging verhoogt;</li>
                        <li style="padding-bottom: 5px;">vaststellend dat de NAVO in 2014 heeft beslist dat de lidstaten er moeten naar streven om 2% van het BBP te besteden aan hun defensiebudgetten;</li>
                        <li style="padding-bottom: 5px;">overwegend dat het aantal mensen dat in armoede leeft in de EU en de VS respectievelijk 17,3 % en 14,5 % bedraagt van de bevolking;</li>
                        <li style="padding-bottom: 5px;">overwegend de grote wanverhouding tussen de defensiebudgetten van de NAVO en van Rusland en dat het Russische defensiebudget in 2017 zal krimpen van 7 naar 5 % van dat van de NAVO;</li>
                        <li style="padding-bottom: 5px;">vaststellend dat de nucleaire taakverdeling tussen de VS en een aantal NAVO-lidstaten, inclusief de opslag van kernbommen buiten VS-grondgebied, in strijd is met artikel 1 en artikel 2 van het nonproliferatieverdrag dat de verspreiding van kernwapens moet tegen gaan en waarin bepaald is dat er geen transfer mag bestaan van kernwapens tussen kernwapenstaten en niet-kernwapenstaten waardoor de onrechtstreekse controle over of overdracht van kernwapens van een kernwapenstaat naar een niet-kernwapenstaat zou bewerkstelligd worden;</li>
                        <li style="padding-bottom: 5px;">erkennend dat de kernwapenstaten van de NAVO grootschalige moderniseringsprogramma’s opzetten in weerwil van artikel 6 van het nonproliferatieverdrag waarin ze zich ertoe verbinden hun kernwapenarsenalen volledig af te bouwen.</li>
                    </ol>

                    <h4>A. BESLUITEN DAT DE NAVO MET ONMIDDELLIJKE INGANG ZAL ONTBONDEN WORDEN</h4>

                    <ol class="list-unstyled" style="list-style: decimal inside;">
                        <li style="padding-bottom: 5px;">wegens herhaaldelijke inbreuken op het internationaal recht zoals vervat in het VN-Handvest;</li>
                        <li style="padding-bottom: 5px;">wegens inbreuken op het <a href="https://nl.wikisource.org/wiki/Noord-Atlantisch_Verdrag" target="_blank">NAVO-verdrag</a>, meer bepaald op de preambule, artikel 1, artikel 2, artikel 5 en artikel 6;</li>
                        <li style="padding-bottom: 5px;">wegens inbreuken op het <a href="https://nl.wikipedia.org/wiki/Non-proliferatieverdrag" target="_blank">NPT-verdrag</a>;</li>
                        <li style="padding-bottom: 5px;">wegens de manifeste stijging van de conventionele en nucleaire bewapening die de internationale vrede en veiligheid in gedrang dreigt te brengen</li>
                        <li style="padding-bottom: 5px;">wegens de impact van de stijgende bewapeningsuitgaven op de middelen nodig voor de publieke dienstverlening;</li>
                        <li style="padding-bottom: 5px;">wegens de militaire confrontatiepolitiek met Rusland in een context van opeenvolgende NAVO-uitbreidingen, stijgende bewapening, troepenopbouw en de constructie van een raketschild;</li>
                        <li style="padding-bottom: 5px;">wegens de materiële en menselijke schade als gevolg van directe en indirecte militaire interventies;</li>
                    </ol>

                    <p class="lead">
                        B. BESLUITEN DAT DE INFRASTRUCTUUR EN DE MIDDELEN VAN DE NAVO, ALSOOK HET VRIJGEKOMEN VREDESDIVIDEND DOOR HET WEGVALLEN VAN DE BEWAPENINGSVERPLICHTING VAN DE NAVO DAAR WAAR MOGELIJK WORDEN INGEZET OM DE DUURZAME ONTWIKKELINGSDOELSTELLINGEN (SDG’S) VAN DE VERENIGDE NATIES TE HELPEN BEREIKEN.
                    </p>

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

            <div style="margin-bottom: 10px;">
			<span class="text-muted">
				<i>
					<small>
						Bij het ondertekenen gaat u akkoord met onze <a href="{{ url('disclaimer') }}"> Disclaimer </a>.
					</small>
				</i>
			</span>
            </div>

            <div style="margin-bottom: 10px;">
                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.nato.activisme.be" class="btn btn-block btn-social btn-facebook">
                    <span class="fa fa-facebook"></span> Deel op Facebook
                </a>

                <a href="https://twitter.com/home?status=Ik%20wil%20de%20NATO%20ontbinden.%20%0A%0A-%20http%3A//www.nato.activisme.be%20%23ActivismeBE%20%23VredeBE" class="btn btn-block btn-social btn-twitter">
                    <span class="fa fa-twitter"></span> Deel op Twitter
                </a>

                <a href="https://plus.google.com/share?url=http%3A//www.nato.activisme.be" class="btn btn-block btn-social btn-google">
                    <span class="fa fa-google"></span> Deel op Google+
                </a>

                <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//www.nato.activisme.be&title=Ontbind%20de%20NATO&summary=&source=" class="btn btn-block btn-social btn-linkedin">
                    <span class="fa fa-linkedin"></span> Deel op LinkedIn
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
