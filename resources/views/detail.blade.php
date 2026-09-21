@extends('layouts.app')

@section('title')
    {{ $blogs->title }}
    หน้าแรกของเว็บไซต์
@endsection

@section('content')
    <h1>{{ $blogs->title }}</h1>
    <hr>
    <p>{!! $blogs->content !!}</p>
@endsection
