@extends('layouts.app')
@section('content')
        <h1 class="mt-5">Posts</h1>
        <a class="btn btn-success btn-lg mb-1" href="{{route('posts.create')}}">Create Poste</a>
    <table class="table table-dark table-hover">
        <thead></thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created By</th>
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
            <td>{{ $post->user->name ?? 'no name' }}</td>
            <td>{{ $post->created_at->format('Y-m-d') }}</td>

            <td>
                <a class="btn btn-outline-success"  href="{{ route('posts.show', $post->id) }}">Veiw</a>
                <a  class="btn btn-outline-danger" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                        Delete
                    </button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
</table>
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this post?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>

        <!-- This will actually submit the form -->
        <form id="deleteForm" action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

