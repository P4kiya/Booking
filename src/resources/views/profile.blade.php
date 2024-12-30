@extends('layouts.layout')

@section('content')
    <div class="page-wrapper profile-wrapper">
        <div class="content container-fluid">

            <div class="row justify-content-lg-center">
                <div class="col s12 m10 l10 ml-0">

                    <div class="page-header">
                        <div class="row">
                            <div class="colEmpty">
                                <h3 class="page-title">Profile</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="center-align mb-5">
                        <label class="avatar avatar-xxl profile-cover-avatar" for="avatar_upload">
                            <img class="avatar-img" src="assets/img/profiles/avatar-04.jpg" alt="Profile Image">
                            <input type="file" id="avatar_upload">
                            <span class="avatar-edit">
                                <i data-feather="edit-2" class="avatar-uploader-icon shadow-soft"></i>
                            </span>
                        </label>
                        <h2>Othmane Aitsalah<i class="fas fa-certificate text-primary small" data-toggle="tooltip"
                                data-placement="top" title="" data-original-title="Verified"></i></h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="far fa-building"></i> <span>pakiya Ltd.</span>
                            </li>
                            <li class="list-inline-item">
                                <i class="fas fa-map-marker-alt"></i> Marrakech, Maroc
                            </li>
                            <li class="list-inline-item">
                                <i class="far fa-calendar-alt"></i> <span>Jan 2024</span>
                            </li>
                        </ul>
                    </div>

                    <div class="row">

                        <div class="col s12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Activity</h5>
                                </div>
                                <div class="card-body card-body-height">
                                    <ul class="activity-feed">
                                        <li class="feed-item">
                                            <div class="feed-date">Nov 16</div>
                                            <span class="feed-text"><a href="profile.html">Brian Johnson</a> has paid the
                                                invoice <a href="view-invoice.html">"#DF65485"</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Nov 7</div>
                                            <span class="feed-text"><a href="profile.html">Marie Canales</a> has accepted
                                                your estimate <a href="view-estimate.html">#GTR458789</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a
                                                    href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a
                                                    href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a
                                                    href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a
                                                    href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Oct 24</div>
                                            <span class="feed-text">New expenses added <a
                                                    href="expenses.html">"#TR018756</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Jan 27</div>
                                            <span class="feed-text"><a href="profile.html">Robert Martin</a> gave a review
                                                for <a href="product-details.html">"Dell Laptop"</a></span>
                                        </li>
                                        <li class="feed-item">
                                            <div class="feed-date">Jan 14</div>
                                            <span class="feed-text">New customer registered <a href="profile.html">"Tori
                                                    Carter"</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
