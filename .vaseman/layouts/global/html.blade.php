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

    <link href="asseets/vendor/@fortawesome/fontawesome-pro/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    @stack('style')
    <link href="css/main.css" rel="stylesheet">

    @stack('head')
</head>
<body class="{{ $helper->page->bodyClass() }}" style="margin-top: 50px">
@yield('superbody')

<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

@stack('script')
</body>
</html>
