@extends('layouts.layout')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col s12">
                        <h3 class="page-title">Parametre</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Parametre Profile</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col s12 m12">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Basic information</h5>
                        </div>
                        <div class="card-body">

                            <!-- Form -->
                            <form>
                                <div class="row form-group">
                                    <label for="name" class="col s12 m3 col-form-label input-label">Name</label>
                                    <div class="col s12 m9">
                                        <div class="d-flex align-items-center">
                                            <label class="avatar avatar-xxl profile-cover-avatar m-0" for="edit_img">
                                                <img id="avatarImg" class="avatar-img"
                                                    src="assets/img/profiles/avatar-04.jpg">
                                                <input type="file" id="edit_img">
                                                <span class="avatar-edit">
                                                    <i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="name" class="col s12 m3 col-form-label input-label">Nom</label>
                                    <div class="col s12 m9">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name"
                                            value="Othmane Aitsalah">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="email" class="col s12 m3 col-form-label input-label">Email</label>
                                    <div class="col s12 m9">
                                        <input type="email" class="form-control" id="email" placeholder="Email"
                                            value="pakiyaasiv1@gmail.com">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="phone" class="col s12 m3 col-form-label input-label">Phone </label>
                                    <div class="col s12 m9">
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="+x(xxx)xxx-xx-xx" value="(+212) 766-04-6660">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="location" class="col s12 m3 col-form-label input-label">Location</label>
                                    <div class="col s12 m9">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="location" placeholder="Country"
                                                value="Maroc">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="City" value="Marrakech">
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="zipcode" class="col s12 m3 col-form-label input-label">Zip code</label>
                                    <div class="col s12 m9">
                                        <input type="text" class="form-control" id="zipcode"
                                            placeholder="Your zip code" value="40000">
                                    </div>
                                </div>
                                <div class="right-align">
                                    <button class="btn btn-lg btn-block btn-primary" type="submit" id="changeButton" style="width: 15%; border-radius: 8px;">Change</button>
                                    <script>
                                        document.getElementById('changeButton').addEventListener('click', function() {
                                            this.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>';
                                            this.style.width = '15%';
                                            this.style.borderRadius = '8px';
                                        });
                                    </script>
                                </div>
                            </form>
                            <!-- /Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
