@extends('layout.layout')

@section('content')

@include('layout.head')

    <div class="row" style="margin-top: 15px">
        <div class="col-xs-12">
            <span class="label label-success " style="font-size: 1.5rem;">推广链接:</span>
        </div>

        <div class="col-xs-12 text-center" style="margin-top: 15px;">
            立刻扫码领取￥1现金奖励,满10提现

        </div>

    </div>


    <div class="col-xs-12" style="word-wrap: break-word; background: red;color: yellow;margin-top: 8px;border: solid 1px #333" >
        http://wwww.baidu.com/312312312321321
    </div>

    {{--二维码--}}

    <div class="col-sm-12" style="margin-top: 15px">
        <img class="img-responsive" src="https://ss0.bdstatic.com/94oJfD_bAAcT8t7mm9GUKT-xh_/timg?image&quality=100&size=b4000_4000&sec=1471855463&di=882c25747c07e538a5322b79a67a92ff&src=http://pic.baike.soso.com/p/20131211/20131211091752-393669037.jpg">
    </div>

    {{--注册按键--}}

    <div class="col-sm-12" style="margin-top: 15px">

        <a href="{{url('user/register')}}" class="btn btn-danger btn-block">立刻注册</a>
    </div>
@endsection