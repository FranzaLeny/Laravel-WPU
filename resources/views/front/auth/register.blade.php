@extends('layouts.main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <form action="/register" method="post">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <img class="mb-4 img-thumbnail border-0 rounded mx-auto d-block"
                                src="https://lembatakab.go.id/properti/lembata-logo.png" alt="">
                        </div>
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center pt-0">Form Register</h1>
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="User Name" value="{{ old('username') }}">
                        <label for="username">User Name</label>
                        @error('username')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="passwoerd" placeholder="Password">
                        <label for="passwoerd">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password-confirm" class="form-control @error('password-confirm')is-invalid @enderror" id="password-confirm"
                            placeholder="Retype Password">
                        <label for="password-confirm">Password Confirm</label>
                        @error('password-confirm')
                        <div class="invalid-feedback">
                           {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
                </form>
                <small class="d-block my-3 pb-5 text-center">Already Registered? <a class="text-decoration-none"
                        href="/login">Login
                        Now!</a></small>
            </main>
        </div>
    </div>

@endsection
