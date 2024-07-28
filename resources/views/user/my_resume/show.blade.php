@extends('user.layout.app')
@section('page_title', 'Resume Details')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h3 class="card-title mb-4">User Resume</h3>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn btn-primary btn-sm" href="{{ route('user.my.resumes.index') }}">My Resume</a>
                        <a class="btn btn-primary btn-sm" href="{{ route('user.my.resumes.print', $resume->id) }}">Print
                            Resume</a>
                    </div>
                </div>

                <!-- Profile Section -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <img src="{{ _('https://png.pngtree.com/png-vector/20230304/ourlarge/pngtree-male-avator-icon-vector-png-image_6631112.png') }}"
                            alt="Profile Picture" class="img-fluid img-thumbnail">
                    </div>
                    <div class="col-md-9">
                        <h5 class="mb-3">{{ $resume['first_name'] }} {{ $resume['last_name'] }}</h5>
                        <p><strong>Email:</strong> {{ $resume['email'] }}</p>
                        <p><strong>Phone:</strong> {{ $resume['phone'] }}</p>
                        <p><strong>Location:</strong> {{ $resume['city'] }}, {{ $resume['state'] }},
                            {{ $resume['country'] }}</p>
                    </div>
                </div>

                <!-- Professional Summary Section -->
                <div class="mb-4">
                    <h5 class="mb-3">Professional Summary</h5>
                    <p>{{ $resume['professional_summary'] ?: 'No professional summary provided.' }}</p>
                </div>

                <!-- Work Experiences Section -->
                <div class="mb-4">
                    <h5 class="mb-3">Work Experiences</h5>
                    @foreach ($resume['workExperiences'] as $experience)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $experience['company_name'] }}</h5>
                                <p class="card-text"><strong>Position:</strong> {{ $experience['position'] }}</p>
                                <p class="card-text"><strong>Duration:</strong> {{ $experience['start_date'] }} -
                                    @if ($experience['end_date'])
                                        {{ $experience['end_date'] }}
                                    @else
                                        Present
                                    @endif
                                </p>
                                <p class="card-text"><strong>Location:</strong> {{ $experience['city'] }},
                                    {{ $experience['state'] }}, {{ $experience['country'] }}</p>
                                <p class="card-text">{{ $experience['description'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Education Section -->
                <div class="mb-4">
                    <h5 class="mb-3">Education</h5>
                    @foreach ($resume['educations'] as $education)
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $education['school_name'] }}</h5>
                                <p class="card-text"><strong>Degree:</strong> {{ $education['degree'] ?: 'Not specified' }}
                                </p>
                                <p class="card-text"><strong>Field of Study:</strong> {{ $education['field_of_study'] }}
                                </p>
                                <p class="card-text"><strong>Duration:</strong> {{ $education['start_date'] }} -
                                    {{ $education['end_date'] ?: 'Present' }}</p>
                                <p class="card-text"><strong>Location:</strong> {{ $education['city'] }},
                                    {{ $education['state'] }}, {{ $education['country'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Skills Section -->
                <div class="mb-4">
                    <h5 class="mb-3">Skills</h5>
                    <div class="row">
                        @foreach ($resume['skills'] as $skill)
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $skill['name'] }}</h5>
                                        <!-- You can add more details about the skill if available -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Languages Section -->
                <div class="mb-4">
                    <h5 class="mb-3">Languages</h5>
                    <ul class="list-group">
                        @foreach ($resume['languages'] as $language)
                            <li class="list-group-item">{{ $language['name'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
