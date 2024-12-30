@extends('layouts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col s12">
                        <h3 class="page-title">Reservation</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/reservation">Reservation</a></li>
                            <li class="breadcrumb-item active">Ajoute Reservation</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col s12">
                    <div class="card invoices-add-card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('storeReservation') }}" class="invoices-form">
                                @csrf
                                <div class="invoices-main-form">
                                    <div class="row">
                                        <div class="col s12 xl5 m6">
                                            <h4 class="invoice-details-title">Details de la Reservation</h4>
                                            <div class="invoice-details-box">
                                                <label>Agences:</label>
                                                <select class="select" name="agency_id">
                                                    <option value="" selected>Selectionne une agence</option>
                                                    @foreach ($agencies as $agency)
                                                        <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invoice-inner-footer">
                                                    <div class="row align-items-center">
                                                        <div class="col s12 m6 l6 ">
                                                            <div class="invoice-inner-date">
                                                                <span> Du
                                                                    <input class="form-control " type="date"
                                                                        id="start_date" name="date_depuis"
                                                                        value="{{ $start_date }}">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l6 ">
                                                            <div class="invoice-inner-date invoice-inner-datepic">
                                                                <span> A
                                                                    <input class="form-control " type="date"
                                                                        id="end_date" name="date_jusqua"
                                                                        value="{{ $end_date }}">
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m6 xl4">
                                            <div class="form-group">
                                                <label>Client:</label>

                                                <select class="select" name="client_id">
                                                    <option>Selecte un client</option>

                                                    @foreach ($clients as $client)
                                                        <option value="{{ $client->id }}">{{ $client->nom }}
                                                            {{ $client->prenom }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label>Numero d'appartement:</label>
                                                <select class="select" name="appartement_id">
                                                    <option selected>Selectionne l'appartement</option>
                                                    @foreach ($appartements as $appartement)
                                                        @if (!$appartement->reservations->where('date_depuis', '<', $end_date)->where('date_jusqua', '>', $start_date)->count())
                                                            <option value="{{ $appartement->id }}">
                                                                {{ $appartement->numero_appartement }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col s12 m12 xl3" style="margin-top: -30px">
                                            <div class="inovices-month-info">
                                                <div class="row">
                                                    <div>
                                                        <label>
                                                            Prix par nuit:
                                                        </label>
                                                        <input class="form-control" type="text" placeholder="{{ number_format($appartement->prix_haut, 0, '.', '') }}"
                                                            id="price_per_night" name="prix">
                                                    </div>
                                                    <div>
                                                        <label class="mt-3">
                                                            Numbre de invite:
                                                        </label>
                                                        <select class="select" name="invite_n">
                                                            <option selected>Selectionne le numbre</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="invoice-add-table">
                                    <h4>Autre Activity</h4>
                                    <div class="responsive-table">
                                        <table class="table table-center add-table-items">
                                            <thead>
                                                <tr>
                                                    <th>Activity</th>
                                                    <th>Date</th>
                                                    <th>Description</th>
                                                    <th></th>
                                                    <th>Prix</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="add-row">
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td class="add-remove right-align">
                                                        <a href="#" class="add-btn2 me-2" style="color:black;">
                                                            <i class="fas fa-plus-circle"></i>
                                                        </a>
                                                        <a href="#" class="remove-btn2" style="color:#f00;">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col s12 l5 m6">
                                    <div class="invoice-total-card">
                                        <h4 class="invoice-total-title">Resume</h4>
                                        <div class="invoice-total-box">
                                            <div class="invoice-total-inner">
                                                <p>Tax de TVA<span> <sup> DH/ </sup>52</span></p>

                                                <div class="links-info-one">

                                                    <div class="links-cont">
                                                        <div class="service-amount"><a href="#"
                                                                class="service-trash d-flex"><i
                                                                    class="feather-trash-2 me-2"></i>Service Charge</a>
                                                            <span><sup> DH/ </sup>40</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="invoice-total-footer">
                                                <h4>Prix total<span id="total_price">{{ $appartement->prix_haut }}</span>
                                                </h4>
                                                <input type="text" name="total" id="input_total"
                                                    value="{{ $appartement->prix_haut }}" v style="display: none">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upload-sign">
                                        <div class="form-group service-upload">
                                            <span>importe Signature</span>
                                            <input type="file" multiple>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="nom de signateur">
                                        </div>
                                        <div class="form-group right mb-4">
                                            <button class="btn btn-primary" name="submit"
                                                type="submit">Reserve</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
