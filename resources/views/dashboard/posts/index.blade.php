@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <select class="form-select form-select-sm" onchange="location = this.value;">
                    @if (request('perpage'))
                        <option value="/dashboard/posts?perpage={{ request('perpage') }}" selected>{{ request('perpage') }}</option>
                    @else
                        <option value="/dashboard/posts?perpage=15" selected>15</option>
                    @endif
                    <option value="/dashboard/posts?perpage=10">10</option>
                    <option value="/dashboard/posts?perpage=15">15</option>
                    <option value="/dashboard/posts?perpage=25">25</option>
                    <option value="/dashboard/posts?perpage=50">50</option>
                    <option value="/dashboard/posts?perpage=100">100</option>
                    <option value="/dashboard/posts?perpage=500">500</option>
                    <option value="/dashboard/posts?perpage=1000">1.000</option>
                    <option value="/dashboard/posts?perpage=10000">10.000</option>
                </select>
            </div>
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                <a href="/dashboard/posts/create" class="btn btn-primary">Create New Post</a>
            </div>
        </div>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                            <a href="#" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <a href="#" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="d-flex justify-content-center mb-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
