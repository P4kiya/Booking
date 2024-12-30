@extends('layouts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col s12">
                        <h3 class="page-title">Client</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/clients">Client</a></li>
                            <li class="breadcrumb-item active">Ajoute Client</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic Info</h4>
                            <form method="POST" action="{{ route('storeClient')}}">
                                @csrf
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" name="nom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="form-group">
                                            <label>Prenom</label>
                                            <input type="text" name="prenom" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="select" name="gendre">
                                                <option selected>Male</option>
                                                <option>Femalle</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col s12 m6">
                                        <div class="form-group">
                                            <label>CNIE</label>
                                            <input type="text" name="cnie" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            <h4 class="card-title mt-4">Address</h4>
                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="form-group">
                                            <label>Pays</label>
                                            <input type="text" name="pays" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>La region</label>
                                            <input type="text" name="region" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="form-group">
                                            <label>La ville</label>
                                            <input type="text" name="ville" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Code Postal</label>
                                            <input type="text" name="code_postal" class="form-control">
                                        </div>
                                    </div>
                                    <input type="text" name="status" value="active" style="display: none">
                                </div>
                                <div class="right-align mt-4">
                                    <button type="submit" name="submit" class="btn btn-primary">Ajoute</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
