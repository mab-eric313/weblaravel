@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@section('body')

<section class="container w-75 mt-5">
    <h1>Latest Linux Hardware Reviews, Open-Source News & Benchmarks</h1>
    <a href="{{ route('post.create'); }}"
        class="btn btn-success">
        + Tambah Post
    </a>
    @if(session('success'))
        <div class="alert alert-success mt-3 mb-3">{{ session('success') }}</div>
    @endif
</section>

<section class="container w-75 mt-5">
    @foreach (App\Models\Post::all() as $post)
    <div class="container">
        <a href=""
            class="text-success link-underline-success link-underline-opacity-0 link-underline-opacity-75-hover">{{ $post->title }}</a>
        <div>
            <span class="text-secondary mb-1">{{ $post->updated_at->format('M d, Y') }}</span>
            <span class="text-secondary mb-1">-</span>
            <span class="text-secondary mb-1">{{ $post->category }}</span>
            <span class="text-secondary mb-1">-</span>
            <span class="text-secondary mb-1">{{ $post->comments }} comments</span>
        </div>
        <div class="d-flex mb-2">
            <img
                src="{{ $post->images }}"
                alt=""
                class="me-3"
                style="width: 250px; height: 150px;">
            <p class="mb-1 d-flex ju">{{ $post->content }}</p>
        </div>
        <div class="mb-5">
            <a href="{{ route('post.show', $post->id) }}"
                class="btn btn-info btn-sm">
                Detail
            </a>
            <a href="{{ route('post.edit', $post->id) }}"
                class="btn btn-primary btn-sm">
                Edit
            </a>
            <form action="{{ route('post.destroy', $post->id) }}"
                  method="POST" class="d-inline"
                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </div>
    </div>
    @endforeach
</section>
@stop
