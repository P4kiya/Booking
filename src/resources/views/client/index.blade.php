@extends('client.layout.layouts')

@section('title', 'Accueil')

@section('styles')
<link rel="stylesheet" href="{{ asset('/assets/css/materialize.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/materialize-custom.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/scrollbar/scroll.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endsection

@section('content')
<div class="main-wrapper scrollbar-margins large-margin scroll-demo">
    <div class="container container-fluid">
        <div class="row flex-row-reverse">
            @foreach ($appartements as $appartement)
                <div class="col s12 m6 xl3 d-flex">
                    <div class="blog grid-blog flex-fill">
                        <div class="blog-image">
                            <a href="appartement-details">
                                <img style="height: 250px;" class="img-fluid"
                                    src="{{ $appartement->img ? asset('assets/img/appartements/' . $appartement->img) : asset('assets/img/appartements/example.webp') }}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="entry-meta meta-item">
                                <li>
                                    <div class="post-author">
                                        <a>
                                            <span>
                                                <h3 class="post-title">
                                                    {{ number_format($appartement->prix_haut, 0, '.', '') }}
                                                    <span><sup>DH</sup><sub>/Nuit</sub></span>
                                                </h3>
                                                <h4 class="post-date">
                                                    <span>N° </span>{{ $appartement->numero_appartement }}
                                                </h4>
                                                <h4 class="post-date">
                                                    <span>Etage </span>{{ $appartement->etage }}
                                                </h4>
                                                <ul class="item-amenities">
                                                    <li>
                                                        <i class="fa fa-bed"></i>
                                                        <span class="item-label">
                                                            {{ $appartement->nombre_chambre }} Chambres
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-user"></i>
                                                        <span class="item-label" style="width: 100px">
                                                            {{ $appartement->capacite_appartement }} Capacite
                                                        </span>
                                                    </li>
                                                </ul>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
