<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
          <h1 class="mt-5">Post Details</h1>
          <div class="card mb-3"></div>
            <div class="card-body">
                <h5 class="card-title">{{ $posts->title }}</h5>
                <p class="card-text">{{ $posts->content }}</p>
                <p class="card-text"><small class="text-muted">Created at: {{ $posts->created_at->format('Y-m-d') }}</small></p>
            </div>
            <div class="card-footer"></div>
                <a href="/posts" class="btn btn-primary">Back to Posts</a>
            <a href="/posts/{{ $posts->id }}/edit" class="btn btn-secondary">Edit Post</a>
            <form action="/posts/{{ $posts->id }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Post</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
