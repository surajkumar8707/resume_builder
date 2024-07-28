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
                    {{-- <p class="mb-0 font-weight-bold text-sm">
                        CEO / Co-Founder
                    </p> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-3">Edit Profile</h6>
                <form action="{{ route('user.profile.update') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name', $user->name) }}" placeholder="Name">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', $user->email) }}" placeholder="email">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" id="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone', $user->phone) }}" placeholder="phone">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country"
                                    class="form-control @error('country') is-invalid @enderror"
                                    value="{{ old('country', $user->country) }}" placeholder="country">
                                @error('country')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state"
                                    class="form-control @error('state') is-invalid @enderror"
                                    value="{{ old('state', $user->state) }}" placeholder="state">
                                @error('state')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="city">Sity</label>
                                <input type="text" name="city" id="city"
                                    class="form-control @error('city') is-invalid @enderror"
                                    value="{{ old('city', $user->city) }}" placeholder="city">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror"
                            placeholder="address">{{ old('address', $user->address) }}</textarea>
                        @error('address')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Updat Profile</button>
                        {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
