@extends('layouts.main')
@section('container')
    <h2 class="mb-3 text-center">{{ $title }}</h2>
    {{-- Search Form --}}
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/posts" method="get">
                @if (request('category'))
                    <input type="hidden" name='category' value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name='author' value="{{ request('author') }}">
                @endif
                <div class="input-group mb-5">
                    <input type="text" class="form-control" placeholder="Search...." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        {{-- first post --}}
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                </a>
                <p>
                    <small class="text-muted">by: <a class="text-decoration-none"
                            href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                        in <a class="text-decoration-none"
                            href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read
                    more</a>
            </div>
        </div>
        {{-- All post --}}
        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute py-2 px-3" style="background-color: rgba(0, 88, 81, 0.7)">
                                <a class="text-decoration-none text-white"
                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}"
                                class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h6 class="card-title">{{ $post->title }}</h6>
                                <p>
                                    <small class="text-muted">by: <a class="text-decoration-none"
                                            href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}</small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-outline-coral d-block text-center">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    @else
        <p class="text-center fs-4">No post found</p>
    @endif
    <div class="d-flex justify-content-center mb-5">
        {{ $posts->links() }}
    </div>
@endsection
