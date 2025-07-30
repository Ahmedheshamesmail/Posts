@extends('layouts.app')
@section('content')
<h1 class="mt-5">Edit Post</h1>
<form action="{{route('posts.store')}}" method="POST" class="mt-3">
    @csrf
    <div class="mb-3">
  <label for="title" class="form-label">Email address</label>
  <input type="text" name="title" class="form-control" id="title" required>
</div>
<div class="mb-3">
  <label for="discription" class="form-label">Example textarea</label>
  <textarea name="discription" class="form-control" id="discription" rows="3" required></textarea>

  <select name="user_id" class="form-select mt-3" required>
    <option value="">Select User</option>
    @foreach($users as $user)
        <option name="user_id" value="{{ $user->id }}">{{ $user->name }}</option>
    @endforeach
    </select>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
    </form>
<div class="mt-3">
    <a href="{{ route('posts.index') }}" class="btn btn-info">Back to Posts</a>
</div>
</div>
@endsection
