@extends('layouts.main')
@section('main')
    <!-- off canvas -->
    <x-canvas />
    <x-user.profile-cover-section />

    <div class="profile-content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <x-user.profile-avatar-section />
                </div>
                <div class="col-lg-8 col-sm-12">
                    <x-user.profile-description-section />

                    <x-user.profile-articles />

                </div>
            </div>
        </div>
    </div>
@endSection