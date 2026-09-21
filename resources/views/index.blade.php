@extends('layouts.app')

@section('title')
    หน้าแรกของเว็บไซต์
@endsection

@section('content')
    <h2>บทความล่าสุด</h2>
    <hr>
    @forelse ($blogs as $item)
        <h2>{{ $item->title }}</h2>
        <p>{{ Str::limit($item->content, 30) }}</p>
        <a href="/detail/{{ $item->id }}">อ่านเพิ่มเติม</a>
    @empty
        <p class="text-center py-2">ยังไม่มีบทความในขณะนี้</p>
    @endforelse
    <hr>
@endsection
