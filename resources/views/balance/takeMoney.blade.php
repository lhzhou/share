

@extends('layout.layout')

@section('content')

    @include('layout.head')

    <div class="card-content-inner">
        <p class="text-info">您的可用提现余额 ￥<span style="color: red;font-weight: bold">1</span>元 三个工作日内到账</p>
        <p class="text-info">实名验证的支付宝才可以收到提现</p>
        <p class="text-info">一经绑定不能修改。如有问题请联系客服</p>
        <p class="text-info"><font color="red">提示：没有支付宝的，请选择话费充值！支付宝必须实名认证，没有实名认证的收不到款！</font></p>
    </div>


    <form class="form-horizontal col-sm-12 ajaxForm" style="margin-top: 15px" role="form" method="post" action="{{url('takeMoney')}}">

        <div class="form-group form-group-lg">
            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                <input id="login-username" type="text" class="form-control" name="account" value="" placeholder="支付宝账号">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="login-password" type="password" class="form-control" name="name" placeholder="支付姓名">
            </div>

            <div style="margin-bottom: 25px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-yen"></i></span>
                <input id="login-password" type="password" class="form-control" name="qty" placeholder="提现金额">
            </div>

            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success btn-lg btn-block">提交申请</button>
                </div>
            </div>


        </div>

        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    </form>


@endsection