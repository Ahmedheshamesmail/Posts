@extends('layouts.app')
@section('content')
        <h1 class="mt-5">Posts</h1>
        <button class="btn btn-success btn-lg mb-1" type="submit">Create Poste</button>
    <table class="table table-dark table-hover">
        <thead></thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)

            <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->discription }}</td>
            <td>{{ $post->created_at->format('Y-m-d') }}</td>

            <td>
                <a class="btn btn-outline-success"  href="{{ route('posts.show', $post->id) }}">Veiw</a>
                <a  class="btn btn-outline-danger" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-warning">Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
</table>
@endsection

