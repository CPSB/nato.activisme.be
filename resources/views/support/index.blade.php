@extends('layouts.front-end')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <img class="img-rounded img-front" src="{{ asset('img/front.jpg') }}">
        </div>
    </div>

    <div style="padding-top: 15px;" class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div style="margin-top: -20px;" class="page-header">
                        <h2 style="margin-bottom: -5px;">Steunbetuigingen</h2>
                    </div>

                    @if ($signatures->count() === 0)
                        <div class="alert alert-info alert-important" role="alert">
                            <strong><span class="fa fa-info-circle" aria-hidden="true"></span> Info:</strong>
                            Er zijn nog geen steunbetuigingen.
                        </div>
                    @else
                        <p class="lead">Er zijn {{ $signatures->count() }} steunbetuigingen voor dit verdrag.</p>

                        <div class="table-responsive">
                            <table class="table table-condensed table-hover table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Naam:</th>
                                    <th>Land:</th>
                                    <th>Plaats:</th>
                                    <th>Datum:</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($results as $signature)
                                    <tr>
                                        <td><strong>#{{ $signature->id }}</strong></td>

                                        @if ((string) $signature->publish === 'Y')
                                            <td colspan="3"><span class="text-muted"><i>(De gebruiker heeft gekozen om anoniem te tekenen.)</i></span></td>
                                        @else
                                            <td>{{ ucfirst($signature->name) }}</td>
                                            <td>
                                                <span class="flag-icon flag-icon-{{ strtolower($signature->cntry->short_name) }}"></span>
                                                {{ $signature->cntry->long_name }}
                                            </td>

                                            <td>
                                                {{ $signature->postal_code }} {{ ucfirst($signature->city_name) }}
                                                {{-- $signature->cities->region->province_name_nl --}}
                                            </td>
                                        @endif

                                        <td>{{ $signature->created_at->format('d-m-Y H:i') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            {{ $results->render()}} {{-- Pagination pager --}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
