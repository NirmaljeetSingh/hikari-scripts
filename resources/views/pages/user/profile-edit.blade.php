@extends('layouts.main')
@section('main')
    <!-- off canvas -->
    <x-canvas />
    <x-user.profile-cover-section />
    @php 
        $tab = (isset(request()->tab)) ? request()->tab : 'profile-setting';
    @endphp

    <div class="profile-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <x-user.profile-avatar-section :edit="true" />
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="profile-about-area">
                        <div class="edit-profile-area">
                          <div class="hero">Edit Profile</div>
          
                            <div class="row flex-lg-nowrap">
                                <div class="col-12 col-lg-auto mb-3" style="width: 100%">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="e-profile">
                                                            <ul class="nav nav-tabs">
                                                                <li class="nav-item">
                                                                    <a class="nav-link  {{ ($tab == 'profile-setting') ? 'active' : '' }}" data-bs-toggle="tab" href="#home" >
                                                                        <i class="las la-user-cog"></i>
                                                                        Profile Settings
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link {{ ($tab == 'socialmedia-setting') ? 'active' : '' }}" data-bs-toggle="tab" href="#social-media">
                                                                        <i class="las la-hashtag"></i>
                                                                        Social Media Settings
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                <div class="tab-pane {{ ($tab == 'profile-setting') ? 'active' : '' }}" id="home">
                                                                    <div class="row border g-0 rounded shadow-sm" >
                                                                        <div class="col p-4">
                                                                        <h3>Profile Settings</h3>
                                
                                                                        <x-user.profile-setting/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane {{ ($tab == 'socialmedia-setting') ? 'active' : '' }}" id="social-media">
                                                                    <div class="row border g-0 rounded shadow-sm" >
                                                                        <div class="col p-4">
                                                                        <h3>Social Media Settings</h3>
                                                                            <x-user.social-media-setting />
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
            </div>
        </div>
    </div>
    <x-alert.toast-messages />
@endSection