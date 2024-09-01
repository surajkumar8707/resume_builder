@extends('user.layout.app')
@section('page_title', 'Profile')
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
                        <div class="col-md-4 w-100 my-2">
                            <br>
                            <div class="image-upload-success-message text-success" style="display: none;"></div>
                            <div class="image-upload-error-message text-danger" style="display: none;"></div>
                            <div class="form-group w-100">
                                <label for="image">Upload Image</label>
                                <div id="image" class="dropzone dz-clickable w-100">
                                    <div class="dz-message needsclick">
                                        <br>Drop profile image here or click to upload.<br><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="image_id" id="image_id" value="">
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
@push('styles')
    <link rel="stylesheet" href="{{ public_asset('assets/front/plugins/dropzone/min/dropzone.min.css') }}">
    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
            padding: 5px;
            margin-top: 5px;
        }

        .dz-message {
            text-align: center;
            font-size: 25px;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ public_asset('assets/front/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <script>
        Dropzone.autoDiscover = false;
        const dropzone = $("#image").dropzone({
            init: function() {
                this.on('addedfile', function(file) {
                    if (this.files.length > 1) {
                        this.removeFile(this.files[0]);
                    }
                });
            },
            url: "{{ route('front.temp.image.create') }}",
            maxFiles: 1,
            paramName: 'image',
            addRemoveLinks: true,
            acceptedFiles: "image/jpeg,image/png,image/gif",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(file, response) {
                console.log(response)
                if (response.status == 'success') {
                    $("#image_id").val(response.data.id);
                    $('.image-upload-success-message').html(response.message).show();
                    $('.image-upload-error-message').hide().html("");
                } else {
                    $('.image-upload-error-message').html(response.message).show();
                    $('.image-upload-success-message').hide().html("");
                }
            }
        });
    </script>
@endpush
