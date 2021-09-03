@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="row justify-content-center">
                <div class="col-6">
                    <img class="mb-4 img-thumbnail border-0 rounded mx-auto d-block"
                        src="https://lembatakab.go.id/properti/lembata-logo.png" alt="">
                    {{-- src="https://source.unsplash.com/WLUHO9A_xik/400x400" alt=""> --}}
                </div>
            </div>
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

            <main class="form-signin">
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" >
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="checkbox mb-3 text-center">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
                </form>
                <small class="d-block mt-3 text-center">Not Registered? <a class="text-decoration-none"
                        href="/register">Register
                        Now!</a></small>
            </main>
        </div>
    </div>

@endsection
