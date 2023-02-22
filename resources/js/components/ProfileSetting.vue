<template>
    <form class="form edit-profile" novalidate="" >
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                        <label>Full Name</label>
                        <input
                            class="form-control rounded-pill"
                            type="text"
                            name="name"
                            placeholder="Full Name"
                            value="Taro Nagisa"
                        />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                        <label>Username</label>
                        <input
                            class="form-control rounded-pill"
                            type="text"
                            name="username"
                            placeholder="Username"
                            value="taro.nagisa"
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
                        placeholder="user@example.com"
                        value="taro.nagisa@gmail.com"
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
                            placeholder="My Bio"
                        ></textarea>
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
                            placeholder="user@example.com"
                            value="taro.nagisa@gmail.com"
                        />
                        </div>

                        <div class="form-group">
                        <label>Profile Photo</label>
                        <input
                            class="form-control rounded-pill"
                            type="file"
                            placeholder="user@example.com"
                            value="taro.nagisa@gmail.com"
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
                        placeholder="••••••"
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
                        placeholder="••••••"
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
                        placeholder="••••••"
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
</template>

<script>
    export default {
        mounted() {
            props : ['user']
            console.log('Component mounted.')
        }
    }
</script>
