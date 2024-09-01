<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Create Resume</title>
    <link rel="icon" type="image/x-icon" href="{{ public_asset('assets/front/images/favicon.ico') }}" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ public_asset('assets/front/plugins/dropzone/min/dropzone.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ public_asset('assets/front/css/styles.css') }}" rel="stylesheet" />

    @stack('styles')
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
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">CV Maker</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    src="{{ public_asset('assets/front/images/profile.jpg') }}" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#personal-info">Personal Info</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#work-experience">Work Experience</a>
                </li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#languages">Languages</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#professional-summary">Professional
                        Summary</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('front.index') }}">Home</a>
                <li class="nav-item"><a class="nav-link js-scroll-trigger"
                        href="{{ route('user.login.form') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <form method="POST" action="{{ route('front.submit.cv') }}" enctype="multipart/form-data">
            @csrf
            <!-- personal-info-->
            @auth
                <div class="text-end">
                    <a class="btn btn-primary text-white" href="{{ route('user.my.resumes.index') }}">My Resume</a>
                </div>
            @endauth
            <section class="resume-section" id="personal-info">
                @include('front.cv.personal_info')
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="work-experience">
                @include('front.cv.work_experience')
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    @include('front.cv.education')
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    @include('front.cv.skills')
                </div>
            </section>
            <hr class="m-0" />
            <!-- languages-->
            <section class="resume-section" id="languages">
                <div class="resume-section-content">
                    @include('front.cv.language')
                </div>
            </section>
            <hr class="m-0" />
            <!-- professional-summary-->
            <section class="resume-section" id="professional-summary">
                <div class="resume-section-content">
                    @include('front.cv.professional_summary')
                </div>
            </section>

            <div class="m-5 mt-0">
                <button type="submit" class="btn btn-primary">Create CV</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>

        </form>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Dropzone image uploader -->
    <script src="{{ public_asset('assets/front/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

    <!-- Core theme JS-->
    <script src="{{ public_asset('assets/front/js/scripts.js') }}"></script>

    @stack('scripts')


</body>

</html>
