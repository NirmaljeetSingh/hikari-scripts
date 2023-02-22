<section class="inner-banner justify-content-center align-items-center d-flex" style="background-image: url('')">
    <div class="profile-cover-user-picture">
        <x-image :src="auth()->user()->profile->cover_image" error="/assets/img/user-profile-cover.jpg" alt="" />
    </div>
    <div class="profile-cover-content">
        <h3 class="profile-cover-user-name">
            {{ auth()->user()->name }}
            <span>{{ '@'.auth()->user()->username }}</span>
        </h3>
    </div>
</section>