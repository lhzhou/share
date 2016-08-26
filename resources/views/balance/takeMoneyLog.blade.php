@extends('layout.layout')
@section('content')
    @include('layout.head')

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>金额</th>
                    <th>状态</th>
                    <th>日期</th>
                </tr>
            </thead>
            <tbody>
            @foreach($log->data AS $value)
                <tr>
                    <td>{{$value->qty}}</td>
                    <td>{{\App\Http\Controllers\Helper\Helper::Status($value->status)}}</td>
                    <td>{{date('Y-m-d h:i:s' , $value->created_at)}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection