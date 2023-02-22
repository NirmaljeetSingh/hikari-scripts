@extends('layouts.main',['title' => 'Login','header' => false,'footer' => false])
@section('main')
<style>
    .login-area .buttons button.btn-login {
        background-color: #333;
        color: #fff !important;
        padding: 10px 20px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .login-area .buttons button {
        display: block;
        text-align: center;
    }
</style>
    <div class="login-wrapper">
        <div class="header">
            <div class="logo">
                <x-header.web-site-logo color="white"/>
            </div>
        </div>
        <div class="banner-area">
            <div class="logo"></div>
            <img src="./assets/img/login-banner.jpg" alt="" />
            <div class="banner-text ">
            "It's not some sort of special power. He has the ability to make allies of everyone he meets. And that is the most fearsome ability on the high seas."
            </div>
        </div>
        <div class="login-area">
            <div class="hero">Login</div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-outline mb-4">
                    <input
                    type="email"
                    name="email"
                    id=""
                    class=""
                    placeholder="Email"
                    value="{{ old('email') }}"
                    />
                </div>

                <div class="form-outline mb-4">
                    <input
                    type="password"
                    name="password"
                    id=""
                    class=""
                    placeholder="Password"
                    />
                </div>
                <div class="form-outline mb-4 bg-red">
                    {{ $errors->first() }}
                </div>
                <div class="buttons">
                    <button class="btn btn-login" href="#">Login</button>
                    <p>or</p>
                    <a class="btn btn-google" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="20" height="20"
                        viewBox="0 0 48 48"
                        style=" fill:#000000;">
                        <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path></svg>
                    Sign In With Google 
                    </a>
                </div>

                <div class="login-desc">
                    <p>If you don't have an account, <a href="{{ route('register') }}"> create it now!</a></p>
                </div>
            
            </form>
        </div>
    </div>
@endSection