@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-10">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All my Posts</a>
                <a href="/dashboard/posts" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="dashboard/posts" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="" class="img-fluid mt-3">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/dashboard/posts">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection