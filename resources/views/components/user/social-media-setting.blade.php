@php 
    $userProfile = auth()->user()->profile;
@endphp
<form class="form edit-profile" novalidate="" method="POST" action="{{ route('profile.update',$userProfile->user_id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col">
            <div class="row">
            <div class="col">
                <div class="form-group">
                <label>Quora</label>
                <input
                    class="form-control rounded-pill"
                    type="text"
                    name="quora"
                    placeholder="Quora"
                    value="{{ $userProfile->quora }}"
                />
                </div>
            </div>
            </div>
            <div class="col">
            <div class="form-group">
                <label>YouTube</label>
                <input
                class="form-control rounded-pill"
                type="text"
                name="youtube"
                placeholder="YouTube"
                value="{{ $userProfile->youtube }}"
                />
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
            <label>Instagram</label>
            <input
                class="form-control rounded-pill"
                type="text"
                name="instagram"
                placeholder="Instagram"
                value="{{ $userProfile->instagram }}"
            />
            </div>
        </div>
        <div class="col">
            <div class="form-group">
            <label>Discord</label>
            <input
                class="form-control rounded-pill"
                type="text"
                name="discord"
                placeholder="Discord"
                value="{{ $userProfile->discord }}"
            />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
            <label>Reddit</label>
            <input
                class="form-control rounded-pill"
                type="text"
                name="reddit"
                placeholder="Reddit"
                value="{{ $userProfile->reddit }}"
            />
            </div>
        </div>
        <div class="col">
            <div class="form-group">
            <label>Twitter</label>
            <input
                class="form-control rounded-pill"
                type="text"
                name="twitter"
                placeholder="Twitter"
                value="{{ $userProfile->twitter }}"
            />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>MyAnimeList</label>
                <input
                    class="form-control rounded-pill"
                    type="text"
                    name="my_anime_list"
                    placeholder="Web Site"
                    value="{{ $userProfile->my_anime_list }}"
                />
            </div>
        </div>
    </div>

    <div class="row mt-5">
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