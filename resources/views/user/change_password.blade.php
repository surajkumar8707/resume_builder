@extends('user.layout.app')

@section('content')
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('public/assets/user/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>

    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{ public_asset($user->image) }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ $user->name }}
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-3">Change Password</h6>
                <form action="{{ route('user.update.password') }}" method="POST">
                    @csrf
                    <div class="mb-3 form-group">
                        <label for="current_password" class="form-label">Current Password</label>
                        <input class="form-control @error('current_password') is-invalid @enderror" type="password"
                            id="current_password" name="current_password">
                        @error('current_password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-group">
                        <label for="password" class="form-label">New Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" id="password"
                            name="password">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 form-group">
                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
