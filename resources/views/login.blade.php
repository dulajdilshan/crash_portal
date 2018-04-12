@extends('layouts.master_layout')
{{--@section('header')--}}
    {{--@include('layouts.header')--}}
{{--@endsection--}}
{{--@section('footer')--}}
    {{--@include('layouts.footer')--}}
{{--@endsection--}}
@section('login-page')
    <link href="{{asset('css/login.css')}}" rel="stylesheet" />
    <script src="{{asset('js/login.js')}}"></script>
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="name"/>
                <input type="password" placeholder="password"/>
                <input type="text" placeholder="email address"/>
                <button>create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form class="login-form">
                <input type="text" placeholder="username"/>
                <input type="password" placeholder="password"/>
                <button>login</button>
            </form>
        </div>
    </div>
@endsection