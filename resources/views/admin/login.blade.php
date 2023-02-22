@extends('layouts.admin')
@section('main')
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div
        class="
            auth-wrapper
            d-flex
            no-block
            justify-content-center
            align-items-center
            bg-dark
        "
        >
        <div class="auth-box bg-dark border-top border-secondary mb-4">
            <div id="loginform">
            <div class="text-center pt-3 pb-3">
                <span class="db">
                <!-- <img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo"/> -->
                <h2 class="text-white">Admin</h2>
                </span>
            </div>
            <!-- Form -->
            <form
                class="form-horizontal mt-3"
                id="loginform"
                method="post"
                action="{{route('admin.login.post')}}"
            >
            @csrf
                <div class="row pb-4">
                <div class="col-12">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span
                        class="input-group-text bg-success text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-account fs-4"></i
                        ></span>
                    </div>
                    <input
                        type="email"
                        class="form-control form-control-lg"
                        placeholder="Email"
                        aria-label="Email"
                        name="email"
                        aria-describedby="basic-addon1"
                        required=""
                    />
                    </div>
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span
                        class="input-group-text bg-warning text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                        ></span>
                    </div>
                    <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Password"
                        aria-label="Password"
                        name="password"
                        aria-describedby="basic-addon1"
                        required=""
                    />
                    </div>
                </div>
                </div>
                <div class="row border-top border-secondary">
                <div class="col-12">
                    <div class="form-group">
                    <div class="pt-3" style="color:red">
                        <!-- <button
                        class="btn btn-info"
                        id="to-recover"
                        type="button"
                        > -->
                        <!-- <i class="mdi mdi-lock fs-4 me-1"></i> -->
                         <!-- Lost password? -->
                        <!-- </button> -->
                        <!-- print_r($errors->all()) -->
                        @if($errors->any())
                        {{$errors->all()[1] ?? 'Error !!'}}
                        @endif
                        <button
                        class="btn btn-success float-end text-white"
                        type="submit"
                        >
                        Login
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
            </div>
            <div id="recoverform d-none" style="display:none">
            <div class="text-center">
                <span class="text-white"
                >Enter your e-mail address below and we will send you
                instructions how to recover a password.</span
                >
            </div>
            <div class="row mt-3">
                <!-- Form -->
                <form class="col-12" action="index.html">
                <!-- email -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-email fs-4"></i
                    ></span>
                    </div>
                    <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="Email Address"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                    />
                </div>
                <!-- pwd -->
                <div class="row mt-3 pt-3 border-top border-secondary">
                    <div class="col-12">
                    <a
                        class="btn btn-success text-white"
                        href="#"
                        id="to-login"
                        name="action"
                        >Back To Login</a
                    >
                    <button
                        class="btn btn-info float-end"
                        type="button"
                        name="action"
                    >
                        Recover
                    </button>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
@endSection
@section('e-script')
    <script>
        $(".preloader").fadeOut();
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $("#to-recover").on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
        });
        $("#to-login").click(function () {
        $("#recoverform").hide();
        $("#loginform").fadeIn();
        });
    </script>
@endSection