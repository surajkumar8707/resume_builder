<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Resume - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="{{ public_asset('assets/front/images/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ public_asset('assets/front/css/styles.css') }}" rel="stylesheet" />
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
                </li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <form method="POST" action="" onsubmit="return false;">
            <!-- personal-info-->
            <section class="resume-section" id="personal-info">
                <div class="resume-section-content">
                    <div class="row my-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                    placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control"
                                    placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Phone" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-4">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control" placeholder="Address" required cols="30"
                            rows="3"></textarea>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="country" name="country" id="country" class="form-control"
                                    placeholder="Country" required value="India">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control"
                                    placeholder="State" required value="Uttar Pradesh">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control"
                                    placeholder="City" required value="Lucknow">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" name="photo" id="photo" class="form-control"
                            placeholder="photo" required value="Lucknow">
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="work-experience">
                <div class="resume-section-content">
                    <div class="work-experience-container">
                        <div class="work-experience-data mb-3">
                            <div class="row">
                                <div class="col-11">
                                    <div class="card p-2">
                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="work_experience[0][company_name]">Company Name</label>
                                                    <input type="text" name="work_experience[0][company_name]"
                                                        id="work_experience[0][company_name]" class="form-control"
                                                        placeholder="City" required value="Lucknow">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="work_experience[0][company_name]">Job Title</label>
                                                    <input type="text" name="work_experience[0][company_name]"
                                                        id="work_experience[0][company_name]" class="form-control"
                                                        placeholder="City" required value="Lucknow">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="work_experience[0][start_date]">Start Date</label>
                                                    <input type="month" name="work_experience[0][start_date]"
                                                        id="work_experience[0][start_date]" class="form-control"
                                                        placeholder="start_date" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="work_experience[0][end_date]">End Date</label>
                                                    <input type="month" name="work_experience[0][end_date]"
                                                        id="work_experience[0][end_date]" class="form-control"
                                                        placeholder="end_date">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <input type="checkbox" name="work_experience[0][currently_work]"
                                                id="work_experience[0][currently_work]" value="present">
                                            <label for="work_experience[0][currently_work]">I currently work
                                                here</label>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="work_experience[0][country]">Country</label>
                                                    <input type="text" name="work_experience[0][country]"
                                                        id="work_experience[0][country]" class="form-control"
                                                        placeholder="country" required value="India">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="work_experience[0][state]">State</label>
                                                    <input type="text" name="work_experience[0][state]"
                                                        id="work_experience[0][state]" class="form-control"
                                                        placeholder="state" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="work_experience[0][city]">City</label>
                                                    <input type="text" name="work_experience[0][city]"
                                                        id="work_experience[0][city]" class="form-control"
                                                        placeholder="city">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-link add_work_experience_button"><i class="fa fa-plus"></i>
                        Add work
                        experience</button>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">

                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">

                </div>
            </section>
            <hr class="m-0" />
            <!-- languages-->
            <section class="resume-section" id="languages">
                <div class="resume-section-content">

                </div>
            </section>
            <hr class="m-0" />
            <!-- professional-summary-->
            <section class="resume-section" id="professional-summary">
                <div class="resume-section-content">

                </div>
            </section>
        </form>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ public_asset('assets/front/js/scripts.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('button.add_work_experience_button').click(function() {
                var main = $('.work-experience-container');
                var current_length = $('.work-experience-data').length;
                var html_data = `
                    <div class="work-experience-data mb-3">
                        <div class="row">
                            <div class="col-11">
                                <div class="card p-2">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="work_experience[` + current_length + `][company_name]">Company Name</label>
                                                <input type="text" name="work_experience[` + current_length + `][company_name]"
                                                    id="work_experience[` + current_length + `][company_name]" class="form-control"
                                                    placeholder="City" required value="Lucknow">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="work_experience[` + current_length + `][company_name]">Job Title</label>
                                                <input type="text" name="work_experience[` + current_length + `][company_name]"
                                                    id="work_experience[` + current_length + `][company_name]" class="form-control"
                                                    placeholder="City" required value="Lucknow">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="work_experience[` + current_length + `][start_date]">Start Date</label>
                                                <input type="month" name="work_experience[` + current_length + `][start_date]"
                                                    id="work_experience[` + current_length + `][start_date]" class="form-control"
                                                    placeholder="start_date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="work_experience[` + current_length + `][end_date]">End Date</label>
                                                <input type="month" name="work_experience[` + current_length + `][end_date]"
                                                    id="work_experience[` + current_length + `][end_date]" class="form-control"
                                                    placeholder="end_date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <input type="checkbox" name="work_experience[` + current_length + `][currently_work]"
                                            id="work_experience[` + current_length + `][currently_work]" value="present">
                                        <label for="work_experience[` + current_length + `][currently_work]">I currently work
                                            here</label>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="work_experience[` + current_length + `][country]">Country</label>
                                                <input type="text" name="work_experience[` + current_length + `][country]"
                                                    id="work_experience[` + current_length + `][country]" class="form-control"
                                                    placeholder="country" required value="India">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="work_experience[` + current_length + `][state]">State</label>
                                                <input type="text" name="work_experience[` + current_length + `][state]"
                                                    id="work_experience[` + current_length + `][state]" class="form-control"
                                                    placeholder="state" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="work_experience[` + current_length + `][city]">City</label>
                                                <input type="text" name="work_experience[` + current_length + `][city]"
                                                    id="work_experience[` + current_length + `][city]" class="form-control"
                                                    placeholder="city">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-1">
                                <button type="button" class="btn btn-danger delete_work_experience_button"><i
                                        class="fa fa-trash"></i></button>
                            </div>
                        </div>
                    </div>
                `;
                $(main).append(html_data);
            });

            $('body').on('click', 'button.delete_work_experience_button', function() {
                $(this).closest('.work-experience-data').remove();
                alert('Are you sure')
            });
        });
    </script>
</body>

</html>
