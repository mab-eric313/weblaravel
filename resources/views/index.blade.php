@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@section('body')

<section class="container w-75 mt-5">
    <h1 class="mb-5">Portal - Kabar Burung</h1>
    @foreach (App\Models\Post::all() as $post)
    <a
        href=""
        class="text-success link-underline-success link-underline-opacity-0 link-underline-opacity-75-hover">{{ $post->title }}</a>
    <div>
        <span class="text-secondary mb-1">{{ $post->updated_at->format('M d, Y') }}</span>
        <span class="text-secondary mb-1">-</span>
        <span class="text-secondary mb-1">{{ $post->category }}</span>
        <span class="text-secondary mb-1">-</span>
        <span class="text-secondary mb-1">{{ $post->comments }} comments</span>
    </div>
    <div class="d-flex mb-5">
        <img
            src="{{ $post->images }}"
            alt=""
            class="me-3"
            style="width: 250px; height: 150px;">
        <p class="mb-1 d-flex ju">{{ $post->content }}</p>
    </div>
    @endforeach
</section>
@stop
