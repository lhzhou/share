@extends('layout.layout')

@section('content')
    @include('layout.head')
    <p style="color: red;">徒弟</p>
    <ul class="lowerListing">

        @foreach($listing->data AS $value)
            <li>
                <span class="pull-left">
                    {{$value->mobile}}
                </span>

                <span class="pull-right">
                    {{date('Y-m-d H:i:s' , $value->created_at)}}
                </span>
            </li>
        @endforeach
    </ul>

    <style>

    </style>


@endsection

