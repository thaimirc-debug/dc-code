<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/styles.css')}}?tme={{base64_encode(now())}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <title>@stack('title', 'ศูนย์สาธิตฯ บ้านป่าหวายนั่ง')</title>
    <meta name="description" content="@stack('description', 'ศูนย์สาธิตฯ บ้านป่าหวายนั่ง')">
    <meta name="keywords" content="@stack('keywords','OKmini, ศูนย์สาธิตฯ บ้านป่าหวายนั่ง')">
</head>

<body>
    <header>
        @if (Route::has('login'))
            <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand" href="#">ศูนย์สาธิตฯ</a>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">สินค้า</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ข่าวประชาสัมพันธ์</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ติดต่อเรา</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ช่วยเหลือ</a>
                            </li>
                        </ul>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-warning shadow">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-sm btn-success shadow">
                                Log in
                            </a>&nbsp;

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-sm btn-blue shadow">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                </div>
            </nav>
        @endif
    </header>
    <div>
        <p class="text-center mt-5">
            <img src="{{ asset('tree.png') }}" alt="" width="250">
        </p>
        <h1 class="text-center">
            ศูนย์สาธิตฯ บ้านป่าหวายนั่ง   
            
        </h1>
        <p class="text-center">ขออภัยในความไม่สะดวก กำลังอยู่ในช่วงอัพเดทข้อมูล...</p>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>
