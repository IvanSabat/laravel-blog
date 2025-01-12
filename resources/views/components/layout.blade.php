<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel blog') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<header>
    <div class="nav container">
        <a href="{{ route('posts.index') }}" class="logo">Ivan's <span>blog</span></a>

{{--        <a href="#" class="login">Login</a>--}}
    </div>
</header>

<!-- Page Content -->
<main>
    {{ $slot }}
</main>

<div class="footer container">
    <p>&#169; <strong>Ivan Sabat</strong> All Right Reserved</p>
{{--    <div class="social">--}}
{{--        <a href="#"><i class='bx bxl-facebook'></i></a>--}}
{{--        <a href="#"><i class='bx bxl-twitter'></i></a>--}}
{{--        <a href="#"><i class='bx bxl-instagram'></i></a>--}}
{{--        <a href="#"><i class='bx bxl-linkedin'></i></a>--}}
{{--    </div>--}}
</div>

<script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
