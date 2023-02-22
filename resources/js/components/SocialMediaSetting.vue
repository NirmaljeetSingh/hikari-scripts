<template>
    <form class="form edit-profile" novalidate="" >
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
                        value="www.quora.com/taro.nagisa"
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
                    value="taro.nagisa"
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
                    value="taro.nagisa"
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
                    value="taronagisa#1111"
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
                    value="taro.nagisa"
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
                    value="taro.nagisa"
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
                    name="website"
                    placeholder="Web Site"
                    value="taronagisa.com"
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
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
