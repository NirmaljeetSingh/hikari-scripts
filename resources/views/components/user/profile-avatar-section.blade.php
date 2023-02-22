<?php
    $editMode = isset($edit) ? true : false;
    $userProfile = auth()->user()->profile;
?>
<div class="profile-info-card">
    <div class="profile-user-avatar">
        {{-- <img src="{{ auth()->user()->profile->image ? storageMedia(auth()->user()->profile->image) : '/assets/img//user-profile-cover.jpg' }}" alt="" /> --}}
        <x-image :src="auth()->user()->profile->image" error="/assets/img/user-profile-cover.jpg" alt="" />
        <div class="profile-info-buttons">
            <div class="follow-btn">
                @if($editMode)
                <a class="btn btn-light" href="#">
                    {{ auth()->user()->username }}
                </a>
                @else
                <a class="btn btn-light" href="#">FOLLOW</a>
                @endif
            </div>
            <div class="profile-edit-btn">
                @if($editMode)
                <a class="btn btn-light" href="{{ route('profile.index') }}">
                    <i class="las la-arrow-circle-left"></i>
                </a>
                @else
                <a class="btn btn-light" href="{{ route('profile.edit',auth()->user()->id) }}">
                    <i class="las la-user-edit"></i>
                </a>
                @endif
            </div>
        </div>
    </div>
    <div class="user-profile-stats mt-3">
        <div class="profile-followers d-flex justify-content-between mb-2" >
            FOLLOWERS
            <div class="span">234</div>
        </div>
        <div class="profile-following d-flex justify-content-between mb-2" >
            FOLLOWING
            <div class="span">23</div>
        </div>
        <div class="profile-article-stats d-flex justify-content-between mb-2" >
            ARTICLES
            <div class="span">234</div>
        </div>
    </div>

    <div class="user-social-media">
        <div class="hero">
            Social Media
        </div>

        <div class="social-media-icons">
            <a href="#" target="_blank" @class(['d-none' => !$userProfile->quora ])>
                <i class="lab la-quora"></i>
            </a>

            <a href="#" target="_blank" @class(['d-none' => !$userProfile->youtube ])>
                <i class="lab la-youtube"></i>
            </a>

            <a href="#" target="_blank" @class(['d-none' => !$userProfile->instagram ])>
                <i class="lab la-instagram"></i>
            </a>

            <a href="#" target="_blank" @class(['d-none' => !$userProfile->discord ])>
                <i class="lab la-discord"></i>
            </a>

            <a href="#" target="_blank" @class(['d-none' => !$userProfile->reddit ])>
                <i class="lab la-reddit"></i>
            </a>

            <a href="#" target="_blank" @class(['d-none' => !$userProfile->twitter ])>
                <i class="lab la-twitter"></i>
            </a>
            
            <a href="#" target="_blank" >
                <i class="lab la-medium-m"></i>
            </a>
            {{-- @class(['d-none' => !$userProfile->my_anime_list ]) --}}
        </div>
    </div>
</div>