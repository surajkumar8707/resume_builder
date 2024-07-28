<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - Suraj Verma</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            padding: 20px;
        }

        .header {
            display: flex;
            align-items: center;
            border-bottom: 2px solid #ccc;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-right: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .header .contact-info {
            margin-left: auto;
        }

        .header .contact-info p {
            margin: 5px 0;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #007bff;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .section p {
            margin: 5px 0;
            color: #666;
        }

        .skills,
        .languages {
            list-style: none;
            padding: 0;
        }

        .skills li,
        .languages li {
            background: #e9ecef;
            padding: 8px;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .languages li span {
            float: right;
        }

        .print-button-container {
            text-align: end;
        }

        .print-button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .print-button-container .btn.btn-primary {
            padding: 8px 15px;
            background: white;
            border: 1px solid red;
            cursor: pointer;
            transition: all 0.3s linear;
            border-radius: 5px;
            text-decoration: none;
            color: red;

        }

        .print-button-container .btn.btn-primary:hover {
            background: red;
            color: white;
            border: 1px solid black !important;
        }


        @media print {
            .print-button-container {
                display: none;
                /* Hide the print button when printing */
            }

            .skills li,
            .languages li {
                background: #e9ecef;
                padding: 2px 0px;
                margin-bottom: 0px;
                border-radius: 0px;
            }

            .container {
                max-width: 100%;
                margin: 20px auto;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: none;
                overflow: hidden;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-end print-button-container">
            <button class="btn btn-primary" onclick="printPDF()"><i class="fa fa-file-pdf-o"></i> Print</button>
            @guest
                <button class="btn btn-primary" onclick="printPDF()"><i class="fa fa-file-pdf-o"></i> Home Page</button>
            @endguest
            @auth
                <a class="btn btn-primary" href="{{ route('user.my.resumes.index') }}"><i class="fa fa-file-pdf-o"></i> My
                    Resume</a>
            @endauth
            @if (Auth::guard('admin')->check())
                <a class="btn btn-primary" href="{{ route('user.my.resumes.index') }}"><i class="fa fa-file-pdf-o"></i>
                    All
                    Resume</a>
            @else
            @endif
        </div>
        <div class="print-resume">

            {{-- personal info --}}
            <div class="header">
                @if (!empty($resume->photo))
                    <img src="{{ public_asset($resume->photo) }}" alt="Profile Picture" class="img-fluid img-thumbnail">
                @endif
                <div>
                    <h2>{{ $resume->first_name . ' ' . $resume->last_name }}</h2>
                    <div class="contact-info">
                        <p><i class="fa fa-address-card-o"></i> {{ $resume->address }}</p>
                        <p> <i class="fa fa-phone"></i> {{ $resume->phone }}</p>
                        <p><i class="fa fa-envelope"></i> {{ $resume->email }}</p>
                    </div>
                </div>
            </div>

            {{-- summary --}}
            @if (!empty($resume->professional_summary))
                <div class="section">
                    <h2>SUMMARY</h2>
                    <p>{{ $resume->professional_summary }}</p>
                </div>
            @endif

            {{-- Education --}}
            @if (isset($resume->educations) and count($resume->educations) > 0)
                <div class="section">
                    <h2>EDUCATION AND TRAINING</h2>
                    @foreach ($resume->educations as $educations)
                        <p>
                            <strong>
                                {{ $educations->school_name }}
                                @if ($educations->city)
                                    , {{ $educations->city }}
                                @endif
                                @if ($educations->state)
                                    , {{ $educations->state }}
                                @endif
                                @if ($educations->country)
                                    , {{ $educations->country }}
                                @endif
                                @if ($educations->start_date)
                                    , {{ $educations->start_date }}
                                @endif
                                @if ($educations->end_date)
                                    - {{ $educations->end_date }}
                                @endif
                            </strong>

                            @if ($educations->field_of_study)
                                <br>{{ $educations->field_of_study }}
                            @endif
                        </p>
                    @endforeach
                    </p>
                </div>
            @endif

            @if (isset($resume->workExperiences) and count($resume->workExperiences) > 0)
                <div class="section">
                    <h2>EXPERIENCE</h2>
                    @foreach ($resume->workExperiences as $experience)
                        <p>
                            <strong>
                                {{ $experience->company_name }}
                                @if ($experience->city)
                                    , {{ $experience->city }}
                                @endif
                                @if ($experience->state)
                                    , {{ $experience->state }}
                                @endif
                                @if ($experience->country)
                                    , {{ $experience->country }}
                                @endif
                                @if ($experience->start_date)
                                    , {{ $experience->start_date }}
                                @endif
                                @if ($experience->end_date)
                                    - {{ $experience->end_date }}
                                @endif
                            </strong>

                            @if (!empty($experience->currently_work) and $experience->currently_work == 'Present')
                                <br>{{ $experience->currently_work }}
                            @endif
                        </p>
                    @endforeach
                    </p>
                </div>
            @endif

            @if (isset($resume->skills) and count($resume->skills) > 0)
                <div class="section">
                    <h2>SKILLS</h2>
                    <ul class="skills">
                        @foreach ($resume->skills as $skill)
                            <li>{{ $skill->name }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (isset($resume->languages) and count($resume->languages) > 0)
                <div class="section">
                    <h2>LANGUAGES</h2>
                    <ul class="languages">
                        @foreach ($resume->languages as $language)
                            <li>{{ $language->name }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    <script>
        function printPDF() {
            window.print();
        }
    </script>
</body>

</html>
