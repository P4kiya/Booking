@extends('layouts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col s12">
                        <h3 class="page-title"><a href="/admin/appartements" style="color: black">Appartements</a></h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/appartements">Appartements</a></li>
                            <li class="breadcrumb-item active">Ajoute appartement</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 xl8 offset-xl2">

                    <div class="card">
                        <form method="POST" action="{{ route('storeaAppartement')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="bank-inner-details">
                                    <div class="row">
                                        <div class="col s12 l12 m12">
                                            <div class="form-group">
                                                <label>Appartement Image</label>
                                                <div class="change-photo-btn">
                                                    <div>
                                                        <p>Add Image</p>
                                                    </div>
                                                    <input type="file" class="upload" name="img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 l12 m12">
                                            <div class="form-group">
                                                <label>Prix haut season<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="prix_haut">
                                            </div>
                                        </div>
                                        <div class="col s12 l12 m12">
                                            <div class="form-group">
                                                <label>Prix basse season<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="prix_bas">
                                            </div>
                                        </div>
                                        <div class="col s12 l12 m12">
                                            <div class="form-group">
                                                <label>Numero d'appartement<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="numero_appartement">
                                            </div>
                                        </div>
                                        <div class="col s12 l12 m12">
                                            <div class="form-group modal-select-box">
                                                <label>Etage</label>
                                                <select class="select" name="etage">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col s12 l12 m12">
                                            <div class="form-group">
                                                <label>Nombre de chambre<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="nombre_chambre">
                                            </div>
                                        </div>
                                        <div class="col s12 l12 m12">
                                            <div class="form-group">
                                                <label>Capacite d'appartement<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="capacite_appartement">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" blog-categories-btn pt-0">
                                <div class="bank-details-btn ">
                                    <button name="submit" class="btn btn-lg btn-block btn-primary" id="addButton" style="width: 20%; border-radius: 8px;">Ajouter</button>
                                    <script>
                                        document.getElementById('addButton').addEventListener('click', function() {
                                            this.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>';
                                            this.style.width = '20%';
                                            this.style.borderRadius = '8px';
                                        });
                                    </script>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
