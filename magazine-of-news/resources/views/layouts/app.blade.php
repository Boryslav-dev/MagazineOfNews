<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/app.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>
<body>

@include('includes.header')

@if(Request::is('/') || Request::is('contact') || Request::is('order'))

    @include('includes.hero')

    <div class="container mt-5">
        <div class="row">
            <div class = "col-12">
                @yield('content')
            </div>
        </div>
    </div>

@endif

@if(!Request::is('/') && !Request::is('contact') && !Request::is('order') && !Request::is('login'))

    @include('includes.hero')

    <div class="container mt-5">
        <div class="row">
            <div class = "col-12 col-sm-9 content">
                @yield('content')
            </div>
            <div class="col-0 col-sm-3">
                @include('includes.aside')
            </div>
        </div>
        @include('includes.model')
    </div>

@endif

@if(Request::is('login'))
    <div class="container mt-5">
        <div class="row">
            <div class = "col-4 col-sm-4 content">

            </div>
            <div class = "col-3 col-sm-3 content">
                @yield('content')
            </div>
        </div>
    </div>
@endif

@include('includes.footer')

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
<script src="../../js/app.js"></script>
<script src="../../js/model.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>
