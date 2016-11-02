@extends('layout.layout')

@section('content')


    <div class="row" style="background: #df3031 ;height: 48px;display: block;line-height: 48px; padding: 0 15px">
        <span style="color: #FFCC33;font-size: 18px">{{env('SITE_NAME')}}</span><i style="color: #FFCC33;font-style: normal;font-size: 16px;margin-left: 15px">分享创造价值</i>
    </div>

    <form class="form-horizontal col-sm-12 ajaxForm " style="margin-top: 15px" role="form" method="post" action="{{url('Register')}}">

        <div class="form-group form-group-lg">
            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-username" type="number" class="form-control" name="mobile"  placeholder="手机号" required>
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password" type="password" class="form-control" name="password" placeholder="登录密码" required>
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input id="login-password" type="password" class="form-control" name="re-password" placeholder="确认密码" required>
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success btn-lg btn-block">立刻注册</button>
                </div>
            </div>

        </div>

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    </form>





@endsection