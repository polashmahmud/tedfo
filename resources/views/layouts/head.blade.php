<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>TedFo - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href={{ asset("css/sweetalert2.min.css") }}>
    <script src={{ asset("js/sweetalert2.min.js") }}></script>
    <script src={{ asset("assets/js/require.min.js") }}></script>
    <!-- Dashboard Core -->
    <link href={{ asset("assets/css/dashboard.css") }} rel="stylesheet" />
    <script src={{ asset("assets/js/dashboard.js") }}></script>
    <!-- c3.js Charts Plugin -->
    <link href={{ asset("assets/plugins/charts-c3/plugin.css") }} rel="stylesheet" />
    <script src={{ asset("assets/plugins/charts-c3/plugin.js") }}></script>
    <!-- Google Maps Plugin -->
    <link href={{ asset("assets/plugins/maps-google/plugin.css") }} rel="stylesheet" />
    <script src={{ asset("assets/plugins/maps-google/plugin.js") }}></script>
    <!-- Input Mask Plugin -->
    <script src={{ asset("assets/plugins/input-mask/plugin.js") }}></script>
    

    <script>
        $(function () {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                })
                @if(session()-> has('success'))
                Toast.fire({
                    type: 'success',
                    title: "{!! Session::get('success') !!}"
                })
                @endif
                @if(session()-> has('info'))
                Toast.fire({
                    type: 'info',
                    title: "{!! Session::get('info') !!}"
                })
                @endif
                @if(session()->has('warning'))
                Toast.fire({
                    type: 'warning',
                    title: "{!! Session::get('warning') !!}"
                })
                @endif
                @if(session()-> has('error'))
                Toast.fire({
                    type: 'error',
                    title: "{!! Session::get('error') !!}"
                })
                @endif
            });
    </script>
</head>
