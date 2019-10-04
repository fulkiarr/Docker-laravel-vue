<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700&display=swap" rel="stylesheet">
        {{-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> --}}
        <link href="{{ asset('inter/inter.css') }}">
        <title>AQMetrix Dashboard | Miota</title>
    </head>
    <style>
        body {
            font-family: Inter ,-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important;
        }

        .charts{
            width: auto;
        }

        .card {
            border: 1px solid rgba(211, 211, 211, 0.1) !important;
        }

        .highcharts-container {
            margin: 0 auto;
        }

        .charts
        .prc {
            position: relative;
            top: 0.5px;
            width: 130px;
            height: 65px;
            background-color: rgba(23, 43, 77, 1);
            border-radius: 200px 200px 0 0;
            border-top: 1px solid #fff;
            border-left: 1px solid #fff;
            border-right: 1px solid #fff;
        }
        .prc span {
            position: relative;
            top: 12px;
            font-family: Inter, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: #fff;
        }
    </style>
    <body>
        <div id="app"></div>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
