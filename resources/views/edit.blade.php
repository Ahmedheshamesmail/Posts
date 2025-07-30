@extends('layouts.app')
@section('content')
<h1 class="mt-5">Edit Post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
    </div>

    <div class="mb-3">
        <label for="discription" class="form-label">discription</label>
        <textarea class="form-control" id="discription" name="discription" rows="3" required>{{ $post->discription }}</textarea>
    </div>
    <div class="mb-3">
        <label for="user_id" class="form-label">User</label>
        <select name="user_id" class="form-select" required>
            <option value="">Select User</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $post->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
            @endforeach
        </select>

    <button type="submit" class="btn btn-primary">Update Post</button>
    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">Cancel</a>
</form>

<div class="mt-3">
    <a href="{{ route('posts.index') }}" class="btn btn-info">Back to Posts</a>
</div>
@endsection
