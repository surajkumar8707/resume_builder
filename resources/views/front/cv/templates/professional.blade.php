<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - Suraj Verma</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #6c757d;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: relative;
        }

        .header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            position: absolute;
            right: 20px;
            top: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
            padding-top: 20px;
        }

        .content {
            display: flex;
            padding: 20px;
        }

        .left-column {
            width: 35%;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .right-column {
            width: 65%;
            padding: 20px;
        }

        .left-column h2,
        .right-column h2 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .contact p,
        .skills ul,
        .languages ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .skills ul,
        .languages ul {
            margin-top: 10px;
        }

        .skills li,
        .languages li {
            background: #e9ecef;
            padding: 8px;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h3 {
            margin: 0;
            color: #333;
        }

        .section p {
            margin: 5px 0;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="">
        <div class="header">
            <h1>{{ $resume->first_name . ' ' . $resume->last_name }}</h1>
            <img src="https://img.freepik.com/premium-vector/young-smiling-man-avatar-man-with-brown-beard-mustache-hair-wearing-yellow-sweater-sweatshirt-3d-vector-people-character-illustration-cartoon-minimal-style_365941-860.jpg"
                alt="Profile Picture">
        </div>
        <div class="content">
            <div class="left-column">
                <div class="contact section">
                    <h2>Contact</h2>
                    <p><strong>Email:</strong> {{ $resume->email }}</p>
                    <p><strong>Phone:</strong> {{ $resume->phone }}</p>
                    <p><strong>Address:</strong> {{ $resume->address }} | {{ $resume->city }} | {{ $resume->state }} |
                        {{ $resume->country }}</p>
                </div>

                @if (isset($resume->skills) and count($resume->skills) > 0)
                    <div class="skills section">
                        <h2>Skills</h2>
                        <ul>
                            @foreach ($resume->skills as $skill)
                                <li>{{ $skill->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (isset($resume->languages) and count($resume->languages) > 0)
                    <div class="languages section">
                        <h2>Languages</h2>
                        <ul>
                            @foreach ($resume->languages as $skill)
                                <li>{{ $skill->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="right-column">
                @if (isset($resume->workExperiences) and count($resume->workExperiences) > 0)
                    {{-- @dd($resume->workExperiences); --}}
                    <div class="work-experience section">
                        <h2>Work Experience</h2>
                        @foreach ($resume->workExperiences as $experience)
                            <div class="job">
                                <h3>{{ $experience->company_name }} | {{ $experience->city }},
                                    {{ $experience->state }},
                                    {{ $experience->country }}</h3>
                                <p>
                                    {{ $experience->company_name }}
                                    @if (!empty($experience->start_date))
                                        | {{ $experience->start_date }} - {{ $experience->end_date }}
                                    @endif
                                </p>
                            </div>
                        @endforeach
                    </div>
                @endif

                {{-- @dd($resume->educations); --}}
                @if (isset($resume->educations) and count($resume->educations) > 0)
                    <div class="education section">
                        <h2>Education</h2>
                        @foreach ($resume->educations as $education)
                            <div class="school">
                                <h3>
                                    {{ $education->school_name }}
                                    |
                                    @if ($education->city)
                                        {{ $education->city }},
                                    @endif
                                    @if ($education->state)
                                        {{ $education->state }},
                                    @endif
                                    @if ($education->country)
                                        {{ $education->country }},
                                    @endif
                                </h3>
                                <p>{{ $education->degree }} | Apr.2014 - Jun.2015</p>
                                <p>{{ $education->field_of_study }}</p>
                            </div>
                        @endforeach

                    </div>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
