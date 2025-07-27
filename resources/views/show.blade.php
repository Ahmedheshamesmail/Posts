
@extends('layouts.app')
@section('content')
          <h1 class="mt-5">Post Details</h1>
          <div class="card mb-3"></div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->discription }}</p>
                <p class="card-text"><small class="text-muted">Created at: {{ $post->created_at->format('Y-m-d') }}</small></p>
            </div>
            <div class="card-footer"></div>
                <a href="/posts" class="btn btn-primary">Back to Posts</a>
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit Post</a>
            <form action="/posts/{{ $post->id }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Post</button>
            </form>
            The current UNIX timestamp is {{ time() }}.
        </div>
        @endsection

