<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('storage/images/misc/logo.png') }}" type="image/x-icon">
    @yield('style')
    <title>Abibas</title>
</head>
<body class="cursor-default">
@include('partials.header')
<div>
    @yield('content')
</div>
@include('partials.footer')
</body>
<script src="https://cdn.tailwindcss.com"></script>
@yield('script')
</html>
