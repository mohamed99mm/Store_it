<html>
<head>
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        html, body {
            background-color: #e6edea;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

       div {
            text-align: center;
           padding: 10px 15px;

        }

        .title {
            font-size: 84px;
        }

        .links , a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;

        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row mb-4 mt-4" >
        <h2 style="margin: auto">@yield('heading')</h2>
    </div>
    <div class="row">
        @yield('content')
    </div>
</div>
</body>
</html>
