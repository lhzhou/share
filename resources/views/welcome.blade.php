@extends('layout.layout')

@section('content')
    {{--main top--}}
    <div class="row main_top">
        <span class="left"><img src="{{url('images/icon.png')}}" style="width: 38px;height: 38px;" ></span>
        <span class="center">乐分赚&nbsp;&nbsp;<img src="http://weizfa.oss-cn-hangzhou.aliyuncs.com/star.png" alt="" width="80"></span>
        <span class="right">
            <button type="button" class="btn btn-danger btn-sm" onclick="location.reload() ">收藏</button>
        </span>
        <span class="center1" >平台入口已更新，请收藏入口页面！</span>
    </div>
    {{--main top end--}}

    <div class="clearfix"></div>

    {{--user info--}}

    <div class="main-user-info row">
        <div class="pull-left" style="width:22%">
            <span class="main-user-info-avatar" style="background-image:url('{{url('images/nopic.jpg')}}')"></span>
        </div>

        <div class="main-user-info-userInfo ">
            <p class="nickname">{{session('user.name')}} 您好!</p>
            <span class="balance">
                账户余额：<span style=" font-size:2rem"> ￥</span>
                <span style=" font-size:2rem;">{{$balance}} </span>
            </span>

        </div>
        <div class="clearfix"></div>
        <div class="col-xs-6 text-center">
            <p>今日分享收益</p>
            <p>0元</p>
        </div>

        <div class="col-xs-6 text-center">
            <p>今日徒弟收益</p>
            <p>0元</p>

        </div>

    </div>

    {{--user info end--}}

    {{--main menu list--}}

    <div class="main-menu row">
        <ul>
            <li>
                <a href="">
                    <div class="yz_ico"> <span class="fa fa-share-alt  icon2"></span></div>
                    <span>转发赚钱</span>
                </a>
            </li>

            <li>
                <a href="{{url('Wallet')}}">
                    <div class="yz_ico"> <span class="fa fa-cny xz icon2"></span> </div>
                    <span>我的钱包</span>
                </a>
            </li>

            <li>
                <a href="{{url('Invited')}}" >
                    <div class="yz_ico"> <span class="fa fa-slideshare icon2"></span> </div>
                    <span>我要收徒</span>
                </a>
            </li>

            <li>
                <a href="{{url('Help')}}">
                <div class="yz_ico"> <span class="fa fa-h-square icon2"></span> </div>
                <span>新手帮助</span>
                </a>
            </li>
        </ul>
        <ul>
            <li> <a href="">
                    <div class="yz_ico"> <span class="fa fa-share-alt-square icon1"></span> </div>
                    <span>转发收益</span>
                </a>
            </li>

            <li>
                <a href="http://shang.qq.com/wpa/qunwpa?idkey=d1e50e5aa9302df9fe3924d252f8358f8fc8b6f1441e6cf0c7615ab37331afb5">
                    <div class="yz_ico"> <span class="fa fa-weixin icon1"></span> </div>
                    <span>QQ交流群</span>
                </a>
            </li>



            <li> <a href="">
                    <div class="yz_ico"> <span class="fa fa-bar-chart icon1"></span> </div>
                    <span>徒弟收益</span>
                </a>
            </li>

            <li><a href="{{url('Lower')}}">
                    <div class="yz_ico"> <span class="fa fa-user-plus icon1"></span> </div>
                    <span>我的徒弟</span>
                </a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="{{url('Wallet/Withdrawals')}}">
                    <div class="yz_ico"> <span class="fa fa-credit-card icon2"></span> </div>
                    <span>我要提现</span>
                </a>
            </li>

            <li>
                <a href="{{url('Wallet/Withdrawals/Log')}}">
                    <div class="yz_ico"> <span class="fa fa-pie-chart icon2"></span> </div>
                    <span>提现记录</span>
                </a>
            </li>

            <li>
                <a href="{{url('ChangePassword')}}">
                    <div class="yz_ico"> <span class="fa fa-expeditedssl icon2"></span> </div>
                    <span>密码修改</span>
                </a>
            </li>
            <li>
                <a href="{{url('Out')}}">
                    <div class="yz_ico"> <span class="fa fa-power-off icon2"></span> </div>
                    <span>退出登录</span>
                </a>
            </li>
        </ul>
    </div>


    {{--main menu list end--}}



@endsection