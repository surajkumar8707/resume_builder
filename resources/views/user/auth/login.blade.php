@extends('user.layout.blank')

@section('content')
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('user.login.post') }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <div class="mb-3">
                                                <input type="email" name="email" id="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                                                @error('email')
                                                    <span class="small text-danger m-0 -0">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <div class="mb-3">
                                                <input type="password" name="password" id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    placeholder="Password" aria-label="Password"
                                                    aria-describedby="password-addon">
                                                @error('password')
                                                    <span class="small text-danger m-0 -0">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @if (session()->has('auth_error'))
                                                <div class="text-danger small">{{ session()->get('auth_error') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" name="remember_me" type="checkbox"
                                                id="rememberMe" checked>
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Don't have an account?
                                        <a href="{{ route('user.register.form') }}"
                                            class="text-info text-gradient font-weight-bold">Sign
                                            up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('public/assets/user/img/curved-images/curved6.jpg')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
