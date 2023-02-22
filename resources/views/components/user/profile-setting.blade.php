@php 
    $userData = auth()->user();
@endphp
<form class="form edit-profile" novalidate="" method="POST" enctype="multipart/form-data" action="{{ route('profile.store') }}">
    @csrf
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label>Name</label>
                    <input
                        class="form-control rounded-pill"
                        type="text"
                        name="name"
                        placeholder="Name"
                        value="{{ $userData->name }}" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                    <label>surname</label>
                    <input
                        class="form-control rounded-pill"
                        type="text"
                        name="surname"
                        placeholder="Surname"
                        value="{{ $userData->surname }}" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label>User Name</label>
                    <input
                        class="form-control rounded-pill"
                        type="text"
                        name="username"
                        placeholder="Username"
                        value="{{ $userData->username }}"
                        disabled
                    />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label>Email</label>
                    <input
                        class="form-control rounded-pill"
                        type="text"
                        name="email"
                        placeholder="{{ $userData->email }}"
                        value="{{ $userData->email }}"
                        disabled
                    />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <div class="form-group">
                    <label>About Me</label>
                    <textarea
                        class="form-control rounded"
                        rows="5"
                        name="bio"
                        placeholder="My Bio"
                    >{{ old('bio') ?? $userData->profile->bio }}</textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col mb-3">
                    <div class="form-group">
                    <label>Cover Photo</label>
                    <input
                        class="form-control rounded-pill"
                        type="file"
                        name="cover_image"
                        placeholder="user@example.com"
                        value="taro.nagisa@gmail.com"
                        accept="image/*"
                    />
                    </div>

                    <div class="form-group">
                    <label>Profile Photo</label>
                    <input
                        class="form-control rounded-pill"
                        type="file"
                        name="image"
                        placeholder="user@example.com"
                        value="taro.nagisa@gmail.com"
                        accept="image/*"
                    />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-6 mb-3">
            <div class="mb-2">
            <b>Change Password</b>
            </div>
            <div class="row">
            <div class="col">
                <div class="form-group">
                <label>Current</label>
                <input
                    class="form-control rounded-pill"
                    type="password"
                    name="current_password"
                    placeholder=""
                />
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col">
                <div class="form-group">
                <label>New</label>
                <input
                    class="form-control rounded-pill"
                    type="password"
                    name="password"
                    placeholder=""
                />
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col">
                <div class="form-group">
                <label
                    >Confirm
                    <span
                    class="d-none d-xl-inline"
                    ></span
                ></label>
                <input
                    class="form-control rounded-pill"
                    type="password"
                    name="password_confirmation"
                    placeholder=""
                />
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-end" >
            <button
            class="btn btn-primary rounded-pill"
            type="submit"
            >
            Save Changes
            </button>
        </div>
    </div>
</form>