@extends('user.layout.app')
@section('page_title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="row my-3">
            <div class="col-3 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Resume</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        {{-- $53,000 --}}
                                        <a href="{{ route('user.my.resumes.index') }}">
                                            <span
                                                class="text-success text-sm font-weight-bolder">{{ $user->resumes()->count() }}</span>
                                        </a>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        2,300
                                        <span class="text-success text-sm font-weight-bolder">+3%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        +3,462
                                        <span class="text-danger text-sm font-weight-bolder">-2%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
                                    <h5 class="font-weight-bolder mb-0">
                                        $103,430
                                        <span class="text-success text-sm font-weight-bolder">+5%</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="card w-100 my-3">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Last 5 Resumes</h6>
                    <p class="text-sm mb-0">
                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                        <span
                            class="font-weight-bold ms-1">{{ $this_month . ($this_month <= 2 ? ' resume' : ' resumes') }}</span>
                        created this month
                    </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                    <a href="{{ route('user.my.resumes.create') }}" class="btn btn-outline-primary btn-sm mb-0"> Create </a>
                    <a href="{{ route('user.my.resumes.index') }}" class="btn btn-outline-primary btn-sm mb-0"> View
                        All </a>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Date</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($last_five_resumes) > 0)
                            @foreach ($last_five_resumes as $resume)
                                <tr>
                                    <td>

                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                {{ $loop->iteration }} &nbsp;
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">
                                                    {{ $resume->first_name . ' ' . $resume->last_name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="avatar-group mt-2">
                                            <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                aria-label="{{ $resume->first_name }}"
                                                data-bs-original-title="{{ $resume->first_name }}">
                                                <img src="{{ public_asset($resume->photo) }}"
                                                    alt="{{ $resume->first_name }}" style="width: 200%;">
                                            </a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-xs font-weight-bold">
                                            {{ date('F, m, Y', strtotime($resume->created_at)) }} </span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('user.my.resumes.show', $resume->id) }}"
                                            class="btn btn-link text-dark text-sm mb-0 px-0 ms-4">
                                            <i class="fas fa-file-pdf text-lg me-1"></i> show
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="text-center">
                                You have not any Resume, Please <a href="{{ route('front.create.cv') }}">create Resume</a>
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
