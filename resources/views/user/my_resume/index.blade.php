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
                <div class="row">
                    <div class="col-6">
                        <h6 class="mb-3">My Resume</h6>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('user.my.resumes.create') }}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($resumes as $resume)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <th>{{ $resume->id }}</th>
                                    <th>{{ $resume->first_name . ' ' . $resume->last_name }}</th>
                                    <th>{{ $resume->email }}</th>
                                    <th>{{ $resume->phone }}</th>
                                    <th>{{ $resume->address }}</th>
                                    <th>
                                        <a href="{{ route('user.my.resumes.show', $resume) }}">Show</a>
                                    </th>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
