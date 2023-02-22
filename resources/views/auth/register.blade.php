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

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h5>Your Details.</h5>
                <div class="form-field mb-4">
            
                    <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    value="{{ old('name') }}"
                    />
        
                </div>

                <div class="form-field mb-4">
            
                    <input
                    type="text"
                    name="surname"
                    placeholder="Surname"
                    value="{{ old('surname') }}"
                    />
        
                </div>

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

                <h5>Username and Password.</h5>

                <div class="form-outline mb-4">
                    <input
                    type="text"
                    name="username"
                    id=""
                    class=""
                    placeholder="Username"
                    value="{{ old('username') }}"
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
                <div class="form-outline mb-4">
                    <input
                    type="password"
                    name="password_confirmation"
                    id=""
                    class=""
                    placeholder="Password Confirmation"
                    />
                </div>
                <div class="form-outline mb-4">
                    {{ $errors->first() }}
                </div>
                <div class="buttons">
                    <button class="btn btn-login" >Sign Up</button>
                    <p>or</p>
                    <a class="btn btn-google" href="{{ route('login') }}">
                    Login 
                    </a>
                </div>
                
            </form>
        </div>
    </div>
@endSection