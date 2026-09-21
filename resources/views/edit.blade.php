@extends('layouts.app')

@section('title')
    แก้ไขบทความ
@endsection

@section('content')
    <h2 class="text-center py-2">แก้ไขบทความ</h2>
    <form method="POST" action="{{ route('update', $blogs->id) }}">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อบทความ: </label>
            <input type="text" name="title" class="form-control" value="{{ $blogs->title }}">
        </div>
        @error('title')
            <p class ="text-danger">{{ $message }}</p>
        @enderror

        <div class="form-group">
            <label for="title">เนื้อหาบทความ: </label>
            <textarea name="content" id="content" class="form-control" cols="50" rows="5">{{ $blogs->content }}</textarea>
        </div>

        @error('content')
            <p class ="text-danger">{{ $message }}</p>
        @enderror

        <input type="submit" value="บันทึก" class="btn btn-primary my-3">
        <a href="/author/blogs" class="btn btn-success my-3">บทความทั้งหมด</a>
    </form>
@endsection
