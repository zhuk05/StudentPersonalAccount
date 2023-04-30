<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-6">
                <p>first column</p>
            </div>
            <div class="col-6">
                <p>second column</p>
                <button class="btn btn-danger">Click</button>
            </div> 
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">    
        <nav>
            <ul>
                <li><a href="{{ route('main.index') }}">Main</li>   
                <li><a href="{{ route('about.index') }}">About</li>
                <li><a href="{{ route('contact.index') }}">Contacts</li>
                <li><a href="{{ route('post.index') }}">Posts</li>
            </ul>
        </nav>
        <button class="btn btn-primary">Click</button>
        </div>
    </div> -->
 
    <div>
        @yield('content')
    </div>
</body>
</html>
