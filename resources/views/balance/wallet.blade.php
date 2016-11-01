@extends('layout.layout')

@section('content')

@include('layout.head')
    <div class="notice notice-success">
        <strong>账号余额</strong> {{$wallet->balance}}
    </div>
    <div class="notice notice-danger">
        <strong>分享收益</strong> {{$wallet->share}}
    </div>
    <div class="notice notice-info">
        <strong>徒弟收益</strong> {{$wallet->lower}}
    </div>

    {{--"user_id": "9a68851d-f933-3ba3-951f-93d52f1a9fa0",--}}
    {{--"total": "100.0000",--}}
    {{--"click": "80.0000",--}}
    {{--"apprentice": "20.0000",--}}

    <div class="btn-group btn-group-justified " role="group" aria-label="...">

        <div class="btn-group btn-group-lg" role="group">
            <a href="{{url('takeMoney')}}" class="btn btn-success">我要提现</a>
        </div>

        <div class="btn-group btn-group-lg" role="group">
            <button type="button" class="btn btn-warning">提现记录</button>
        </div>

    </div>


@endsection