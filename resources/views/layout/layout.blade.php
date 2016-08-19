<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env('SITE_NAME')}}</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{url('css/sweetalert2.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{url('js/jquery.blockUI.js')}}"></script>
    <script src="{{url('js/jquery.form.min.js')}}"></script>
    <script src="{{url('js/sweetalert2.min.js')}}"></script>
    <script src="{{url('js/base.js')}}"></script>

</head>

<body>
<div class="container">

    @yield('content')
</div>
</body>

</html>