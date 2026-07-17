@extends('master')
@section('title', 'Detail Post')
@section('body')
    <div class="card mt-4">
        <div class="card-header">
            <h3 class="text-center">Detail Post</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="fw-bold">Title</label>
                <p>{{ $post->title }}</p>
            </div>
            <div class="mb-3">
                <div class="mb-3">
                <label class="fw-bold">Images</label>
                <div>
                    <img src="{{ $post->images }}"></img>
                </div>
            </div>
            <div class="mb-3">
                <div class="mb-3">
                <label class="fw-bold">Category</label>
                <p>{{ $post->category }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Content</label>
                <p>{{ $post->content }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Comments</label>
                <p>{{ $post->comments }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Published</label>
                <p>{{ $post->published }}</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Created At</label>
                <p>{{ $post->created_at->format('M d, Y') }}</p>
            </div>
            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Edit</a>
            <a href="{{ route('post.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@stop

