<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <base href="{{ $uri->path() }}" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="shortcut icon" href="{{ $asset->path('images/favicon.png') }}" />

    <title>@yield('title', $helper->page->title($config['title'] ?? ''))</title>

    @stack('meta')
    @yield('meta')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baskerville:wght@400;500;600&family=Noto+Serif+TC:wght@400;500;600&display=swap" />
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    @stack('style')
    <link rel="stylesheet" href="assets/css/main.css" />

    @stack('head')
</head>
<body class="{{ $helper->page->bodyClass() }}">
@yield('superbody')

<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

@stack('script')
</body>
</html>
