<h1>Hello {{$name }} Your age is {{$age}}</h1>
@if (count($books) > 0)
    <ul>
        @foreach ($books as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>

@endif
@unless (Auth::check())
    You are not signed in.
@endunless

@auth
    <p>Welcome, {{ Auth::user()->name }}!</p>
@endauth

@guest
    <a href="/login">Login</a>
@endguest
@empty($books)
     $books is "empty"...
@endempty
@forelse ($books as $book)
    <li>{{ $book }}</li>
@empty
    <p>No users</p>
@endforelse
