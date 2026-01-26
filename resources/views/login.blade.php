@extends('layout.main')

@section('title', 'Login')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section ('content')
    <div class="login-card">
        <h1>Login</h1>
        <p>Silakan masuk untuk melanjutkan</p>
        @if (session('error'))
            <div style="
                background:#fee2e2;
                color:#991b1b;
                padding:12px;
                border-radius:10px;
                margin-bottom:15px;
                text-align:center;
            ">
                {{ session('error') }}
            </div>
        @endif
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="text" 
                    id="email" 
                    name="email" 
                    placeholder="email"
                    required
                >
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="••••••••"
                    required
                >
            </div>
            <button type="submit" class="btn-login">Masuk</button>
        </form>
    </div>
@endsection

