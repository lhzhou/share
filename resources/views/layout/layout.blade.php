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
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/jquery.toast.css')}}">
    <link rel="stylesheet" href="{{url('css/lib.css')}}">
    <link rel="stylesheet" href="{{url('css/loaders.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery.blockUI.js')}}"></script>
    <script src="{{url('js/jquery.form.min.js')}}"></script>
    <script src="{{url('js/jquery.toast.js')}}"></script>
    <script src="{{url('js/base.js')}}"></script>

                

</head>

<body>
<div class="container-fluid">

    @yield('content')
</div>
</body>

</html>